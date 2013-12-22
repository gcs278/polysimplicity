<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-22 15:48:43 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Web\Management.php [ 249 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:249
2013-12-22 15:48:43 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(249): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\pol...', 249, Array)
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(513): Controller_Web_Management->create_tabbed_views(Array)
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:249
2013-12-22 15:52:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Web\Management.php [ 507 ] in file:line
2013-12-22 15:52:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-22 15:54:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: views_in_database ~ APPPATH\classes\Controller\Web\Management.php [ 512 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:512
2013-12-22 15:54:45 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(512): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 512, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:512
2013-12-22 15:58:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Web\Management.php [ 249 ] in file:line
2013-12-22 15:58:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line