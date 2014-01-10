		<div class="span8 offset1">
			<div class="span11">
			<h1 >Welcome <?php if (isset($user))echo $user ?>!</h1>
			<br>
			<h3>Candidates currently in database:</h3>
    		<table class="table table-striped" id="candidates_table">
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
			<div class="loading" id="dim" style="display: none"></div>
			<div class="loading" id="edits" style="display: none">
				<span class="close">&times;</span>
				<h2 style="text-align: center">Edit History</h4>
				<hr>
				<div class="spinner"> <!--<?php echo HTML::image('media/images/ajax-loader.gif',array('width'=>20,'height'=>20))?> -->
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div>
				<div id="edit_list" class="">
					<table class='table table-striped' id='edits_table' align='center'>
 					<thead>
 					<tr>
 						<th>Date</th>
 						<th>Time</th>
 						<th>Username</th>
 						<th>Name</th>
 					</tr>
 					</thead>
 					<tbody id='edit_tbody'>
 					<tr>
 					</tbody>
 					</table>
				</div>
			</div>
   		</div>
   	</div>
</div>
<?php if(isset($script)) {
	echo $script;
}
?>
<script>
	 $(window).ready(function() {

		$(".edit_history").click(function() {
			$('.loading').css('display', 'inherit');
			$('.loading').animate({
				opacity: 1
			});
			console.log($(this).val());
			$('#edit_tbody').empty();
			getEdits($('td:first', $(this).parents('tr')).text());

		}  );

		function getEdits(id) {
			$.get('?candidate_id=' + id, function(data) {
				console.log(data);
				var list = $('#edit_list');

				for (var i=0; i<data.length; i++) {
					console.log
					console.log(data[i]);

					$('#edits_table > tbody:last').append('<tr><td>'+data[i].date+
						'</td><td>'+data[i].time+'</td><td>'+data[i].id+'</td><td>'+
						data[i].name+'</td></tr>');

				}
				$('.spinner').css("display", "none");
			}, 'json');
		}

		$('.loading').on('click', '.close', function() {
		$('.loading').animate({
			opacity: 0
		}, function() {
			$('.loading').css("display", "none");
			$('.spinner').css("display", "inherit");
		});
	});
	});


</script>