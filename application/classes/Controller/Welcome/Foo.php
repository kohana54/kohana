<?php namespace App\Controller\Welcome;

use Kohana\Core\Controller;
use Kohana\Core\Request;
use Kohana\Core\View;

class Foo extends Controller {

	public function action_index()
	{
		$this->response->body('<h1>World</h1>');
	}

} // End Welcome
