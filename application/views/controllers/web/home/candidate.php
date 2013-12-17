<div class="container">
  <div id="loading" style="text-align: center;"><?php echo HTML::image('media/images/ajax-loader.gif',array('width'=>20,'height'=>20))?></div>
  <h1 class="text-center"><?php echo $candidate_name; ?></h1>
  <div class="row-fluid">
    <div class="col-sm-4">
        <img id="profile-pic" src="data:image/jpg;base64, <?php echo $image ?>" class="img-rounded img-responsive" \>
    </div> 
    <div class="col-sm-8 well" style='height: 300px;'>
       <h2>Demographics:</h2> 
       <table class="table table-striped">
           <tbody>
             <tr><td><h3><strong>Gender:</strong></h3> <?php echo $gender?></td></tr>
             <tr><td><h3><strong>Political Party:</strong></h3> <?php echo $party?></td></tr>
             <tr><td><h3><strong>Birth State:</strong></h3> <?php echo $birth_state?></td></tr>
             <tr><td><h3><strong>Birth Date: </strong></h3> <?php echo $birth_date?></td></tr>
         </tbody>
     </table>
 </div>
</div>
<div class="row-fluid" style="margin-top: 40px; margin-bottom: 100px;">
    <div class="well text-center">
        <div class="row-fluid">
            <h2 style="margin-bottom:20px;">Views</h2> 
            <?php echo $views_display; ?>
        </div>
    </div>
</div>
</div>

<script>
 $(window).ready(function() {
    $("#loading").remove();
});
</script>	

