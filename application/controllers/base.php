<?php

class Base_Controller extends Controller {

	public $layout = 'layouts.main';

	public function __construct(){

		parent::__construct();

		//CSS
		Asset::add('kickstrap', 'css/kickstrap.css');
		
		//JS
		Asset::add('kickstrap', 'bundles/kickstrap/js/kickstrap.js');
	}

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}