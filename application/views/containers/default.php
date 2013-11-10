<html>
    <head>
        <title><?php echo $title ?> - Politicalsimplicity.com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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
                    <?php echo Html::anchor('home/index', 'Political Simplicity',array('class'=>'navbar-brand','id'=>'logo') ) ?>
                </div>
                
                <div class="collapse navbar-collapse topNavbar">
                    <ul class="nav navbar-nav">
                        <li class="<?php //if($active === 'home') echo 'active'; ?>"><a href="./"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li class="<?php //if($active === 'about') echo 'active'; ?>"><a href="#"><span class="glyphicon glyphicon-question-sign"></span> About Us</a></li>
                        <li>
                            <form id="tfnewsearch" method="get" action="http://www.google.com/" _lpchecked="1">
                                <input type="text" name="query" size="21" maxlength="120" placeholder="Search our website">
                                <button type="submit"><span class="glyphicon glyphicon-search"></span></input>
                            </form>
                        </li>
                    </ul>
                </div>
    </nav>
    <!--Header END -->

<!--Display Page-->
<?php echo $content ?>

<!--Footer START-->
<footer><p>Political Simplicity, 2013
            <a href="<?php echo URL::site('management/index/')?>">
                <?php echo HTML::image('media/images/plus-xxl.png',array("width"=>25,"height"=>25))?>
            </a>
        </p>
</footer>
<!--Footer END-->

<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</body>
</html>
