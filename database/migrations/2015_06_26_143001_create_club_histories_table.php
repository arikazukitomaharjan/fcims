<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubHistoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('club_histories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('club_id')->unsigned()->index();
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');         
            $table->integer('championship_id')->unsigned()->index();
            $table->foreign('championship_id')->references('id')->on('championship_details')->onDelete('cascade');
            $table->string('game_result_status');     
            $table->string('goal_count');        
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
		Schema::drop('club_histories');
	}

}
