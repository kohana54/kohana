<?php namespace App\Controller;

use Kohana\Core\Controller;
use Kohana\Core\Request;
use Kohana\Core\View;

class Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('<h1>Hello ' . Request::factory('welcome/foo')->execute() . '</h1>');
	}

} // End Welcome
