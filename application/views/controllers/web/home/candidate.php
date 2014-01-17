<div class="container">
  
  <h1 class="text-center" id="name"><?php echo $candidate_name; ?></h1>
  <div class="row-fluid">
    <div class="col-sm-4">
        <img id="profile-pic" src="data:image/jpg;base64, <?php echo $image ?>" class="img-rounded img-responsive" \>
    </div> 
    <div class="col-sm-8 well" style='height: 300px;'>
       <h2>Demographics:</h2> 
       <table class="table table-striped">
           <tbody>
            <?php
              if ( isset($position_running) ) {
                echo "<tr><td><h3><strong>Running For:</strong></h3> " . $position_running . "</td></tr>";
              }
              if ( isset($position_current) ) {
                echo "<tr><td><h3><strong>Current Position:</strong></h3> " . $position_current . "</td></tr>";
              }
            ?>
             
             <tr><td><h3><strong>Political Party:</strong></h3> <?php echo $party?></td></tr>
             <tr><td><h3><strong>Birth State:</strong></h3> <?php echo $birth_state?></td></tr>
             <tr><td><h3><strong>Birth Date:</strong></h3> <?php echo $birth_date?></td></tr>
         </tbody>
     </table>
 </div>
</div>

<div class="spinner" id="spinner1" style="display: inherit;">
	<div class="double-bounce1"></div>
	<div class="double-bounce2"></div>
</div>

<div class="row-fluid" style="margin-top: 40px; margin-bottom: 100px;">
    <div class="well text-center">
        <div class="row-fluid">
            <h2 style="margin-bottom:20px;">Views</h2> 
            <?php echo $views_display; ?>
        </div>
    </div>
</div>

<!-- <div class="row-fluid" style="margin-bottom: 200px;">
    <div class="well text-center">
      <h2 style="margin-bottom:20px;">Positions</h2>
      <div class="position-block">
        test
      </div>
    </div>
</div> -->

<script>
 $(window).ready(function() {
    //$(".spinner").remove();
    $('#spinner1').css("display", "none");
    $(".detail-view").hide();

    //arrange the background image starting position for all the rows.
    //This will allow the background image cut illusion when showing the folder content panel
    // $(".row").each(function() {
    //     $(this).css({
    //         backgroundImage: "url('http://farm6.static.flickr.com/5085/5335262784_8b5d87db95_d.jpg')",
    //         backgroundPosition: "0px -" + $(this).index() * $(this).outerHeight() + "px"
    //     });
    // });

    //when a folder is clicked,
    //position the content folder after the clicked row
    //and toggle all folder / app icon that is not the one clicked.
    //and toggle the folder content panel


    $(".view-block").click(function() {
        $(".detail-view").not(this).hide();
        var folderContent = $("#"+$(this).attr('id')+".detail-view");
        folderContent.remove();

        var folderContentShown = folderContent.css("display") != "none";

        var clickedFolder = $(this);
        clickedFolder.after(folderContent);

        // $("body").find(".folder, .app").not(clickedFolder).each(function() {
        //     if (!folderContentShown) $(this).animate({
        //         opacity: 0.20
        //     }, "fast");
        //     else $(this).animate({
        //         opacity: 1.00
        //     }, "fast");
        // });

        //clickedFolder.animate({opacity: folderContentShown ? 1.00 : 0.70}, "fast");
        folderContent.slideToggle("fast");
    });
});

	$('.list-group').on('click', 'a.list-group-item', function() {
		$('.list-group-item').removeClass('highlight');
		$(this).addClass('highlight');
		console.log($(this).text().split(':')[0]);
		console.log($('#name').text());
		var myobj = { "name": $('#name').text(), "view": $(this).text().split(':')[0] };
		$('#detail_view').html("<div class='spinner' id='spinner2' style='position: inherit;'><div class='double-bounce1'></div><div class='double-bounce2'></div></div>");
		$.ajax({
			url: '<?php echo URL::base()?>api/views/',
			type: 'GET',
			contentType:'application/json',
			data: myobj,
			success: function(data) {
				$('#detail_view').html("<strong>Detail View:</strong><br/>" + data);
			}
		});
		return false;
	});
</script>	

