<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('players', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
            $table->date('DOB');
            $table->string('permanent_address');
            $table->string('temporary_address');
            $table->string('blood_group');
            $table->float('height');
            $table->float('weight');
            $table->string('complexion');
            $table->bigInteger('contact_home');    
            $table->bigInteger('contact_mobile');
            $table->string('health_status');                        
			$table->text('image');
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
		Schema::drop('players');
	}

}
