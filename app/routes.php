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


	Route::controller('auth', 'AuthController');

	Route::group(['before'=>'auth'], function(){


		Route::controller('reports', 'ReportsController');

		Route::resource('internets', 'InternetsController');

		Route::resource('services', 'ServicesController');

		Route::resource('internets.managements', 'ManagementsController');

		Route::resource('categories', 'CategoriesController');

		Route::resource('techniques', 'TechniquesController');

		Route::controller('/', 'MainController');


	});


// Route::resource('internets', 'InternetsController');

// Route::resource('services', 'ServicesController');

// Route::resource('managements', 'ManagementsController');

// Route::resource('categories', 'CategoriesController');

// Route::resource('techniques', 'TechniquesController');