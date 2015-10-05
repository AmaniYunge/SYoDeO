<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('team', function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->string('image');
			$table->string('title');
			$table->string('phone');
			$table->string('email');
			$table->string('password');
			$table->string('descriptions');
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
		//
		Schema::drop('team');
	}

}