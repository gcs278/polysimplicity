<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Home extends Controller_Web_Containers_Default {

	public function action_index() {
		// Grant's exmaple code
		$model = Model::factory('Candidates');
		$results = $model->get_all_candidates();
		$this->template->title = 'Home';
		$view=view::factory('controllers/web/home/index');
		$this->view = $view;

	}

}

