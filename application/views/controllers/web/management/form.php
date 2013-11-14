<div class="container-fluid ">
	<div class ="row-fluid">
		<div class="span2 offset1">
			<h3>Candidate Management</h3>

			<ul class="nav nav-pills nav-stacked">
  				<li><?php echo Html::anchor('management/index', 'View Candidates') ?></li>
  				<li class="active"><?php echo Html::anchor('management/form', 'Create a new Candidate') ?></li>
  				<li><?php echo Html::anchor('management/form', 'Modify Candidate') ?></li>
  				<li><?php echo Html::anchor('management/form', 'Preview Candidate') ?></li>
  				<li><?php echo Html::anchor('management/logout', 'Log Out') ?></li>
			</ul>

		</div>
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
				<div class="col-sm-10">
					<input type="file" name="candidate_pic" id="candidate_pic" multiple accept="image/*">
					<p class="help-block">Save an image that will fit the size nicely, 
						make sure there is authorization to use it.</p>
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
					<input name="birth_date" value="<?php if(isset($birth_date)){ echo $birth_date;}?>"class="form-control" id="birth_date" placeholder="Date of Birth">
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
						<input name="term_start1" class="form-control" id="term_start" placeholder="Date of Term Start">
					</div>
				</div>
				<div class="form-group">
					<label for="term_end" class="col-sm-2 control-label">Term End</label>
					<div class="col-sm-10">
						<input name="term_end1" class="form-control" id="term_end" placeholder="Date of Term End">
					</div>
				</div>
				<button type="button" class="btn btn-default add_position">Add Another</button>
			</div>
			<div id="more_positions"></div>
			<h3>Views:</h3>
			<!--TAXATION-->
			<div class="form-group">
				<label for="taxation_radio" class="col-sm-2 control-label">Taxation</label>
				<div id="taxation_radio" class="radio col-sm-10">
					<label>
						<input type="radio" name="taxation" value="increase">
						Increase
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="taxation" value="neutral">
						Neutral
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="taxation" value="decrease">
						Decrease
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="detail" class="col-sm-2 control-label">Detailed Views</label>
				<div class="col-sm-10">
					<textarea type="text" rows="5" name="taxation_detail" class="form-control" id="detailed_views"></textarea>
				</div>
			</div>
			<!--ABORTION-->
			<div class="form-group">
				<label for="abortion_radio" class="col-sm-2 control-label">Abortion</label>
				<div id="abortion_radio" class="radio col-sm-10">
					<label>
						<input type="radio" name="abortion" value="Pro-Life">
						Pro-Life
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="abortion" value="Pro-Choice">
						Pro-Choice
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="detail" class="col-sm-2 control-label">Detailed Views</label>
				<div class="col-sm-10">
					<textarea type="text" rows="5" name="abortion_detail" class="form-control" id="detailed_views"></textarea>
				</div>
			</div>
			<!--Military-->
			<div class="form-group">
				<label for="taxation_radio" class="col-sm-2 control-label">Military</label>
				<div id="military_radio" class="radio col-sm-10">
					<label>
						<input type="radio" name="military" value="increase">
						Expand
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="military" value="neutral">
						Neutral
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="military" value="decrease">
						Reduce
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="detail" class="col-sm-2 control-label">Detailed Views</label>
				<div class="col-sm-10">
					<textarea type="text" rows="5" name="military_detail" class="form-control" id="detailed_views"></textarea>
				</div>
			</div>
			<!--GUNS-->
			<div class="form-group">
				<label for="taxation_radio" class="col-sm-2 control-label">Guns</label>
				<div id="guns_radio" class="radio col-sm-10">
					<label>
						<input type="radio" name="guns" value="increase">
						Deregulate
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="guns" value="neutral">
						Neutral
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="guns" value="decrease">
						Regulate
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="detail" class="col-sm-2 control-label">Detailed Views</label>
				<div class="col-sm-10">
					<textarea type="text" rows="5" name="guns_detail" class="form-control" id="detailed_views"></textarea>
				</div>
			</div>
			<!--Marijuanua-->
			<div class="form-group">
				<label for="marijuana_radio" class="col-sm-2 control-label">Marijuana</label>
				<div id="marijuana_radio" class="radio col-sm-10">
					<label>
						<input type="radio" name="marijuana" value="increase">
						Legalize
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="marijuana" value="neutral">
						Criminalize
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="detail" class="col-sm-2 control-label">Detailed Views</label>
				<div class="col-sm-10">
					<textarea type="text" rows="5" name="marijuana_detail" class="form-control" id="detailed_views"></textarea>
				</div>
			</div>
			<!--Same-Sex Marriage-->
			<div class="form-group">
				<label for="taxation_radio" class="col-sm-2 control-label">Same-Sex Marriage</label>
				<div id="marriage_radio" class="radio col-sm-10">
					<label>
						<input type="radio" name="marriage" value="increase">
						For
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="marriage" value="neutral">
						Neutral
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="marriage" value="decrease">
						Against
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="detail" class="col-sm-2 control-label">Detailed Views</label>
				<div class="col-sm-10">
					<textarea type="text" rows="5" name="marriage_detail" class="form-control" id="detailed_views"></textarea>
				</div>
			</div>
			<!--Immigrant Rights-->
			<div class="form-group">
				<label for="taxation_radio" class="col-sm-2 control-label">Immigrant Rights</label>
				<div id="immigrant_radio" class="radio col-sm-10">
					<label>
						<input type="radio" name="immigrant" value="increase">
						Expand
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="immigrant" value="neutral">
						Neutral
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="immigrant" value="decrease">
						Restrict
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="detail" class="col-sm-2 control-label">Detailed Views</label>
				<div class="col-sm-10">
					<textarea type="text" rows="5" name="immigrant_detail" class="form-control" id="detailed_views"></textarea>
				</div>
			</div>
			<!--Education-->
			<div class="form-group">
				<label for="education_radio" class="col-sm-2 control-label">Education</label>
				<div id="education_radio" class="radio col-sm-10">
					<label>
						<input type="radio" name="education" value="increase">
						Expand
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="education" value="neutral">
						Neutral
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="education" value="decrease">
						Reduce
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="detail" class="col-sm-2 control-label">Detailed Views</label>
				<div class="col-sm-10">
					<textarea type="text" rows="5" name="education_detail" class="form-control" id="detailed_views"></textarea>
				</div>
			</div>
			<!--Health Care-->
			<div class="form-group">
				<label for="taxation_radio" class="col-sm-2 control-label">Health Care</label>
				<div id="health_radio" class="radio col-sm-10">
					<label>
						<input type="radio" name="health" value="increase">
						Privatize
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="health" value="neutral">
						Neutral
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="health" value="decrease">
						Regulate
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="detail" class="col-sm-2 control-label">Detailed Views</label>
				<div class="col-sm-10">
					<textarea type="text" rows="5" name="health_detail" class="form-control" id="detailed_views"></textarea>
				</div>
			</div>
			<!--Enivormental-->
			<div class="form-group">
				<label for="taxation_radio" class="col-sm-2 control-label">Environmental</label>
				<div id="environmental_radio" class="radio col-sm-10">
					<label>
						<input type="radio" name="environmental" value="increase">
						Regulate
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="environmental" value="neutral">
						Neutral
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="environmental" value="decrease">
						Deregulate
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="detail" class="col-sm-2 control-label">Detailed Views</label>
				<div class="col-sm-10">
					<textarea type="text" rows="5" name="environmental_detail" class="form-control" id="detailed_views"></textarea>
				</div>
			</div>
			<!--Social Security-->
			<div class="form-group">
				<label for="taxation_radio" class="col-sm-2 control-label">Social Security</label>
				<div id="ss_radio" class="radio col-sm-10">
					<label>
						<input type="radio" name="ss" value="increase">
						Increase
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="ss" value="neutral">
						Neutral
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="ss" value="decrease">
						Decrease
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="detail" class="col-sm-2 control-label">Detailed Views</label>
				<div class="col-sm-10">
					<textarea type="text" rows="5" name="ss_detail" class="form-control" id="detailed_views"></textarea>
				</div>
			</div>
			<!--Death Penalty-->
			<div class="form-group">
				<label for="death_penalty_radio" class="col-sm-2 control-label">Death Penalty</label>
				<div id="death_penalty_radio" class="radio col-sm-10">
					<label>
						<input type="radio" name="death_penalty" value="increase">
						Increase
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="death_penalty" value="neutral">
						Neutral
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="death_penalty" value="decrease">
						Decrease
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="detail" class="col-sm-2 control-label">Detailed Views</label>
				<div class="col-sm-10">
					<textarea type="text" rows="5" name="death_penalty_detail" class="form-control" id="detailed_views"></textarea>
				</div>
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
		
		var add_position = function() {
			++count_positions;
			var copied = $('#more_positions').append("<div class='well'><button type='button' class='close' aria-hidden'true'>&times;</button><div class='form-group'><label for='title" + count_positions + "' class='col-sm-2 control-label'>Title</label><div class='col-sm-10'><input type='text' name='title" + count_positions + "' class='form-control' placeholder='Title'></div></div><div class='form-group'><label for='status" + count_positions + "' class='col-sm-2 control-label'>Status</label><div class='col-sm-10'><select class='form-control' name='status" + count_positions + "'><option value''>Select a Status...</option><option value'Current'>Current</option><option value'Previous'>Previous</option><option value'Running_For'>Running</option></select></div></div><div class='form-group'><label for='term_start" + count_positions + "' class='col-sm-2 control-label'>Term Start</label><div class='col-sm-10'><input name='term_start" + count_positions + "' id='term_start" + count_positions + "' class='form-control' placeholder='Date of Term Start'></div></div><div class='form-group'><label for='term_end" + count_positions + "' class='col-sm-2 control-label'>Term End</label><div class='col-sm-10'><input name='term_end" + count_positions + "' id='term_end" + count_positions + "' class='form-control' placeholder='Date of Term End'></div></div><button type='button' class='btn btn-default add_position'>Add Another</button></div>");
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
		
		$('#birth_date').datepicker({ changeYear: true, changeMonth: true, dateFormat: "mm-dd-yy", defaultDate: "-15y" });
		$('#term_start').datepicker({ changeYear: true, changeMonth: true, dateFormat: "mm-dd-yy" });
		$('#term_end').datepicker({ changeYear: true, changeMonth: true, dateFormat: "mm-dd-yy" });
	</script>
	<?php
	// Script for error pop-up
		if(isset($script)) 
			echo $script ?>