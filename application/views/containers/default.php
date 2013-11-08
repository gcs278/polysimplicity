<!--<html>
    <head>
        <title><?php echo $title ?> - Politicalsimplicity.com</title>
        
    </head>
    <?php
    //foreach ($styles as $file => $type)
     //   echo HTML::style($file, array('media' => $type)), PHP_EOL
        ?>
    <?php
    //foreach ($scripts as $file)
     //   echo HTML::script($file), PHP_EOL
        ?>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
        var document_root = '<?php echo Url::site(); ?>';
    </script>
    
<div id="fixed-wrapper">
        <div id="header-wrapper">
            <a href="./index.php">
                <div id="logo">
                    Political Simplicity
                </div>
            </a>
            <form id="tfnewsearch" method="get" action="http://www.google.com/">
                    <input type="text" id="tfq2b" class="tftextinput2" name="q" size="21" maxlength="120" value="Search our website"><input type="submit" value=">" class="tfbutton2">
            </form>
            <div class="tfclear"></div>
            <nav>
                <ul><a href="./index.php"><img src="media/images/home-5-xxl.png"/></a></ul>
                <ul><a href="."><img src="media/images/newspaper-12-xxl.png"/></a></ul>
                <ul><a href="./"><img src="media/images/gear-xxl.png"/></a></ul>
            </nav>
        </div>
</div>-->
<?php echo $content ?>
        <!--<div class="container">
            <div class="span-24 last"></div>  
             <div class="span-24 last footer"><center>Politicalsimplicity.com</center></div>  
        </div>
       
    </body>
</html>-->

