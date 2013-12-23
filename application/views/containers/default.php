<html>
    <head>
        <title><?php echo $title ?> - Politicalsimplicity.com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Bootstrap CSS Files-->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">

				<!--Custom Fonts-->
				<link href='//fonts.googleapis.com/css?family=Qwigley' rel='stylesheet' type='text/css'>
				        
        <style>
						.thin-line { border-top: 1px solid #000;
										margin-bottom: 10px; }
						a { color: #000000; }
						a:hover { color: #aaaaaa;
								text-decoration: none; }
						ul { text-align: center; }
						li { margin-left: 100px;
								margin-right: 100px;
								margin-bottom: 10px; }
						#about_us { display: none;
								text-align: center; }
						#logo h1 { font-family: 'Qwigley', cursive;
								font-size: 900%;
								margin-bottom: 50px; }
				</style>
        
        <!--Kohana CSS Includes-->
        <?php
            foreach ($styles as $file => $type)
                echo HTML::style($file, array('media' => $type)), PHP_EOL
        ?>
        <!--Kohana Script Includes-->
        <?php
            foreach ($scripts as $file)
                echo HTML::script($file), PHP_EOL
        ?>
        
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    </head>

    <script type="text/javascript">
        var document_root = '<?php echo Url::site(); ?>';
    </script>

<body>
<?php include_once("analyticstracking.php") ?>
	<div class="container">
		<div class="text-center" id="logo">
			<h1>Political Simplicity</h1>
				<!--<?php echo HTML::image('media/images/logo_ps.png',array())?>-->
		</div>
		<div class="thin-line col-sm-10 col-sm-offset-1"></div>
		<div class="col-sm-3 col-sm-offset-2 lead" style="margin-top: 6px;">
			<a href="<?php echo URL::site('')?>">Home</a>
		</div>
		<div class="col-sm-2 lead" style="margin-top: 6px;">
			<a href="" id="about_link">About Us</a>
		</div>
		<div class="col-sm-4" style="margin-bottom: 10px;">
			<form method="get" action="" _lpchecked="1">
				<!--<input type="text" id="search" name="query" size="21" maxlength="120" placeholder="Search our website">
				<button type="submit"><span class="glyphicon glyphicon-search"></span></input>-->
				<div class="input-group col-sm-10">
				  <input type="text" id="search" name="query" class="form-control">
				  <span class="input-group-btn">
					<button class="btn btn-default" type="submit">Go!</button>
				  </span>
				</div>
			</form>
		</div>
		<div class="thin-line col-sm-10 col-sm-offset-1"></div>
    </div>
    
    <script>
			$(function() {
				$( "#search" ).autocomplete({
					source: "<?php echo URL::base()?>api/candidates/"
				});
			});
			
			$("#about_link").click(function() {
				$("#about_us").slideToggle(1000);
				return false;
			});
			
			$(document).ready(function() {
				if (window.location.href.indexOf("candidate") > -1) {
					$("#logo").hide("slow");
				}
			});
		</script>
    
<?php
	if (isset($_GET['query'])) {
		$query = $_GET['query'];
		$queryarray = explode(" ", $query);
		$candidate_names = array();
		foreach ($queryarray as $item) {
			$item = strip_tags($item);
			$candidates = ORM::factory('Candidates')->where('first_name', 'like', "$item%")->
				or_where('middle_name', 'like', "$item%")->or_where('last_name', 'like', "$item%")->find_all();
			foreach ($candidates as $candidate) {
				$candidate_names[] = $candidate->first_name . " " . $candidate->middle_name . " " . $candidate->last_name . "<br>";
			}
		}
		print_r(array_unique($candidate_names));
	}
?>

<div class="col-sm-8 col-sm-offset-2 lead" id="about_us">
	<p>Hi, we are a startup website that takes a political candidate's information and condenses it all on to one page in an easy, understandable way. Our hope is that you will read our site and base informed decisions off of the knowledge you obtain from us. Our goal is to make voting easy for people like you and I without imposing bias into that information other sources may unavoidably do.
		Please leave us a comment or feedback at our email <a href="mailto:feedback@politicalsimplicity.com">feedback@politicalsimplicity.com</a>. We would really appreciate any comments or suggests you have for us. If you have a candidate you would like to learn about please let us know and we will move them to the front of the list of candidates to be posted first.</p>
</div>

<!--Display Page-->
<?php echo $content ?>

<!--Footer START-->
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	<p class="lead" style="text-align: center;"> Political Simplicity, 2013
		<a href="<?php echo URL::site('management/')?>">
			<!--<?php echo HTML::image('media/images/plus-xxl.png',array("width"=>25,"height"=>25))?>-->
			<span class="glyphicon glyphicon-cog"></span>
		</a>
	</p>
</nav>
<!--Footer END-->

</body>
</html>
