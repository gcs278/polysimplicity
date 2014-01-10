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