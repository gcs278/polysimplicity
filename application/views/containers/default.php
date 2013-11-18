<html>
    <head>
        <title><?php echo $title ?> - Politicalsimplicity.com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Bootstrap CSS Files-->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
        
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
	<div class="container">
		<div class="row text-center">
				<?php echo url::site(); ?>
				<?php echo HTML::image(URL::site() . 'politicalsimplicity.com//media/images/logo_ps.png',array())?>
		</div>
		<div class="thin-line col-sm-10 col-sm-offset-1">
		</div>
		<div class="col-sm-3 col-sm-offset-2" style="margin-top: 6px;">
			<a href="<?php echo URL::site('')?>">Home</a>
		</div>
		<div class="col-sm-3" style="margin-top: 6px;">
			<a href="#">About Us</a>
		</div>
		<div class="col-sm-4" style="margin-bottom: 10px;">
			<form method="get" action="" _lpchecked="1">
				<!--<input type="text" id="search" name="query" size="21" maxlength="120" placeholder="Search our website">
				<button type="submit"><span class="glyphicon glyphicon-search"></span></input>-->
				<div class="input-group col-sm-10">
				  <input type="text" id="search" name="query" class="form-control">
				  <span class="input-group-btn">
					<button class="btn btn-default" type="button">Go!</button>
				  </span>
				</div>
			</form>
		</div>
		<div class="thin-line col-sm-10 col-sm-offset-1">
		</div>
    </div>
    <!--Header NAV START -->
    <!-- <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".topNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php echo Html::anchor('', 'Political Simplicity',array('class'=>'navbar-brand','id'=>'logo') ) ?>
                </div>
                
                <div class="collapse navbar-collapse topNavbar">
                    <ul class="nav navbar-nav">
                        <li class="<?php //if($active === 'home') echo 'active'; ?>"><a href="<?php echo URL::site('')?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li class="<?php //if($active === 'about') echo 'active'; ?>"><a href="#"><span class="glyphicon glyphicon-question-sign"></span> About Us</a></li>
                        <li>
                            <form id="tfnewsearch" method="get" action="" _lpchecked="1">
                                <input type="text" id="search" name="query" size="21" maxlength="120" placeholder="Search our website">
                                <button type="submit"><span class="glyphicon glyphicon-search"></span></input>
                            </form>
                        </li>
                    </ul>
                </div>
    </nav> -->
    <!--Header END -->
    
    <script>
	$(function() {
		$( "#search" ).autocomplete({
			source: "<?php echo URL::site('')?>"
		});
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

<!--Display Page-->
<?php echo $content ?>

<!--Footer START-->
<footer class="navbar-fixed-bottom" style="position:relative"><p>Political Simplicity, 2013
            <a href="<?php echo URL::site('management/')?>">
                <?php echo HTML::image('media/images/plus-xxl.png',array("width"=>25,"height"=>25))?>
            </a>
        </p>
</footer>
<!--Footer END-->

</body>
</html>
