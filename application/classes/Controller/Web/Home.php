<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Home extends Controller_Web_Containers_Default {

	public function action_index() {
		// Grant's exmaple code
		$model = ORM::factory('Candidates');
		//$model->find(0);
		Debug::vars($this->request->method());
		if ($this->request->is_ajax()) {
            $this->auto_render = FALSE;
            
            if (isset($_GET['term'])) {
            	$query = $_GET['term'];
            	
            	$array = array();
            	$candidates = ORM::factory('Candidates')->where('first_name', 'like', "$query%")->find_all();
            	foreach ($candidates as $candidate) {
            		$array = $candidate->first_name . ' ' . $candidate->middle_name . ' ' . $candidate->last_name;
            	}
            	echo json_encode(array($array));
            } else {
				$array = array();
				$state = $_GET['state'];
				$candidates = ORM::factory('Candidates')->with('Personal')->where('birth_state', '=', $state)->find_all();
				foreach ($candidates as $candidate) {
					$array[] = $candidate->first_name . " " . $candidate->middle_name . " " . $candidate->last_name;
				}
				echo json_encode($array);
            }
        } else if ($this->request->method() == HTTP_Request::POST) {
			
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

	public function action_candidate() {
		$id = $this->request->param('id');
		if (!isset($id)){
			$id = 4;
		}
		// Grant's exmaple code
		$model = ORM::factory('Candidates');
		//$model->find(0);
		if (!isset($_POST)) {
			
			$view=view::factory('controllers/web/home/submit');	
			$this->view = $view;
			$name = $_POST['FirstName'];
			
			if ( !isset($name) )  {
				$this->view->canName = "No input";
			} else {
				$this->view->canName = $name;
			}
			
			
		} else {
			
			$this->template->title = 'Home';
			$view=view::factory('controllers/web/home/candidate');
			$this->view = $view;
			$candidates = ORM::factory('Candidates')->with('Personal')->where('candidates.id','=',$id)->find(0);
            $this->view->candidate_name = $candidates->first_name ." ". $candidates->middle_name . " " . $candidates->last_name;
            $this->view->image = base64_encode($candidates->image);
            $this->view->gender = ucwords($candidates->Personal->gender);
            $this->view->birth_date = date('F j, Y', strtotime($candidates->Personal->birth_date));
            $this->view->birth_state = $this->convert_state($candidates->Personal->birth_state);
            $this->view->party = $candidates->Personal->party;

            $candidate_views = ORM::factory('Views')->where('candidates_id','=',$id)->find_all();

            $this->view->views_display = "";
            // echo Debug::vars($candidate_views);
            foreach($candidate_views as $candidate_view) {

            	$type_id = $candidate_view->viewsType_id;
            	$view_type = ORM::factory('viewsType')->where('id','=',$type_id)->find(0);

            	$view_type->name = ucwords(str_replace("_"," ", $view_type->name));
            	$this->view->views_display = $this->view->views_display . "<div class='col-sm-2 view-block'>
                <h4>" . $view_type->name ."</h4>
                	<div class='thin-line-light'></div>
                <h1>".$candidate_view->simple."</h1>
            	</div>";
            }
		}
	}

	function convert_state($name, $to='name') {
	$states = array(
	array('name'=>'Alabama', 'abbrev'=>'AL'),
	array('name'=>'Alaska', 'abbrev'=>'AK'),
	array('name'=>'Arizona', 'abbrev'=>'AZ'),
	array('name'=>'Arkansas', 'abbrev'=>'AR'),
	array('name'=>'California', 'abbrev'=>'CA'),
	array('name'=>'Colorado', 'abbrev'=>'CO'),
	array('name'=>'Connecticut', 'abbrev'=>'CT'),
	array('name'=>'Delaware', 'abbrev'=>'DE'),
	array('name'=>'Florida', 'abbrev'=>'FL'),
	array('name'=>'Georgia', 'abbrev'=>'GA'),
	array('name'=>'Hawaii', 'abbrev'=>'HI'),
	array('name'=>'Idaho', 'abbrev'=>'ID'),
	array('name'=>'Illinois', 'abbrev'=>'IL'),
	array('name'=>'Indiana', 'abbrev'=>'IN'),
	array('name'=>'Iowa', 'abbrev'=>'IA'),
	array('name'=>'Kansas', 'abbrev'=>'KS'),
	array('name'=>'Kentucky', 'abbrev'=>'KY'),
	array('name'=>'Louisiana', 'abbrev'=>'LA'),
	array('name'=>'Maine', 'abbrev'=>'ME'),
	array('name'=>'Maryland', 'abbrev'=>'MD'),
	array('name'=>'Massachusetts', 'abbrev'=>'MA'),
	array('name'=>'Michigan', 'abbrev'=>'MI'),
	array('name'=>'Minnesota', 'abbrev'=>'MN'),
	array('name'=>'Mississippi', 'abbrev'=>'MS'),
	array('name'=>'Missouri', 'abbrev'=>'MO'),
	array('name'=>'Montana', 'abbrev'=>'MT'),
	array('name'=>'Nebraska', 'abbrev'=>'NE'),
	array('name'=>'Nevada', 'abbrev'=>'NV'),
	array('name'=>'New Hampshire', 'abbrev'=>'NH'),
	array('name'=>'New Jersey', 'abbrev'=>'NJ'),
	array('name'=>'New Mexico', 'abbrev'=>'NM'),
	array('name'=>'New York', 'abbrev'=>'NY'),
	array('name'=>'North Carolina', 'abbrev'=>'NC'),
	array('name'=>'North Dakota', 'abbrev'=>'ND'),
	array('name'=>'Ohio', 'abbrev'=>'OH'),
	array('name'=>'Oklahoma', 'abbrev'=>'OK'),
	array('name'=>'Oregon', 'abbrev'=>'OR'),
	array('name'=>'Pennsylvania', 'abbrev'=>'PA'),
	array('name'=>'Rhode Island', 'abbrev'=>'RI'),
	array('name'=>'South Carolina', 'abbrev'=>'SC'),
	array('name'=>'South Dakota', 'abbrev'=>'SD'),
	array('name'=>'Tennessee', 'abbrev'=>'TN'),
	array('name'=>'Texas', 'abbrev'=>'TX'),
	array('name'=>'Utah', 'abbrev'=>'UT'),
	array('name'=>'Vermont', 'abbrev'=>'VT'),
	array('name'=>'Virginia', 'abbrev'=>'VA'),
	array('name'=>'Washington', 'abbrev'=>'WA'),
	array('name'=>'West Virginia', 'abbrev'=>'WV'),
	array('name'=>'Wisconsin', 'abbrev'=>'WI'),
	array('name'=>'Wyoming', 'abbrev'=>'WY')
	);

	$return = false;
	foreach ($states as $state) {
		if ($to == 'name') {
			if (strtolower($state['abbrev']) == strtolower($name)){
				$return = $state['name'];
				break;
			}
		} else if ($to == 'abbrev') {
			if (strtolower($state['name']) == strtolower($name)){
				$return = strtoupper($state['abbrev']);
				break;
			}
		}
	}
	return $return;
}
}

