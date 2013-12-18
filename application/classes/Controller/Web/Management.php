<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Management extends Controller_Admin_Containers_Default {
	
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
                        $table .= HTML::anchor('management/modify/'.$candidate->id, $candidate->first_name . " " . $candidate->last_name);
                        $table .= "</td><td>";
                        $table .= $candidate->Personal->party;
                        $table .= "</td><td>";
                        $table .= $candidate->Personal->birth_date;
                        $table .= "</td><td>";
                        $table .= $candidate->Personal->birth_state;
                        $table .= "</td><td>";
                        $edits = ORM::factory('Edits')->where('candidates_id','=',$candidate->id)->order_by('timestamp','desc')->find(0);
                        $table .= $edits->timestamp;
                        $table .= "</td><td>";
                        $user = ORM::factory('Users')->where('id','=',$edits->users_id)->find(0);
                        $table .= $user->username;
                        $table .= "</td><td>";
                        $table .= HTML::anchor('candidate/'.$candidate->id, "", array("class"=>"glyphicon glyphicon-eye-open")) . "&nbsp&nbsp&nbsp";
                        $table .= HTML::anchor('management/modify/'.$candidate->id, "", array("class"=>"glyphicon glyphicon-wrench")). "&nbsp&nbsp&nbsp";
                        $table .= HTML::anchor('management/delete/'.$candidate->id, "", array("class"=>"glyphicon glyphicon-remove"));
                        $table .= "</td></tr>";
                }
                
                // Display Menu Page
                $view=view::factory('controllers/web/management/index');        
                $this->view = $view;
                $this->view->user = $username; // User ID
                $this->view->table = $table;
                $this->template->sideSelect = "index";
        }

        // Form for inserting a candidate
        public function action_form() {
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
                        
                        $candidate = ORM::factory('Candidates');

                        // Get values matching form, names
                        $candidate->values($_POST);

                        // Get the picture if there is one
                        $picture = $_FILES["candidate_pic"]["tmp_name"];
                        if($picture != '' ){
                                // Serialize bytes into variable
                                $image = file_get_contents($picture);
                                $image_size = getimagesize($picture);

                                // Make sure it is an actual picture
                                if($image_size)
                                        $candidate->image = $image;
                        }


                        $personal = ORM::factory('Personal');
                        // Get the form data
                        $personal->values($_POST);

                        $views = ORM::factory('Views');
                        $view_type = ORM::factory('viewsType')->find_all();

                        foreach($_POST as $value) {
                        	foreach($view_type as $type) {
                        		if ( $type->name == $value) {
                        			echo Here;
                        		}
                        	}
                        }

                        // Validate input for personal and candidate
                        try {
                                $candidate->check();
                                $personal->check();

                                // Save databases
                                $candidate->save();

                                // Get the candidate id for relation and save
                                $personal->candidates_id = $candidate->id;
                                $personal->save();

                                // Update the edits table
                                $edits = ORM::factory('Edits');
                                $edits->candidates_id = $candidate->id; // Candidate's id
                                $edits->users_id = AUTH::instance()->get_user(); // User's id
 
                                $edits->save();
                        } catch(ORM_Validation_Exception $e) {
                                $view=view::factory('controllers/web/management/form');
                                $this->view = $view;
                                $errorMessage = "<script> alert('Server Side Validation Error:";
                                $errorMessage .= $e->getMessage();
                                $errorMessage .= "'); </script>";
                                $this->view->script = $errorMessage;
                                return;
                        }



                        // Determine how many positions there are
                        $i = 1;
                        $title = "title1";
                        while(isset($_POST[$title])) {
                                $title = "title" . strval($i);
                                $i++;
                        }

                        // Get the value from each one and store it in database
                        for ($x=1; $x<$i; $x++) {
                                // Post names
                                $status = "status" . strval($x);
                                $term_start = "term_start" . strval($x);
                                $term_end = "term_end" . strval($x);
                                $title = "title" . strval($x);

                                // Verify everything is set for each position
                                if (isset($_POST[$status]) && isset($_POST[$term_start]) && isset($_POST[$term_end])) {
                                        $positions = ORM::factory('Positions');
                                        $positions->title = $_POST[$title];
                                        $positions->status = $_POST[$status];
                                        $positions->term_start = $_POST[$term_start];
                                        $positions->term_end = $_POST[$term_end];
                                        $positions->candidates_id = $candidate->id;
                                        $positions->save(); // New table
                                }
	                	}

	                	// Insert views into database
	                	$view_types = ORM::factory('viewsType')->find_all();

	                	foreach ($view_types as $view_type ) {
	                		$views = ORM::factory('Views');
	                		if ( isset($_POST[$view_type->name]) ) {
	                			$views->simple = $_POST[$view_type->name];
	                			$views->candidates_id = $candidate->id;
	                			$views->viewsType_id = $view_type->id;

	                			if ( isset($_POST[$view_type->name . "_detail"] ) ) 
	                				$views->detail = $_POST[$view_type->name . "_detail"];

	                			$views->save();
	                		}

	                	}

	                	// If we made it here, SUCCESS!
		                $this->template->title = 'Home';
		                $view=view::factory('controllers/web/management/form');
		                $this->view = $view;
		                $this->view->views_tabbed_display = $this->create_tabbed_views();
		                $errorMessage = "<script> alert('Success! Candidate is now in the database'); </script>";
		                $this->view->script = $errorMessage;
		            } else {
                	// Else just display the form page
	            	$this->template->title = 'Home';
	            	$view=view::factory('controllers/web/management/form');
	            	$this->view = $view;
	            	$this->template->sideSelect = "form";

	            	$this->view->views_tabbed_display = $this->create_tabbed_views();
		            }
        }

        private function create_tabbed_views() {
        	$views = array(1 => array('Increase','Neutral','Decrease'),
	            		2 => array('Pro-Life','Pro-Choice'),
	            		3 => array('Expand','Neutral','Reduce'),
	            		4 => array('Deregulate','Neutral','Regulate'),
	            		5 => array('Legalize','Criminalize'),
	            		6 => array('For','Neutral','Against'),
	            		7 => array('Expand','Neutral','Restrict'),
	            		8 => array('Expand','Neutral','Reduce'),
	            		10 => array('Privatize','Neutral','Regulate'),
	            		9 => array('Regulate','Neutral','Deregulate'),
	            		11 => array('Increase','Neutral','Decrease'),
	            		12 => array('Increase','Neutral','Decrease'),);

	            	$view_types = ORM::factory('viewsType')->find_all();

	            	$display = "<ul class='nav nav-tabs' id='myTab'>";
	            	foreach ($view_types as $view){
	            		if ( $view->id == 1 ) {
	            			$display .= "<li class='active'><a href='#" . $view->name . "' data-toggle='tab' >" . $view->name . "</a></li>";
	            		} else {
	            			$display .= "<li><a href='#" . $view->name . "' data-toggle='tab'>" . $view->name . "</a></li>";
	            		}
	            	}
	            	$display .= "</ul>
	            	<div class='tab-content well'>";

	            		foreach ($view_types as $view) {
	            			if ( $view->id == 1 ) {
	            				$display .=  "<div class='tab-pane active' ";
	            			} else {
	            				$display .=  "<div class='tab-pane' ";
	            			}

	            			$display .=  "id='" . $view->name . "'>
	            			<h4>".$view->name." View:</h4>
	            			<div class='form-group offset1'>";

	            				foreach( $views[$view->id] as $choice) {
	            					$display .=  "<div class='radio col-sm-10 lead'>
	            					<label>
	            						<input type='radio' name='".$view->name."' value='".$choice."'>
	            						".$choice."
	            					</label>
	            				</div>";
	            			}

	            			$display .=  "</div>
	            			<h4>".$view->name." View Details:</h4>
	            			<div class='form-group offset1'>
	            				<div class='col-sm-10'>
	            					<textarea type='text' rows='5' name='".$view->name."_detail' class='form-control' id='detailed_views'></textarea>
	            				</div>
	            			</div>
	            		</div>";
	            	}
	            	$display .= "</div>";
	            	return $display;
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

        public function action_viewpic() {
                $id = $this->request->param('id');

                $view= View::factory('controllers/web/management/picture');

                $candidate = ORM::factory('Candidates')->where('id','=',$id)->find(0);
                $image = $candidate->image;

                $this->view = $view;
                $this->view->image =base64_encode($image);
        }

        public function action_modify() {
            $user = Auth::instance()->get_user();
            // Check if user is logged in
            if (!$user) {
                    $this->redirect(Route::get('home')->uri(
                array(
                    'controller' => 'management',
                    'action'     => 'login',                            
                       )
                ));   
                return;
            }

            $id = $this->request->param('id');

             // Check if it a POST
            if ($this->request->method() == HTTP_Request::POST) {
                $candidate = ORM::factory('Candidates')->with('Personal')->where('candidates.id','=',$id)->find(0);

                // Get values matching form, names
                $candidate->values($_POST);

                // Get the picture if there is one
                $picture = $_FILES["candidate_pic"]["tmp_name"];
                if($picture != '' ){
                        // Serialize bytes into variable
                        $image = file_get_contents($picture);
                        $image_size = getimagesize($picture);

                        // Make sure it is an actual picture
                        if($image_size)
                                $candidate->image = $image;
                }

                // Get the form data
                $candidate->Personal->values($_POST);

                // Validate input for personal and candidate
                try {
                        // Save databases
                        $candidate->update();
                        $candidate->Personal->update();

                        // Update the edits table
                        $edits = ORM::factory('Edits');
                        $edits->candidates_id = $candidate->id; // Candidate's id
                        $edits->users_id = AUTH::instance()->get_user(); // User's id

                        $edits->save();
                } catch(ORM_Validation_Exception $e) {
                        $view=view::factory('controllers/web/management/modify');
                        $this->view = $view;
                        $errorMessage = "<script> alert('Server Side Validation Error:";
                        $errorMessage .= $e->getMessage();
                        $errorMessage .= "'); </script>";
                        $this->view->script = $errorMessage;
                        return;
                }            
                $this->redirect(Route::get('candidates')->uri(
                array(
                    'id' => $id,                      
                       )
                ));   
                return;
            }else {
                $this->template->title = 'Home';
                $view=view::factory('controllers/web/management/form');
                $this->view = $view;
                $this->template->sideSelect = "modify";

                $candidates = ORM::factory('Candidates')->with('Personal')->where('candidates.id','=',$id)->find(0);
                $this->view->first_name = $candidates->first_name;
                $this->view->middle_name = $candidates->middle_name;
                $this->view->last_name = $candidates->last_name;
                $this->view->gender = $candidates->Personal->gender;
                $this->view->birth_date = $candidates->Personal->birth_date;
                $this->view->birth_state = $candidates->Personal->birth_state;
                $this->view->party = $candidates->Personal->party;
                $this->view->image = base64_encode($candidates->image);

                $positions = ORM::factory('Positions')->where('candidates_id','=',$id)->find_all();
                foreach($positions as $position) {
                	$this->view->script = "<script>type=\"text/javascript\">add_position('" . 
                		$position->title . "','" . $position->status . "','" . 
                		$position->term_start . "','" . $position->term_end . "');</script>";
                }

	            $views = ORM::factory('Views')->where('candidates_id','=',$id)->find_all();
	            
	            $view_in_database = array();
	            foreach($views as $view) {
	            	$view_type = ORM::factory('viewsType')->where('id','=',$view->viewsType_id);
	            	// array_push($view_in_database, $view->id => )
	            }

	            $this->view->views_tabbed_display = $this->create_tabbed_views();
                
            }


        }

        // Deletes all trace of a candidate
		public function action_delete() {
			$user = Auth::instance()->get_user();
            // Check if user is logged in
            if (!$user) {
                    $this->redirect(Route::get('home')->uri(
                array(
                    'controller' => 'management',
                    'action'     => 'login',                            
                       )
                ));   
                return;
            }
            $id = $this->request->param('id');
            if ($this->request->method() == HTTP_Request::POST) {
	            $candidates = ORM::factory('Candidates')->with('Personal')->where('candidates.id','=',$id)->find(0);
	            if ( $candidates->loaded()) {

	            	// Delete every position
	            	$positions = ORM::factory('Positions')->where('candidates_id','=',$id)->find_all();
	            	foreach($positions as $position) {
	            		$position->delete();
	            	}

	            	// Delete every edit record
	            	$edits = ORM::factory('Edits')->where('candidates_id','=',$id)->find_all();
	            	foreach($edits as $edit) {
	            		$edit->delete();
	            	}

	            	// Delete every view
	            	$views = ORM::factory('Views')->where('candidates_id','=',$id)->find_all();
	            	foreach($views as $view) {
	            		$view->delete();
	            	}

	            	// Delete personal information
	            	if ( $candidates->Personal->loaded() )
		           		$candidates->Personal->delete();

		           	// Delete the candidate
	            	$candidates->delete();

	            } else {

	        	}
	        } else {
	        	$view=view::factory('controllers/web/management/delete');
                $this->view = $view;
                $this->view->candidate = ORM::factory('Candidates')->where('candidates.id','=',$id)->find(0)->first_name;
	        }
		}
        private function generate_views() {

        }
}