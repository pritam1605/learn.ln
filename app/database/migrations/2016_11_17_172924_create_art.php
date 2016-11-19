<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArt extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('art2', function(Blueprint $table) {
			$table->increments('id');
			$table->string('artist');			// varchar(255)
			$table->string('title', 100);		// varchar(100)
			$table->text('description');
			$table->date('created');
			$table->date('exhibition_date');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('art2');
	}

}
