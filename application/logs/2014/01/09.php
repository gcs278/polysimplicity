<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-09 12:07:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '']'' (T_CONSTANT_ENCAPSED_STRING), expecting ']' ~ APPPATH\classes\Controller\Web\Management.php [ 135 ] in file:line
2014-01-09 12:07:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 12:07:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '']'' (T_CONSTANT_ENCAPSED_STRING), expecting ']' ~ APPPATH\classes\Controller\Web\Management.php [ 135 ] in file:line
2014-01-09 12:07:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 12:07:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '']'' (T_CONSTANT_ENCAPSED_STRING), expecting ']' ~ APPPATH\classes\Controller\Web\Management.php [ 136 ] in file:line
2014-01-09 12:07:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 12:07:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '']'' (T_CONSTANT_ENCAPSED_STRING), expecting ']' ~ APPPATH\classes\Controller\Web\Management.php [ 136 ] in file:line
2014-01-09 12:07:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 12:10:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ APPPATH\classes\Controller\Web\Management.php [ 135 ] in file:line
2014-01-09 12:10:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 12:10:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title[0] ~ APPPATH\classes\Controller\Web\Management.php [ 135 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:135
2014-01-09 12:10:43 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(135): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 135, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_form()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:135
2014-01-09 12:14:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: status[0] ~ APPPATH\classes\Controller\Web\Management.php [ 141 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:141
2014-01-09 12:14:04 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(141): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 141, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_form()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:141
2014-01-09 13:01:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function where() ~ APPPATH\classes\Controller\Web\Management.php [ 467 ] in file:line
2014-01-09 13:01:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 13:04:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ APPPATH\classes\Controller\Web\Management.php [ 456 ] in file:line
2014-01-09 13:04:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 13:10:12 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: script ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:542
2014-01-09 13:10:12 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(542): Kohana_View->__get('script')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:542
2014-01-09 16:36:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users_id ~ APPPATH\classes\Controller\Web\Management.php [ 18 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:18
2014-01-09 16:36:10 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 18, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:18
2014-01-09 16:36:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users_id ~ APPPATH\classes\Controller\Web\Management.php [ 18 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:18
2014-01-09 16:36:40 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 18, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:18
2014-01-09 16:37:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users_id ~ APPPATH\classes\Controller\Web\Management.php [ 18 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:18
2014-01-09 16:37:22 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 18, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:18
2014-01-09 16:38:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users_id ~ APPPATH\classes\Controller\Web\Management.php [ 19 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:19
2014-01-09 16:38:23 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 19, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:19
2014-01-09 16:39:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users_id ~ APPPATH\classes\Controller\Web\Management.php [ 19 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:19
2014-01-09 16:39:11 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 19, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:19
2014-01-09 16:39:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users_id ~ APPPATH\classes\Controller\Web\Management.php [ 19 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:19
2014-01-09 16:39:15 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 19, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:19
2014-01-09 16:39:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users_id ~ APPPATH\classes\Controller\Web\Management.php [ 20 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:39:33 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 20, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:39:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users_id ~ APPPATH\classes\Controller\Web\Management.php [ 20 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:39:50 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 20, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:39:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users_id ~ APPPATH\classes\Controller\Web\Management.php [ 20 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:39:51 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 20, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:42:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users_id ~ APPPATH\classes\Controller\Web\Management.php [ 20 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:42:10 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 20, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:42:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users_id ~ APPPATH\classes\Controller\Web\Management.php [ 20 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:42:27 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 20, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:53:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Web\Management.php [ 20 ] in file:line
2014-01-09 16:53:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 16:53:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users_id ~ APPPATH\classes\Controller\Web\Management.php [ 20 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:53:41 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 20, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:54:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\Web\Management.php [ 27 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:27
2014-01-09 16:54:06 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 27, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:27
2014-01-09 16:54:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\Web\Management.php [ 27 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:27
2014-01-09 16:54:07 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 27, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:27
2014-01-09 16:54:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\Web\Management.php [ 27 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:27
2014-01-09 16:54:08 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 27, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:27
2014-01-09 16:55:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: candidate_id ~ APPPATH\classes\Controller\Web\Management.php [ 18 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:18
2014-01-09 16:55:02 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 18, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:18
2014-01-09 16:55:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users_id ~ APPPATH\classes\Controller\Web\Management.php [ 20 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:55:38 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 20, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:56:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users_id ~ APPPATH\classes\Controller\Web\Management.php [ 20 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:56:09 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 20, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:59:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: candidates_id ~ APPPATH\classes\Controller\Web\Management.php [ 20 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 16:59:10 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 20, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 17:00:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: candidates_id ~ APPPATH\classes\Controller\Web\Management.php [ 20 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 17:00:19 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 20, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 17:01:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Web\Management.php [ 20 ] in file:line
2014-01-09 17:01:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 17:01:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: candidates_id ~ APPPATH\classes\Controller\Web\Management.php [ 20 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 17:01:15 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 20, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:20
2014-01-09 20:37:40 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\Session.php:125
2014-01-09 20:37:40 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\polysimplicity\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 C:\wamp\www\polysimplicity\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(90): Kohana_Auth::instance()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_form()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\polysimplicity\system\classes\Kohana\Session.php:125
2014-01-09 20:37:50 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:171
2014-01-09 20:37:50 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\Auth\ORM.php(79): Kohana_ORM::factory('User')
#8 C:\wamp\www\polysimplicity\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('gcs278', 'Popala27?', false)
#9 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(303): Kohana_Auth->login('gcs278', 'Popala27?', false)
#10 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#13 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:171
2014-01-09 21:51:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\Web\Rest.php [ 9 ] in file:line
2014-01-09 21:51:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 21:51:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\Web\Rest.php [ 9 ] in file:line
2014-01-09 21:51:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 21:51:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\Web\Rest.php [ 9 ] in file:line
2014-01-09 21:51:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 21:51:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\Web\Rest.php [ 9 ] in file:line
2014-01-09 21:51:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 21:51:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\Web\Rest.php [ 9 ] in file:line
2014-01-09 21:51:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 22:05:12 --- CRITICAL: ReflectionException [ 0 ]: Class Controller_API_API does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 94 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php:94
2014-01-09 22:05:12 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#4 {main} in C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php:94
2014-01-09 22:06:44 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2014-01-09 22:06:44 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_API_API))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2014-01-09 22:08:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_API_Containers_API_Default' not found ~ APPPATH\classes\Controller\API\API.php [ 5 ] in file:line
2014-01-09 22:08:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 22:08:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_API_Containers_API_Default' not found ~ APPPATH\classes\Controller\API\API.php [ 5 ] in file:line
2014-01-09 22:08:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 22:09:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_API_Containers_Default' not found ~ APPPATH\classes\Controller\API\API.php [ 5 ] in file:line
2014-01-09 22:09:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 22:09:38 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2014-01-09 22:09:38 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\polysimplicity\application\classes\Controller\API\Containers\Default.php(22): Kohana_Controller_Template->before()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(69): Controller_API_Containers_Default->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_API_API))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2014-01-09 22:10:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\containers\default.php [ 3 ] in C:\wamp\www\polysimplicity\application\views\containers\default.php:3
2014-01-09 22:10:36 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\containers\default.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 3, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\classes\Controller\API\Containers\Default.php(49): Kohana_Controller_Template->after()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_API_Containers_Default->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_API_API))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\polysimplicity\application\views\containers\default.php:3
2014-01-09 22:11:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\classes\Controller\API\Containers\Default.php [ 43 ] in C:\wamp\www\polysimplicity\application\classes\Controller\API\Containers\Default.php:43
2014-01-09 22:11:10 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\API\Containers\Default.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 43, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_API_Containers_Default->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_API_API))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\API\Containers\Default.php:43
2014-01-09 22:11:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\containers\default.php [ 3 ] in C:\wamp\www\polysimplicity\application\views\containers\default.php:3
2014-01-09 22:11:15 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\containers\default.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 3, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\classes\Controller\API\Containers\Default.php(51): Kohana_Controller_Template->after()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_API_Containers_Default->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_API_API))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\polysimplicity\application\views\containers\default.php:3
2014-01-09 22:28:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH\classes\Controller\Web\Home.php [ 84 ] in file:line
2014-01-09 22:28:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-09 22:30:56 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\Web\Home.php [ 78 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:78
2014-01-09 22:30:56 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(78): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\pol...', 78, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:78
2014-01-09 22:39:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH\classes\Controller\Web\Home.php [ 78 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:78
2014-01-09 22:39:55 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(78): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\pol...', 78, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:78
2014-01-09 23:01:11 --- CRITICAL: Kohana_Exception [ 0 ]: The candidates_id property does not exist in the Model_Candidates class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2014-01-09 23:01:11 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('candidates_id')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(90): Kohana_ORM->__get('candidates_id')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603