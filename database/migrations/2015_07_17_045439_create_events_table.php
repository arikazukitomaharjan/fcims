<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('home_club_id')->unsigned()->index();
            $table->foreign('home_club_id')->references('id')->on('clubs')->onDelete('cascade');
            $table->integer('home_goal');
            $table->text('image_home');
            $table->integer('away_club_id')->unsigned()->index();
            $table->foreign('away_club_id')->references('id')->on('clubs')->onDelete('cascade');
            $table->integer('away_goal');
            $table->text('image_away');
            $table->integer('championship_id')->unsigned()->index();
            $table->foreign('championship_id')->references('id')->on('championship_details')->onDelete('cascade');
            $table->string('time');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
