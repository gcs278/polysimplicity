<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-04 20:50:26 --- CRITICAL: ErrorException [ 2 ]: include_once(analyticstracking.php): failed to open stream: No such file or directory ~ APPPATH\views\controllers\web\home\index.php [ 18 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\home\index.php:18
2013-11-04 20:50:26 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\home\index.php(18): Kohana_Core::error_handler(2, 'include_once(an...', 'C:\wamp\www\pol...', 18, Array)
#1 C:\wamp\www\polysimplicity\application\views\controllers\web\home\index.php(18): include_once()
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\polysimplicity\application\views\containers\default.php(41): Kohana_View->__toString()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php(98): Kohana_Controller_Template->after()
#10 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Web_Containers_Default->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#13 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\home\index.php:18