<div class="container-fluid full">
	<div class ="row-fluid">
		<div class="span2 offset1">
			<h3>Candidate Management</h3>

			<ul class="nav nav-pills nav-stacked">
  				<li class="active"><?php echo Html::anchor('management/index', 'View Candidates') ?></li>
  				<li><?php echo Html::anchor('management/form', 'Create a new Candidate') ?></li>
  				<li><?php echo Html::anchor('management/form', 'Modify Candidate') ?></li>
  				<li><?php echo Html::anchor('management/form', 'Preview Candidate') ?></li>
  				<li><?php echo Html::anchor('management/logout', 'Log Out') ?></li>
			</ul>

		</div>
		<div class="span8 offset1">
			<div class="span8">
			<h1 >Welcome <?php echo $user ?>!</h1>
			<br>
			<h3>Candidates currently in database:</h3>
    		<table class="table table-striped">
 				<thead>
 					<tr>
 						<th>ID</th>
 						<th>Name</th>
 						<th>Party</th>
 						<th>Gender</th>
 						<th>Birth Date</th>
 						<th>Birth State</th>
 					</tr>
 				</thead>
 				<tbody>
 				<?php echo $table ?>
 				</tbody>
			</table>
			</div>
   		</div>
   	</div>
</div>

