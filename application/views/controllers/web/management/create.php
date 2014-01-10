<? if ($message) : ?>
	<h3 class="message">
		<?= $message; ?>
	</h3>
<? endif; ?>



<div class="span8">
	<form class="form-horizontal" role="form" method="post">
		<h2 class="offset2">Create New User:</h2>
		<div class="form-group">
			<label for="first_name" class="col-sm-4 control-label">First Name</label>
			<div class="col-sm-3">
				<input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
			</div>
		</div>
		<div class="error">
			<?= Arr::get($errors, 'first_name'); ?>
		</div>
		<div class="form-group">
			<label for="last_name" class="col-sm-4 control-label">Last Name</label>
			<div class="col-sm-3">
				<input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
			</div>
		</div>
		<div class="error">
			<?= Arr::get($errors, 'last_name'); ?>
		</div>
		<div class="form-group">
			<label for="cell_phone" class="col-sm-4 control-label">Cell Phone</label>
			<div class="col-sm-3">
				<input type="text" name="cell_phone" class="form-control" id="cell_phone" placeholder="Cell Phone">
			</div>
		</div>
		<div class="form-group">
			<label for="type" class="col-sm-4 control-label">Role</label>
			<div class="col-sm-3">
				<select class="form-control" name="type" id="type">
					<option value"">Select a Role...</option>
					<option value"Previous">Researcher</option>
					<option value"Running_For">Developer</option>
				</select>
			</div>
		</div>
		<div class="error">
			<?= Arr::get($errors, 'type'); ?>
		</div>
		<div class="form-group">
			<label for="username" class="col-sm-4 control-label">Username</label>
			<div class="col-sm-3">
				<input type="text" name="username" class="form-control" id="username" placeholder="Username">
			</div>
		</div>
		<div class="error">
			<?= Arr::get($errors, 'username'); ?>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-4 control-label">Email Address</label>
			<div class="col-sm-3">
				<input type="text" name="email" class="form-control" id="email" placeholder="Email Address">
			</div>
		</div>
		<div class="error">
			<?= Arr::get($errors, 'email'); ?>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-4 control-label">Password</label>
			<div class="col-sm-3">
				<input type="password" name="password" class="form-control" id="password" placeholder="Password">
			</div>
		</div>
		<div class="error">
			<?= Arr::path($errors, '_external.password'); ?>
		</div>
		<div class="form-group">
			<label for="password_confirm" class="col-sm-4 control-label">Confirm Password</label>
			<div class="col-sm-3">
				<input type="password" name="password_confirm" class="form-control" id="password_confirm" placeholder="Confirm Password">
			</div>
		</div>
		<div class="error">
			<?= Arr::path($errors, '_external.password_confirm'); ?>
		</div>
			<div style="text-align:center; margin-right: 232px;">
				<button type="submit" id="create" class="btn btn-lg">Create User</button>
			</div>
		</div>
	</form>
</div>