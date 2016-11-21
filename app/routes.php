<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {

	$landmarks = ['Time Square', 'St. Marks', 'Manhattan', 'Central Park',];
	return View::make('hello', array('location' => 'NYC', 'weather' => 'stormy', 'landmarks' => $landmarks,));

});

Route::get('/register', function() {
	return View::make('register');
});

Route::post('/register', function() {
	return View::make('register');
});

/*Route::get('signup', function() {
	return View::make('signup');
});

Route::post('thanks', function() {

	$email = Input::get('email');
	return View::make ('thanks')->with('email', $email);
});

Route::get('practice', function() {

	// Creating a table
	Schema::create('art', function($table) {
		$table->increments('id');
		$table->string('artist');			// varchar(255)
		$table->string('title', 100);		// varchar(100)
		$table->text('description');
		$table->date('created');
		$table->date('exhibition_date');
		$table->timestamps();				// this will create created_at and updated_at fields for eloquent
	});

	// Altering the table
	Schema::table('art', function($table) {
		$table->boolean('alumni')->after('description');

		if (Schema::hasColumn('art', 'exhibition_date')) {
			$table->dropColumn('exhibition_date');
		}

	});

	return 'Hello World!!!';
});

Route::get('practiceEloquent', function() {

	// Inserting into the database
	// $painting = new Painting();
	// $painting->title = 'Hello All';
	// $painting->artist = 'Pratso';
	// $painting->year = 2016;
	// $painting->save();

	// Retrieving from the database
	$painting = Painting::find(1);
	$painting->artist = 'Pratso Carseldine';
	$painting->save();
	return $painting->artist;
});

Route::get('about/directions', function() {
	return ' Directions!!!';
});

Route::get('about/content/{testVariable}', function($testVariable) {
	return "{$testVariable} content goes here.";
});*/