		<div class="span8 offset1">
			<div class="span11">
			<h1 >Welcome <?php echo $user ?>!</h1>
			<br>
			<h3>Candidates currently in database:</h3>
    		<table class="table table-striped">
 				<thead>
 					<tr>
 						<th>ID</th>
 						<th>Name</th>
 						<th>Party</th>
 						<th>Birth Date</th>
 						<th>Birth State</th>
 						<th>Last Updated</th>
 						<th>By</th>
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

