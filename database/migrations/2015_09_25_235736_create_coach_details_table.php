<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coach_details', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('club_id')->unsigned()->index();
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
            $table->integer('coach_id')->unsigned()->index();
            $table->foreign('coach_id')->references('id')->on('coaches')->onDelete('cascade');
            $table->string('status');
            $table->date('date_start');
            $table->date('date_end');
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
		Schema::drop('coach_details');
	}

}
