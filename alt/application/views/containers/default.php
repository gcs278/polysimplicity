<html>
    <head>
        <title><?php echo $title ?> - Politicalsimplicity.com</title>
        
    </head>
    <?php
    foreach ($styles as $file => $type)
        echo HTML::style($file, array('media' => $type)), PHP_EOL
        ?>
    <?php
    foreach ($scripts as $file)
        echo HTML::script($file), PHP_EOL
        ?>

    <script type="text/javascript">
        var document_root = '<?php echo Url::site(); ?>';
    </script>
    <body>

        <div id="menu" class="container">
        </div>
        <div class="container">
        <ul class="nav nav-tabs">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Profile</a></li>
  <li><a href="#">Messages</a></li>
</ul>
            <div class="span-24 last"><?php echo $content ?></div>  
             <div class="span-24 last footer"><center>Politicalsimplicity.com</center></div>  
        </div>
       
    </body>
</html>

