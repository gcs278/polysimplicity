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
			$view=view::factory('controllers/web/home/candidate');
			$this->view = $view;
			$this->view->head_shot = "";
			$this->view->candidate_name = "Terry McAullife";
		    $this->view->candidate_gender = "Male";
			$this->view->candidate_birthDate = "10/10/1970";
			$this->view->candidate_birthState = "VA";
			$this->view->candidate_position = "Boss";
			$this->view->candidate_party = "Democrat";
			$this->view->candidate_experience = "baby, human, god";
			$this->view->candidate_taxation = "for";
			$this->view->candidate_abortion = "against";
			$this->view->candidate_military = "mili";
			$this->view->candidate_guns = "guns";
			$this->view->candidate_marijuana = "mari";
			$this->view->candidate_sameSexMarriage= "samesexm";
			$this->view->candidate_immigration = "imm";
			$this->view->candidate_education = "edu";
			$this->view->candidate_environment = "env";
			$this->view->candidate_healthCare = "hc";
			$this->view->candidate_socialSecurity = "ss";
			$this->view->candidate_deathPenalty = "dp";
			$this->view->candidate_taxationDescrip = "11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111";
			$this->view->candidate_abortionDescrip = "2222222222222222223";
			$this->view->candidate_militaryDescrip = "33333333333";
			$this->view->candidate_gunsDescrip = "4444444444444";
			$this->view->candidate_marijuanaDescrip = "55555555555";
			$this->view->candidate_sameSexMarriageDescrip = "6666666666";
			$this->view->candidate_immigrationDescrip = "777777777";
			$this->view->candidate_educationDescrip = "888888888888";
			$this->view->candidate_environmentDescrip = "9999999999999";
			$this->view->candidate_healthCareDescrip = "10";
			$this->view->candidate_socialSecurityDescrip = "11";
			$this->view->candidate_deathPenaltyDescrip = "12";
		}
	}
}

