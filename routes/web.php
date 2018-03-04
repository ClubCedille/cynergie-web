<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/



$router->get('/','HomeController@getHome');

//named route 
$router->get('contact', [
    'as' => 'contact', 'uses' => 'ContactController@getContact'
]);




/*$router->get('/', function () use ($router) {

	if(view()->exists('home')){

			return view('home') ;

	}

	return "page home not found";
	 
});*/


/*$router->get('contact', function () use ($router) {

	if(view()->exists('contact')){

			return view('contact') ;

	}

	return "page contact not found";
	 
});*/