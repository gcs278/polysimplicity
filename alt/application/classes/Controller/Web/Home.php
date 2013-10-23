<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Home extends Controller_Web_Containers_Default {

	public function action_index() {
		// Grant's exmaple code
		$model = ORM::factory('Candidates');
		$model->first_name = "BOB";
		$model->middle_name = "Middle";
		$model->last_name = "Spence";
		//$model->save();
		$this->template->title = 'Home';
		$view=view::factory('controllers/web/home/index');
		$this->view = $view;

	}

}

