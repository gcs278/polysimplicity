<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Home extends Controller_Web_Containers_Default {

	public function action_index() {
		// Grant's exmaple code
		$model = ORM::factory('Candidates');
		$model->find(0);
		if ($_POST) {
			$view=view::factory('controllers/web/home/submit');	
			$this->view = $view;
			$name = $_POST['FirstName'];
			
			if ( !isset($name) )  {
				$this->view->canName = "No input";
			} else {
				$this->view->canName = $name;
			}
			
			
		} else {
			//foreach ( $model as $person) {
				//if getting Jon
			//	$person->last_name = "Reassign";	
			//}
			//$model->first_name = "BOB";
			//$model->middle_name = "Middle";
			//$model->last_name = "Spence";
			//$model->save();
			
			$this->template->title = 'Home';
			$view=view::factory('controllers/web/home/index');
			$this->view = $view;
			$this->view->last_name = $model->last_name;
		}
	}
}

