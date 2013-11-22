
		<div class="span8">
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			<h1>Candidate Info</h1>
			<h3>Basic Info:</h3>
			<div class="form-group">
				<label for="first_name" class="col-sm-2 control-label">First Name</label>
				<div class="col-sm-10">
					<input type="text" name="first_name" value="<?php if(isset($first_name)){ echo $first_name;}?>" class="form-control" id="first_name" placeholder="First Name">
				</div>
			</div>
			<div class="form-group">
				<label for="middle_name" class="col-sm-2 control-label">Middle Name</label>
				<div class="col-sm-10">
					<input type="text" name="middle_name" value="<?php if(isset($middle_name)){ echo $middle_name;}?>" class="form-control" id="middle_name" placeholder="Middle Name">
				</div>
			</div>
			<div class="form-group">
				<label for="last_name" class="col-sm-2 control-label">Last Name</label>
				<div class="col-sm-10">
					<input type="text" name="last_name" value="<?php if(isset($last_name)){ echo $last_name;}?>" class="form-control" id="last_name" placeholder="Last Name">
				</div>
			</div>
			<div class="form-group">

				<label for="candidate_pic" class="col-sm-2 control-label">Picture of Cadidate</label>
				<div class="col-sm-5">
					<input type="file" name="candidate_pic" id="candidate_pic" multiple accept="image/*">
					<p class="help-block">Save an image that will fit the size nicely,<br> 
						make sure there is authorization to use it.</p>
				</div>
				<div class="col-sm-5">
					<?php if(isset($image)) {
						echo "<img src='data:image/jpg;base64," . $image . "' class='img-rounded' width='150' height='150'\>";
					}
					?>
				</div>

			</div>
			<div class="form-group">
				<label for="gender_radio" class="col-sm-2 control-label">Gender</label>
				<div id="gender_radio" class="radio col-sm-10">
					<label>
						<input type="radio" name="gender" id="male" value="male" <?php if(isset($gender)){ if($gender == 'male') { echo "checked";} }?> >
						Male
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="gender" id="female" value="female" <?php if(isset($gender)){ if($gender == 'female') { echo "checked";} }?>  >
						Female
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="birth_date" class="col-sm-2 control-label">Date of Birth</label>
				<div class="col-sm-10">
					<!--Changed Input to type "date" cause database format-->
					<input type="date" name="birth_date" value="<?php if(isset($birth_date)){ echo $birth_date;}?>"class="form-control" id="birth_date" placeholder="Date of Birth">
				</div>
			</div>
			<div class="form-group">
				<label for="birth_state"  class="col-sm-2 control-label">State of Birth</label>
				<div class="col-sm-10">
					<select class="form-control" name="birth_state" id="birth_state">
						<option value="<?php if(isset($birth_state)){ echo $birth_state; }?>"><?php if(isset($birth_state)){ echo $birth_state; }?></option>
						<option value="">Select a State...</option>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="party" class="col-sm-2 control-label">Political Party</label>
				<div class="col-sm-10">
					<select class="form-control" name="party" id="party">
					  <option value="<?php if(isset($party)){ echo $party;}?>"><?php if(isset($party)){ echo $party;}?></option>
					  <option value="">Select a Party...</option>
					  <option value="Rep">Republican</option>
					  <option value="Dem">Democrat</option>
					  <option value="Ind">Independent</option>
					  <option value="Lib">Libertarian</option>
					</select>
				</div>
			</div>
			<h3>Positions:</h3>
			<div class="well" id="original">
				<div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
						<input type="text" name="title1" class="form-control" id="title" placeholder="Title">
					</div>
				</div>
				<div class="form-group">
					<label for="status" class="col-sm-2 control-label">Status</label>
					<div class="col-sm-10">
						<select class="form-control" name="status1" id="status">
							<option value"">Select a Status...</option>
							<option value"Current">Current</option>
							<option value"Previous">Previous</option>
							<option value"Running_For">Running</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="term_start" class="col-sm-2 control-label">Term Start</label>
					<div class="col-sm-10">
						<input type="date" name="term_start1" class="form-control" id="term_start" placeholder="Date of Term Start">
					</div>
				</div>
				<div class="form-group">
					<label for="term_end" class="col-sm-2 control-label">Term End</label>
					<div class="col-sm-10">
						<input type="date" name="term_end1" class="form-control" id="term_end" placeholder="Date of Term End">
					</div>
				</div>
				<button type="button" class="btn btn-default add_position">Add Another</button>
			</div>
			<div id="more_positions"></div>

			<h3>Views:</h3>
			<?php $views = array('Taxation' => array('Increase','Neutral','Decrease'),
				'Abortion' => array('Pro-Life','Pro-Choice'),
				'Military' => array('Expand','Neutral','Reduce'),
				'Guns' => array('Deregulate','Neutral','Regulate'),
				'Marijuana' => array('Legalize','Criminalize'),
				'Marriage' => array('For','Neutral','Against'),
				'Immigrants' => array('Expand','Neutral','Restrict'),
				'Education' => array('Expand','Neutral','Reduce'),
				'Health' => array('Privatize','Neutral','Regulate'),
				'Enivormental' => array('Regulate','Neutral','Deregulate'),
				'Social_Security' => array('Increase','Neutral','Decrease'),
				'Death_Penalty' => array('Increase','Neutral','Decrease'),);
				?>
			<ul class="nav nav-tabs" id="myTab">
				<?php 
					foreach ($views as $view => $choices){
						if ( $view == "Taxation" ) {
							echo "<li class='active'><a href='#" . $view . "' data-toggle='tab' >" . $view . "</a></li>";
						} else {
							echo "<li><a href='#" . $view . "' data-toggle='tab'>" . $view . "</a></li>";
						}
					}
				?>
			</ul>

			<div class="tab-content well">
				<?php 
					foreach ($views as $view => $choices) {
						if ( $view == "Taxation" ) {
							echo "<div class='tab-pane active' ";
						} else {
							echo "<div class='tab-pane' ";
						}

						echo "id='" . $view . "'>
							<h4>".$view." View:</h4>
							<div class='form-group offset1'>";

						foreach( $choices as $choice) {
							echo "<div class='radio col-sm-10 lead'>
							<label>
								<input type='radio' name='".$view."' value='".$choice."'>
								".$choice."
							</label>
						</div>";
						}

						echo "</div>
								<h4>".$view." View Details:</h4>
								<div class='form-group offset1'>
									<div class='col-sm-10'>
										<textarea type='text' rows='5' name='".$view."_detail' class='form-control' id='detailed_views'></textarea>
									</div>
								</div>
						</div>";
					}
				?>
			</div>
			<button type="submit" id="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	
	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
	<script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script>
		$('input[type="text"]').focusout(function() {
			if ($(this).val() == "") {
				$(this).parent().removeClass('has-success');
				$(this).parent().addClass('has-error');
			} else {
				$(this).parent().removeClass('has-error');
				$(this).parent().addClass('has-success');
			}
		});
		
		var count_positions = 1;
		
		var add_position = function(title, status, term_start, term_end) {
			++count_positions;
			var copied = $('#more_positions').append("<div class='well'><button type='button' class='close' aria-hidden'true'>&times;</button><div class='form-group'><label for='title" + count_positions + "' class='col-sm-2 control-label'>Title</label><div class='col-sm-10'><input type='text' name='title" + count_positions + "' value = '" + title + "' class='form-control' placeholder='Title'></div></div><div class='form-group'><label for='status" + count_positions + "' class='col-sm-2 control-label'>Status</label><div class='col-sm-10'><select class='form-control' name='status" + count_positions + "'><option value''>Select a Status...</option><option value'Current'>Current</option><option value'Previous'>Previous</option><option value'Running_For'>Running</option></select></div></div><div class='form-group'><label for='term_start" + count_positions + "' class='col-sm-2 control-label'>Term Start</label><div class='col-sm-10'><input type='date' name='term_start" + count_positions + "' id='term_start" + count_positions + "' value='" +term_start+"' class='form-control' placeholder='Date of Term Start'></div></div><div class='form-group'><label for='term_end" + count_positions + "' class='col-sm-2 control-label'>Term End</label><div class='col-sm-10'><input type='date' name='term_end" + count_positions + "' id='term_end" + count_positions + "' value='" + term_end + "' class='form-control' placeholder='Date of Term End'></div></div><button type='button' class='btn btn-default add_position'>Add Another</button></div>");
			$('#original button').remove();
			$('.add_position:last').parent().prev().children('.add_position').remove();
			
			$('input[type="text"]').focusout(function() {
				if ($(this).val() == "") {
					$(this).parent().removeClass('has-success');
					$(this).parent().addClass('has-error');
				} else {
					$(this).parent().removeClass('has-error');
					$(this).parent().addClass('has-success');
				}
			});
			
			$('.add_position:last').click(add_position);
			$('#more_positions .well .close:last').click(delete_position);
			$('#term_start' + count_positions).datepicker({ changeYear: true, changeMonth: true, dateFormat: "mm-dd-yy" });
			$('#term_end' + count_positions).datepicker({ changeYear: true, changeMonth: true, dateFormat: "mm-dd-yy" });
			
			return false;
		};
		
		var delete_position = function() {
			$(this).parent().hide("fast");
			$(this).parent().remove();
			if ($('#more_positions').is(':empty')) {
				$('#original').append("<button type='button' class='btn btn-default add_position'>Add Another</button>");
				$('.add_position').click(add_position);
				console.log("Added button");
			} else {
				$('.well:last').append("<button type='button' class='btn btn-default add_position'>Add Another</button>");
			}
			return false;
		};
		
		$('.add_position').click(add_position);
		
		$.browserchrome = /chrom(e|ium)/.test(navigator.userAgent.toLowerCase()); 

		if(!$.browserchrome) {
			$('#birth_date').datepicker({ changeYear: true, changeMonth: true, dateFormat: "mm-dd-yy", defaultDate: "-15y" });
			$('#term_start').datepicker({ changeYear: true, changeMonth: true, dateFormat: "mm-dd-yy" });
			$('#term_end').datepicker({ changeYear: true, changeMonth: true, dateFormat: "mm-dd-yy" });
		}
	</script>
	<?php
	// Script for error pop-up
		if(isset($script)) 
			echo $script ?>