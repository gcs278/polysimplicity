<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_API_API extends Controller_API_Containers_Default {
	
	public function action_candidates() {

		if ($this->request->is_ajax() ){
			if (isset($_GET['term'])) {
				$query = $_GET['term'];
				if ($query === 'crap') {
					echo json_encode(array("What?"));
				} else {
					$array = array();
					$candidates = ORM::factory('Candidates')->where('first_name', 'like', "$query%")
						->or_where('middle_name','like',"$query%")
						->or_where('last_name','like',"$query%")->find_all();
					foreach ($candidates as $candidate) {
						array_push($array, $candidate->first_name . ' ' . $candidate->middle_name . ' ' . $candidate->last_name);
					}
					echo json_encode($array);
				}
			} else if (isset($_GET['state'])) {
				$state = $_GET['state'];
				
				$candidates = ORM::factory('Candidates')->with('Positions')->where('state', '=', $state)->find_all()->as_array();
				sleep(2);
				$results = array();
				foreach ($candidates as $candidate) {
					array_push($results, array('name' =>  $candidate->first_name . ' ' . $candidate->middle_name . ' ' . $candidate->last_name,
						'id' => $candidate->id, 'image' => base64_encode($candidate->image)));
				}
				if (empty($results)) {
					array_push($results, array('name' => 'No Candidates found', 'id' => -1));
				}
				echo json_encode($results);
			}
		}
	}
	
	public function action_views() {
		if ($this->request->is_ajax()) {
			$name = $_GET['name'];
			$view = $_GET['view'];
			$namearr = explode(" ", $name);
			$candidate = ORM::factory('Candidates')->where('first_name', '=', $namearr[0])
					->and_where('middle_name','=', $namearr[1])
					->and_where('last_name','=', $namearr[2])->find();
			$view_name = str_replace(" ", "_", strtolower($view));
			$view_type = ORM::factory('viewsType')->where('name', '=', $view_name)->find();
			$detail_view = ORM::factory('Views')->where('candidates_id','=',$candidate->id)
				->and_where('viewsType_id', '=', $view_type->id)->find();
			sleep(1);
			echo $detail_view->detail;
		}
	}
}