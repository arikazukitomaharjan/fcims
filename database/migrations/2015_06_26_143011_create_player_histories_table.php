<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerHistoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('player_histories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('player_id')->unsigned()->index();
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');
            $table->integer('previous_club_id')->unsigned()->index();
            $table->foreign('previous_club_id')->references('id')->on('clubs')->onDelete('cascade');
            $table->integer('current_club_id')->unsigned()->index();
            $table->foreign('current_club_id')->references('id')->on('clubs')->onDelete('cascade');           
            $table->float('salary');
            $table->integer('new_salary');
            $table->string('position');
            $table->string('status');
            $table->string('won_trophies');
            $table->date('won_trophies_date');
            $table->integer('goal');
            $table->date('date_range');
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
		Schema::drop('player_histories');
	}

}
