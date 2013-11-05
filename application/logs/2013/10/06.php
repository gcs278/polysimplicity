<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-06 19:12:05 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Cookie.php:67
2013-10-06 19:12:05 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('nessus-session', NULL)
#1 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('nessus-session')
#2 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Cookie.php:67