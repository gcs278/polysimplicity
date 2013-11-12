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
					<input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
				</div>
			</div>
			<div class="form-group">
				<label for="middle_name" class="col-sm-2 control-label">Middle Name</label>
				<div class="col-sm-10">
					<input type="text" name="middle_name" class="form-control" id="middle_name" placeholder="Middle Name">
				</div>
			</div>
			<div class="form-group">
				<label for="last_name" class="col-sm-2 control-label">Last Name</label>
				<div class="col-sm-10">
					<input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
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
						<input type="radio" name="gender" id="male" value="male">
						Male
					</label>
				</div>
				<div class="radio col-sm-10 col-sm-offset-2">
					<label>
						<input type="radio" name="gender" id="female" value="female">
						Female
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="birth_date" class="col-sm-2 control-label">Date of Birth</label>
				<div class="col-sm-10">
					<!--Changed Input to type "date" cause database format-->
					<input type="date" name="birth_date" class="form-control" id="birth_date" placeholder="Date of Birth">
				</div>
			</div>
			<div class="form-group">
				<label for="birth_state" class="col-sm-2 control-label">State of Birth</label>
				<div class="col-sm-10">
					<select class="form-control" name="birth_state" id="birth_state">
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
					<textarea type="text" rows="5" name="detail" class="form-control" id="detailed_views"></textarea>
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
			var copied = $('#more_positions').append("<div class='well'><button type='button' class='close' aria-hidden'true'>&times;</button><div class='form-group'><label for='title" + count_positions + "' class='col-sm-2 control-label'>Title</label><div class='col-sm-10'><input type='text' name='title" + count_positions + "' class='form-control' placeholder='Title'></div></div><div class='form-group'><label for='status" + count_positions + "' class='col-sm-2 control-label'>Status</label><div class='col-sm-10'><select class='form-control' name='status" + count_positions + "'><option value''>Select a Status...</option><option value'Current'>Current</option><option value'Previous'>Previous</option><option value'Running_For'>Running</option></select></div></div><div class='form-group'><label for='term_start" + count_positions + "' class='col-sm-2 control-label'>Term Start</label><div class='col-sm-10'><input type='date' name='term_start" + count_positions + "' id='term_start" + count_positions + "' class='form-control' placeholder='Date of Term Start'></div></div><div class='form-group'><label for='term_end" + count_positions + "' class='col-sm-2 control-label'>Term End</label><div class='col-sm-10'><input type='date' name='term_end" + count_positions + "' id='term_end" + count_positions + "' class='form-control' placeholder='Date of Term End'></div></div><button type='button' class='btn btn-default add_position'>Add Another</button></div>");
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
			$('#term_start' + count_positions).datepicker({ changeYear: true, changeMonth: true });
			$('#term_end' + count_positions).datepicker({ changeYear: true, changeMonth: true });
			
			return false;
		};
		
		var delete_position = function() {
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
		
		$('#birth_date').datepicker({ changeYear: true, changeMonth: true, defaultDate: "-15y" });
		$('#term_start').datepicker({ changeYear: true, changeMonth: true });
		$('#term_end').datepicker({ changeYear: true, changeMonth: true });
	</script>
	<?php
	// Script for error pop-up
		if(isset($script)) 
			echo $script ?>