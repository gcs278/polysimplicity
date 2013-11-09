<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Management extends Controller_Web_Containers_Default {

	// Index page for User
	// Will be Management menu
	public function action_index() {
		// Load the user information
		$user = Auth::instance()->get_user();

		// Check if user is logged in
		if (!$user)
		{
			// If not, redirect to login page
			$this->redirect(Route::get('home')->uri(
    		array(
        		'controller' => 'management',
        		'action'     => 'login',                            
   			)
			));   
			return;
		}

		// Display Menu Page
		$view=view::factory('controllers/web/management/index');	
		$this->view = $view;
		$this->view->user = $user; // User ID
	}

	// Form for inserting a candidate
	public function action_form() {
		// Load the user information
		$user = Auth::instance()->get_user();

		// Check if user is logged in
		if (!$user)
		{
			$this->redirect(Route::get('home')->uri(
    		array(
        		'controller' => 'management',
        		'action'     => 'login',                            
   			)
			));   
			return;
		}

		// Check if it a POST
		if ($this->request->method() == HTTP_Request::POST) {
			
			try {
				// Gather all variable from POST
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

				// Creat Personal Info row
				$personal = ORM::factory('personal');
				$personal->gender = $gender;
				$personal->birth_date = $birth_date;
				$personal->birth_state = $birth_state;
				$personal->party = $party;
				$personal->save();

				// Create
				$candidate = ORM::factory('Candidates');
				$candidate->personal_id = $personal->id;
				$candidate->first_name = $first_name;
				$candidate->middle_name = $middle_name;
				$candidate->last_name = $last_name;
				$candidate->save();

				$positions = ORM::factory('positions');
				$positions->title = $position_title;
				$positions->term_start = $position_term_start;
				$positions->term_end = $position_term_end;
				$positions->status = $position_status;
				$positions->candidates_id = $candidate->id;
				$positions->save();

			$candidate->save();
			} catch(Exception $e) {
				
				$view=view::factory('controllers/web/management/form');
				$this->view = $view;
				$errorMessage = "<script> alert('Server Side Validation Error:";
				$errorMessage .= $e->getMessage();
				$errorMessage .= "'); </script>";
				$this->view->script = $errorMessage;
				return;
			}
			$view=view::factory('controllers/web/management/submit');	
			$this->view = $view;
			return;
			}

			$this->template->title = 'Home';
			$view=view::factory('controllers/web/management/form');
			$this->view = $view;
	}

	public function action_login() {
		$view= View::factory('controllers/web/management/login')
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
            		'controller' => 'management',
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
		$this->view = View::factory('controllers/web/management/create')
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

