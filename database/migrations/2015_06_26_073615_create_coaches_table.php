<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coaches', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
            $table->string('address');
       
            $table->string('email_id');
            $table->string('work'); 
			$table->text('image');
		    $table->bigInteger('contact_home');    
            $table->bigInteger('contact_mobile');
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
		Schema::drop('coaches');
	}

}
