<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			         $table->increments('id');
			        $table->string('first_name');
                    $table->string('middle_name');
                    $table->string('last_name');
                    $table->string('phone');
                    $table->string('email');
                    $table->string('role');
                    $table->string('password');
                    $table->string('remember_token');
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
		Schema::drop('users');
	}

}
