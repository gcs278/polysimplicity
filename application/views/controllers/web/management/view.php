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
			<div class='row'>
				<img src="data:image/jpg;base64, <?php echo $image ?>" style="max-width:200px;"/>
			</div>
		</div>
	</div>
</div>