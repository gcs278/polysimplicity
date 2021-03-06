<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Home extends Controller_Web_Containers_Default {

	public function action_index() {
		// Grant's exmaple code
		$model = ORM::factory('Candidates');
		//$model->find(0);
		Debug::vars($this->request->method());
		
		$this->template->title = 'Home';
		$view=view::factory('controllers/web/home/index');
		$this->view = $view;
		$this->view->last_name = $model->last_name;
	}

	// Action to display an candidate
	// Uses /candidate/[id] to pull candidate
	public function action_candidate() {
		$id = $this->request->param('id');

		// If an id is not specified in the title
		if (!isset($id)){
			$this->view = view::factory('controllers/web/home/page_not_found');
			return;
		}

		$this->template->title = 'Home';
		$candidates = ORM::factory('Candidates')->with('Personal');
		if ( is_numeric($id) ) {
			$candidates->where('candidates.id','=',$id)->find(0);
		} else {
			$name = explode('.',$id);
			try {
				$candidates->where('candidates.first_name','=',$name[0])->where('candidates.middle_name','=',$name[1])->where('candidates.last_name','=',$name[2])->find(0);
			} catch (Exception $e) {

			}
		}
		
		// Check if the canidate was found, otherwise send to page not found
		if ( !$candidates->loaded() ) {
			$this->view = view::factory('controllers/web/home/page_not_found');
			return;
		}
		$id = $candidates->id;
		$view=view::factory('controllers/web/home/candidate');
		$this->view = $view;

		// Get Demographics
		$this->view->candidate_name = $candidates->first_name ." ". $candidates->middle_name . " " . $candidates->last_name;
		$this->view->image = base64_encode($candidates->image);
		$this->view->gender = ucwords($candidates->Personal->gender);
		$this->view->birth_date = date('F j, Y', strtotime($candidates->Personal->birth_date));
		$this->view->birth_state = $this->convert_state($candidates->Personal->birth_state);
		$this->view->party = $candidates->Personal->party;

		// Get the candidates views
		$candidate_views = ORM::factory('Views')->where('candidates_id','=',$id)->find_all();

		$this->view->views_display = "";
		// echo Debug::vars($candidate_views);

		$this->view->views_display = $this->view->views_display . "<div class='col-sm-3 list-group' style='padding-right: 0px;'>";

    // For each of the views, create a box with title and simple opinion in it
    foreach($candidate_views as $candidate_view) {

        	// Get view type
        	$type_id = $candidate_view->viewsType_id;
        	$view_type = ORM::factory('viewsType')->where('id','=',$type_id)->find(0);
        	$view_name = ucwords(str_replace("_"," ", $view_type->name));

        	// Format block
        	$this->view->views_display = $this->view->views_display . "<a href='#' class='list-group-item'>"
        		. "<strong>" . $view_name . ":</strong>" . "<br>" . $candidate_view->simple . "</a>";
		}
		
		// No views set
		if ( $this->view->views_display == "<div class='col-sm-3 list-group' style='padding-right: 0px;'>") {
			$this->view->views_display = "<h3>Hmmm...No information here</h3>";
		} else {
			$this->view->views_display = $this->view->views_display . "</div><div class='col-sm-9 well' id='detail_view' style='height: 733px; background-color: white;'>"
				. "<strong>Detail View:</strong><br/>" . $candidate_views[0]->detail . "</div>";
		}

		$running_for = ORM::factory('Positions')->where('candidates_id','=',$id)->where('status','=','Running')->find(0);
		if ( $running_for->loaded() )  {
			$this->view->position_running = $running_for->title;
		}

		$current = ORM::factory('Positions')->where('candidates_id','=',$id)->where('status','=','Current')->find(0);
		if ( $current->loaded() )  {
			$this->view->position_current = $current->title;
		}
	}

	// Function that converts state abbreviations to full state names
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

