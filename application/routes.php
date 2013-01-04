<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/


//boards
Route::get('/boards', array( 
	'as' => 'boards', 
	'uses' => 'board@index')
);

Route::get('/board/(:num)', array(
	'as' => "board_show", 
	'uses' => 'board@show')
);

Route::get('/board/new', array(
	'as' => "board_new", 
	'uses' => 'board@new')
);

Route::get('/board/edit/(:num)', array(
	'as' => "board_edit", 
	'uses' => 'board@edit')
);

Route::post('/board/create', array(
	'as' => "board_create", 
	'uses' => 'board@create')
);

Route::post('/board/update/(:num)', array(
	'as' => "board_update", 
	'uses' => 'board@update')
);


//topics
Route::get('/topic/(:num)', array(
	'as' => "topic_show", 
	'uses' => 'topic@show')
);

Route::get('/topic/new/to/(:num)', array(
	'as' => "topic_new", 
	'uses' => 'topic@new')
);

Route::post('/topic/create', array(
	'as' => "topic_create", 
	'uses' => 'topic@create')
);


//posts
Route::get('/post/(:num)', array(
	'as' => "post_show", 
	'uses' => 'post@show')
);

Route::get('/post/new/to/(:num)', array(
	'as' => "post_new", 
	'uses' => 'post@new')
);

Route::post('/post/create', array(
	'as' => "post_create", 
	'uses' => 'post@create')
);

Route::get('/', array( 'as' => 'home', function()
	{
		return Redirect::to_route('boards');
	})
);




Route::any('/(:any)/(:any)', function($dir, $view)
{
	return View::make($dir.'.'.$view);
});


Route::controller(array('topic', 'board'));


/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});