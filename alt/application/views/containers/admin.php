<html>
    <head>
        <title><?php echo $title ?> - Administraci&oacute;n</title>
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
        <div class="container">
           
            <div class="span-24 last"><?php echo $content ?></div>  
             <div class="span-24 last"><center>Sector de Administracion</center></div>  
        </div>
       
    </body>
</html>

