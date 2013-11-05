<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-28 12:18:15 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$last_name ~ APPPATH\classes\Controller\Web\Home.php [ 22 ] in C:\wamp\www\polysimplicity\alt\application\classes\Controller\Web\Home.php:22
2013-10-28 12:18:15 --- DEBUG: #0 C:\wamp\www\polysimplicity\alt\application\classes\Controller\Web\Home.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\pol...', 22, Array)
#1 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\alt\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\alt\application\classes\Controller\Web\Home.php:22
2013-10-28 12:18:50 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$first_name ~ APPPATH\classes\Controller\Web\Home.php [ 22 ] in C:\wamp\www\polysimplicity\alt\application\classes\Controller\Web\Home.php:22
2013-10-28 12:18:50 --- DEBUG: #0 C:\wamp\www\polysimplicity\alt\application\classes\Controller\Web\Home.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\pol...', 22, Array)
#1 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\alt\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\alt\application\classes\Controller\Web\Home.php:22