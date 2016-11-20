<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('user', function(Blueprint $table) {
			$table->increments('id');
			$table->string('email', 100)->unique();
			$table->string('username', 100)->unique();
			$table->string('password', 100);
			$table->string('remember_token', 100);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('user');
	}

}
