<html>
    <head>
        <title><?php echo $title ?> - Politicalsimplicity.com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Bootstrap CSS Files-->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
        
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
    <!--Header NAV START -->
    <nav class="navbar navbar-inverse" role="navigation">
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
    </nav>
    <!--Header END -->
    
    <script>
	$(function() {
		var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
		$( "#search" ).autocomplete({
			source: availableTags
		});
	});
	</script>
    
<?php
	if (isset($_GET['query'])) {
		$query = $_GET['query'];
		$queryarray = explode(" ", $query);
		foreach ($queryarray as $item) {
			$candidates = ORM::factory('Candidates')->where('first_name', 'like', "$item%")->
				or_where('middle_name', 'like', "$item%")->or_where('last_name', 'like', "$item%")->find_all();
			foreach ($candidates as $candidate) {
				echo $candidate->first_name . " " . $candidate->middle_name . " " . $candidate->last_name . "<br>";
			}
		}
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
