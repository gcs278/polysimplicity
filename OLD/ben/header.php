<!DOCTYPE html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Political Simplicity - <?php echo $title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
	</head>
	<body>
		<?php //include_once("analyticstracking.php") 
		?>
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".topNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" id="logo" href="./">Political Simplicity</a>
			</div>
			
			<div class="collapse navbar-collapse topNavbar">
				<ul class="nav navbar-nav">
					<li class="<?php if($active === 'home') echo 'active'; ?>"><a href="./"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li class="<?php if($active === 'about') echo 'active'; ?>"><a href="#"><span class="glyphicon glyphicon-question-sign"></span> About Us</a></li>
					<li>
						<!--<div class="input-group">
						  <input type="text" class="form-control" placeholder="Search our website">
						  <span class="input-group-btn">
							<button class="btn btn-default" type="button">Go!</button>
						  </span>
						</div>-->
						<form id="tfnewsearch" method="get" action="http://www.google.com/" _lpchecked="1">
							<input type="text" name="query" size="21" maxlength="120" placeholder="Search our website">
							<button type="submit"><span class="glyphicon glyphicon-search"></span></input>
						</form>
					</li>
				</ul>
			</div>
		</nav>
