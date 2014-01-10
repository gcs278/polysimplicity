<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_API_API extends Controller_API_Containers_Default {
	
	public function action_candidates() {

		if ($this->request->is_ajax() ){
			if (isset($_GET['term'])) {
				$query = $_GET['term'];
				
				$array = array();
				$candidates = ORM::factory('Candidates')->where('first_name', 'like', "$query%")
				->or_where('middle_name','like',"$query%")
				->or_where('last_name','like',"$query%")->find_all();
				foreach ($candidates as $candidate) {
					array_push($array, $candidate->first_name . ' ' . $candidate->middle_name . ' ' . $candidate->last_name);
				}
				echo json_encode($array);
			}
		}
	}
}