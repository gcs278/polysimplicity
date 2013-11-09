<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Home extends Controller_Web_Containers_Default {

	public function action_index() {
		// Grant's exmaple code
		$model = ORM::factory('Candidates');
		//$model->find(0);
		Debug::vars($this->request->method());
		if ($this->request->method() == HTTP_Request::POST) {
			
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

public function action_form() {
		// Grant's exmaple code
		$model = ORM::factory('Candidates');
		//$model->find(0);
		if ($this->request->method() == HTTP_Request::POST) {
			


			try {
				$first_name = $_POST['firstName'];
				$middle_name = $_POST['middleName'];
				$last_name = $_POST['lastName'];

				$gender = $this->request->post('gender');
				$birth_date = $_POST['date_of_birth'];
				$birth_state = $_POST['birth_state'];
				$party = $_POST['party'];

				$position_title = $_POST['title1'];
				$position_status = $_POST['status1'];
				$position_term_start = $_POST['term_start1'];
				$position_term_end = $_POST['term_end1'];

				$detailed_view = $_POST['detail'];


				//$this->view->first_name = $gender;

				$personal = ORM::factory('personal');
				$personal->gender = $gender;
				$personal->birth_date = $birth_date;
				$personal->birth_state = $birth_state;
				$personal->party = $party;
				$personal->save();

				$model->personal_id = $personal->id;
				$model->first_name = $first_name;
				$model->middle_name = $middle_name;
				$model->last_name = $last_name;
				$model->save();

				$positions = ORM::factory('positions');
				$positions->title = $position_title;
				$positions->term_start = $position_term_start;
				$positions->term_end = $position_term_end;
				$positions->status = $position_status;
				$positions->candidates_id = $model->id;
				$positions->save();

			$model->save();
			} catch(Exception $e) {
				
				$view=view::factory('controllers/web/home/form');
				$this->view = $view;
				$errorMessage = "<script> alert('Server Side Validation Error:";
				$errorMessage .= $e->getMessage();
				$errorMessage .= "'); </script>";
				$this->view->script = $errorMessage;
				return;
			}
			$view=view::factory('controllers/web/home/submit');	
			$this->view = $view;
			return;
		}
			//foreach ( $model as $person) {
				//if getting Jon
			//	$person->last_name = "Reassign";	
			//}
			//$model->first_name = "BOB";
			//$model->middle_name = "Middle";
			//$model->last_name = "Spence";
			//$model->save();
			
			$this->template->title = 'Home';
			$view=view::factory('controllers/web/home/form');
			$this->view = $view;
			$this->view->last_name = $model->last_name;
	}
	public function action_candidate() {
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
	public function action_login() {
		$view= View::factory('controllers/web/home/login')
			->bind('message', $message);
		$this->view = $view;
			
		if (HTTP_Request::POST == $this->request->method()) 
		{
			// Attempt to login user
			$remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
			$user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), $remember);
			
			// If successful, redirect user
			if ($user) 
			{
				echo "success";
				$this->redirect(Route::get('home')->uri(
        		array(
            		'controller' => 'home',
            		'action'     => 'form',                            
       			)
    			));             
			} 
			else 
			{
				echo "failed";
				$message = 'Login failed';
			}
		}

	}

	public function action_create() 
	{
		$this->view = View::factory('controllers/web/home/create')
			->bind('errors', $errors)
			->bind('message', $message);
			
		if (HTTP_Request::POST == $this->request->method()) 
		{			
			try {
		
				// Create the user using form values
				$user = ORM::factory('user')->create_user($this->request->post(), array(
					'username',
					'password',
					'email'				
				));
				
				// Grant user login role
				$user->add('roles', ORM::factory('role', array('name' => 'login')));
				
				// Reset values so form is not sticky
				$_POST = array();
				
				// Set success message
				$message = "You have added user '{$user->username}' to the database";
				
			} catch (ORM_Validation_Exception $e) {
				
				// Set failure message
				$message = 'There were errors, please see form below.';
				
				// Set errors using custom messages
				$errors = $e->errors('models');
			}
		}
	}

}

