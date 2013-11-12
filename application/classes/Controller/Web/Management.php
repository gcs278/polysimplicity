<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Management extends Controller_Web_Containers_Default {

	// Index page for User
	// Will be Management menu
	public function action_index() {
		// Load the user information
		$user = Auth::instance()->get_user();
		$username = ORM::factory('Users')->where('id','=',$user)->find(0)->username;
		$username = ucfirst($username);

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
		$table = "";
		$candidates = ORM::factory('Candidates')->with('Personal')->find_all();
		foreach($candidates as $candidate) {
			$table .= "<tr><td>";
			$table .= $candidate->id;
			$table .= "</td><td>";
			$table .= HTML::anchor('home/candidate', $candidate->first_name . " " . $candidate->last_name);
			$table .= "</td><td>";
			$table .= $candidate->Personal->party;
			$table .= "</td><td>";
			$table .= $candidate->Personal->gender;
			$table .= "</td><td>";
			$table .= $candidate->Personal->birth_date;
			$table .= "</td><td>";
			$table .= $candidate->Personal->birth_state;
			$table .= "</td></tr>";
		}
		

		// Display Menu Page
		$view=view::factory('controllers/web/management/index');	
		$this->view = $view;
		$this->view->user = $username; // User ID
		$this->view->table = $table;
	}

	function convert_image($image) {
		//don't continue if an image hasn't been uploaded 
		if (!empty($image)){ 

		//copy the image to directory 
			copy($image, "./temporary/".$_SERVER['REMOTE_ADDR'].""); 

			//open the copied image, ready to encode into text to go into the database 
			$filename1 = "./temporary/".$REMOTE_ADDR; 
			$fp1 = fopen($filename1, "r"); 

			//record the image contents into a variable 
			$contents1 = fread($fp1, filesize($filename1)); 

			//close the file 
			fclose($fp1); 

			//encode the image into text 
			$encoded = chunk_split(base64_encode($contents1));  

			//insert information into the database 
			mysql_query("INSERT INTO images (img,data)"."VALUES ('NULL', '$encoded')"); 

			//delete the temporary file we made 
			unlink($filename1); 
		} else {
			return null;
		}
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

				$candidate = ORM::factory('Candidates');
				$picture = $_FILES["pic"]["tmp_name"];
				if(!isset($picture)){
					echo "Please upload an image";
				}else{
					$image = file_get_contents($picture);

					$image_name = addslashes($_FILES['pic']['name']);
				
					$image_size = getimagesize($picture);

					if($image_size==FALSE)
						echo "That's not an image.";
					else
					{
						$candidate->image = $image;
					}
				}

				// Create

				$candidate->first_name = $first_name;
				$candidate->middle_name = $middle_name;
				$candidate->last_name = $last_name;
				$candidate->save();

				// Creat Personal Info row
				$personal = ORM::factory('Personal');
				$personal->gender = $gender;
				$personal->birth_date = $birth_date;
				$personal->birth_state = $birth_state;
				$personal->party = $party;
				$personal->candidates_id = $candidate->id;
				$personal->save();

				$positions = ORM::factory('Positions');
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
				// $this->redirect(Route::get('home')->uri(
    // 			array(
    //     			'controller' => 'management',
    //     			'action'     => 'index',                            
   	// 			)
				// ));  
				return;
			}
			$this->redirect(Route::get('home')->uri(
				array(
					'controller' => 'management',
					'action'     => 'submit',                            
					)
				)); 
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
            		'action'     => 'index',                            
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
				$user = ORM::factory('User')->create_user($this->request->post(), array(
					'username',
					'password',
					'email'				
				));
				
				// Grant user login role
				$user->add('roles', ORM::factory('Role', array('name' => 'login')));
				
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

	public function action_logout() {
		// Logout current user
		Auth::instance()->logout();

		// Redirect them somewhere else
		$this->redirect(Route::get('home')->uri(
			array(
    			'controller' => 'management',
    			'action'     => 'login',                            
				)
		));    
	}

	function data_uri($file, $mime) 
	{  
		return ('data:' . $mime . ';base64,' . base64_encode($file));
	}

	public function action_viewpic() {
	$view= View::factory('controllers/web/management/picture');

		$candidate = ORM::factory('Candidates')->where('last_name','=','D')->find(0);
		$image = $candidate->image;

		$this->view = $view;
		$this->view->image =base64_encode($image);
		

	}

}

