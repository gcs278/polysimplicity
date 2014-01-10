<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Management extends Controller_Admin_Containers_Default {
	
        // Index page for User
        // Will be Management menu
        public function action_index() {

                if ($this->request->is_ajax()) {
                    
                    $this->auto_render = FALSE;
                    if (isset($_GET['candidate_id'])) {
                        $candidate_id = $_GET['candidate_id'];
                        $array = array();

                        $edits = ORM::factory('Edits')->where('candidates_id', '=', $candidate_id)->order_by('timestamp','desc')->find_all();
                        foreach ($edits as $edit) {
                            $user = ORM::factory('Users')->where('id','=',$edit->users_id)->find(0);
                             array_push($array, array('date' => date('F j, Y', strtotime($edit->timestamp)),
                                'time' => date('H:i:s', strtotime($edit->timestamp)),
                                'name' => $user->first_name . ' ' . $user->last_name,
                                'id' => $user->username));
                        }
        
                        // if (empty($array)) {
                        //     array_push($array, array('time' => 'No Edits found', 'id' => -1));
                        // }

                        echo json_encode($array);
                    }
                    
                    return;
                }
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
                        $table .= "&nbsp&nbsp&nbsp<a class='glyphicon glyphicon-time edit_history' value='".$candidate->id."'></a>";
                        $table .= "</td><td>";
                        $user = ORM::factory('Users')->where('id','=',$edits->users_id)->find(0);
                        $table .= $user->username;
                        $table .= "</td><td>";
                        $table .= HTML::anchor('candidate/'.$candidate->id, "", array("class"=>"glyphicon glyphicon-eye-open")) . "&nbsp&nbsp&nbsp";
                        $table .= HTML::anchor('management/modify/'.$candidate->id, "", array("class"=>"glyphicon glyphicon-cog")). "&nbsp&nbsp&nbsp";
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
                                $this->template->sideSelect = "form";

                                $this->view->views_tabbed_display = $this->create_tabbed_views();
                                return;
                        }

                        // Add new positions
                        foreach ( $_POST['title'] as $index=>$title ) {
                            $status = $_POST['status'][$index];
                            $state = $_POST['position_state'][$index];
                            $term_start = $_POST['term_start'][$index];
                            $term_end = $_POST['term_end'][$index];

                            if ( isset($status, $state, $term_start, $term_end) ) {
                                $positions = ORM::factory('Positions');
                                $positions->title = $title;
                                $positions->status = $status;
                                $positions->state = $state;
                                $positions->term_start = $term_start;
                                $positions->term_end = $term_end;
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

        private function create_tabbed_views($values = NULL) {
        	$views = array(1 => array('Increase','Neutral','Decrease','Unknown'),
        		2 => array('Pro-Life','Pro-Choice','Unknown'),
        		3 => array('Expand','Neutral','Reduce','Unknown'),
        		4 => array('Deregulate','Neutral','Regulate','Unknown'),
        		5 => array('Legalize','Criminalize','Unknown'),
        		6 => array('For','Neutral','Against','Unknown'),
        		7 => array('Expand','Neutral','Restrict','Unknown'),
        		8 => array('Expand','Neutral','Reduce','Unknown'),
        		10 => array('Privatize','Neutral','Regulate','Unknown'),
        		9 => array('Regulate','Neutral','Deregulate','Unknown'),
        		11 => array('Increase','Neutral','Decrease','Unknown'),
        		12 => array('Increase','Neutral','Decrease','Unknown'),);

        	$view_types = ORM::factory('viewsType')->find_all();

        	$display = "<ul class='nav nav-tabs' id='myTab'>";
        	foreach ($view_types as $view){
                $clean_name = str_replace("_"," ",ucwords($view->name));
        		if ( $view->id == 1 ) {
        			$display .= "<li class='active'><a href='#" . $view->name . "' data-toggle='tab' >" . $clean_name . "</a></li>";
        		} else {
        			$display .= "<li><a href='#" . $view->name . "' data-toggle='tab'>" . $clean_name . "</a></li>";
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

        			$database_view = NULL;
        			if ( isset($values) ) {
        				foreach( $values as $view_ ) {
        					if ( $view_->viewsType_id == $view->id )
        						$database_view = $view_;
        				}
        			}
                   
        			$clean_name = str_replace("_"," ",ucwords($view->name));

        			$display .=  "id='" . $view->name . "'>
        			<h4>".$clean_name." View:</h4>
        			<div class='form-group offset1'>";

        				foreach( $views[$view->id] as $choice) {
        					$display .=  "<div class='radio col-sm-10 lead'>
        					<label>
        						<input type='radio' name='".$view->name."' value='".$choice."'";
        						if ( isset($database_view) ) {
        							if ( $database_view->simple == $choice )
        								$display .= " checked ";
        						}
        						$display .= ">".$choice."
        					</label>
        				</div>";
        			}

        			$display .=  "</div>
        			<h4>".$clean_name." View Details:</h4>
        			<div class='form-group offset1'>
        				<div class='col-sm-10'>
        					<textarea type='text' rows='5' name='".$view->name."_detail' class='form-control' id='detailed_views'>";
        						if ( isset($database_view) ) 
        							$display .= $database_view->detail;

        						$display .= "</textarea>
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
                                        'first_name',
                                        'last_name',
                                        'cell_phone',
                                        'password',
                                        'type',
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

                                        // Add new positions
                foreach ( $_POST['title'] as $index=>$title ) {
                    $status = $_POST['status'][$index];
                    $state = $_POST['position_state'][$index];
                    $term_start = $_POST['term_start'][$index];
                    $term_end = $_POST['term_end'][$index];
                    $position_id = $_POST['id'][$index];
                    $deleted = $_POST['deleted'][$index];

                    if ( $deleted == 1 ) {
                        $position = ORM::factory('Positions')->where('id','=',$position_id)->find(0);
                        $position->delete();
                        break;
                    }

                    if ( isset($status, $state, $term_start, $term_end, $id) && !empty($status) &&
                        !empty($state) && !empty($id) ) {
                        if ( $position_id == -1 ) {
                            $positions = ORM::factory('Positions');
                            $positions->title = $title;
                            $positions->status = $status;
                            $positions->state = $state;
                            $positions->term_start = $term_start;
                            $positions->term_end = $term_end;
                            $positions->candidates_id = $candidate->id;
                            $positions->save(); // New row
                        } else {
                            $positions = ORM::factory('Positions')->where('id','=',$position_id)->find(0);
                            $positions->title = $title;
                            $positions->status = $status;
                            $positions->state = $state;
                            $positions->term_start = $term_start;
                            $positions->term_end = $term_end;
                            $positions->update(); // Update row
                        }
                    }
                }

                // Insert views into database
                $view_types = ORM::factory('viewsType')->find_all();

                foreach ($view_types as $view_type ) {

                    if ( isset($_POST[$view_type->name]) ) {
                        // Get the current view
                        $view = ORM::factory('Views')->where('candidates_id','=',$candidate->id)->where('viewsType_id','=',$view_type->id)->find();

                        // Update current view
                        if( $view->loaded() ) {
                            $view->simple = $_POST[$view_type->name];
                            $view->candidates_id = $candidate->id;
                            $view->viewsType_id = $view_type->id;

                            if ( isset($_POST[$view_type->name . "_detail"] ) ) 
                                $view->detail = $_POST[$view_type->name . "_detail"];

                            $view->update();
                        }
                        // Create a new view
                        else {
                            $views = ORM::factory('Views');

                            $views->simple = $_POST[$view_type->name];
                            $views->candidates_id = $candidate->id;
                            $views->viewsType_id = $view_type->id;

                            if ( isset($_POST[$view_type->name . "_detail"] ) ) 
                                $views->detail = $_POST[$view_type->name . "_detail"];

                            $views->save();
                        }
                    }
                }


                $this->redirect(Route::get('candidates')->uri(
                array(
                    'id' => $id,                      
                       )
                )); 
                echo Debug::vars("Candidate has successfully been modified!");

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

                $this->view->script = "<script>type=\"text/javascript\">";
                $positions = ORM::factory('Positions')->where('candidates_id','=',$id)->find_all();
                foreach($positions as $position) {
                	$this->view->script .= "add_position('" . 
                		$position->id . "','" . $position->title . "','" . $position->status . "','" . 
                        $position->state . "','" . $position->term_start . "','" . $position->term_end
                        . "');";
                }
                $this->view->script .= "</script>";
	            $views = ORM::factory('Views')->where('candidates_id','=',$id)->find_all();
	            
            
	            $this->view->views_tabbed_display = $this->create_tabbed_views($views);
                
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
                    $this->redirect(Route::get('home')->uri(
                        array(
                            'controller' => 'management',
                            'action'     => 'index',                            
                            )
                        ));   
                    return;
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