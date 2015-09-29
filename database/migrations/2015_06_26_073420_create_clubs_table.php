<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clubs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
            $table->date('est_date');
            $table->string('CEO');
            $table->string('country');
            $table->string('development_region');
            $table->string('zone');
            $table->string('district');
            $table->string('municipality');
            $table->string('ward_no');
            $table->string('tole');
            $table->bigInteger('contact_no');
            $table->string('email_id');
            $table->string('website');
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
		Schema::drop('clubs');
	}

}
