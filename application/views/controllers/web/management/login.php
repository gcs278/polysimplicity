<? if ($message) : ?>
	<h3 class="message">
		<?= $message; ?>
	</h3>
<? endif; ?>

<div class="span8">
	<form class="form-horizontal" role="form" method="post">
		<h2 class="offset2">Developer Login:</h2>
		<div class="form-group">
			<label for="username" class="col-sm-4 control-label">Username</label>
			<div class="col-sm-3">
				<input type="text" name="username" class="form-control" id="username" placeholder="Username">
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-4 control-label">Password</label>
			<div class="col-sm-3">
				<input type="password" name="password" class="form-control" id="password" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<label for="remember" class="col-sm-4 control-label">Remember Me</label>
			<div class="col-sm-3">
				<input type="checkbox" name="remember" id="remember">
			</div>
		</div>
			<div style="text-align:center; margin-right: 285px;">
				<button type="submit" id="submit" class="btn btn-lg">Login</button>
			</div>
		</div>
	</form>

</div>