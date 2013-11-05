<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Static extends Controller_Web_Containers_Default {

	public function action_index() {
		$url = Request::instance()->uri();
	}
}

