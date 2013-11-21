<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-15 12:38:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\controllers\web\management\form.php [ 18 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php:18
2013-11-15 12:38:55 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 18, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\views\containers\default.php(105): Kohana_View->__toString()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php(97): Kohana_Controller_Template->after()
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Web_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php:18
2013-11-15 12:40:15 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTML.php [ 71 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\HTML.php:71
2013-11-15 12:40:15 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\pol...', 71, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\HTML.php(338): Kohana_HTML::chars(Array)
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Form.php(107): Kohana_HTML::attributes(Array)
#3 C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php(18): Kohana_Form::input('username', Array)
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 C:\wamp\www\polysimplicity\application\views\containers\default.php(105): Kohana_View->__toString()
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#10 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php(97): Kohana_Controller_Template->after()
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Web_Containers_Default->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#15 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#18 {main} in C:\wamp\www\polysimplicity\system\classes\Kohana\HTML.php:71
2013-11-15 12:43:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: first_name ~ APPPATH\views\controllers\web\management\form.php [ 18 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php:18
2013-11-15 12:43:26 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 18, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\views\containers\default.php(105): Kohana_View->__toString()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php(97): Kohana_Controller_Template->after()
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Web_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php:18
2013-11-15 12:44:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH\views\controllers\web\management\form.php [ 18 ] in file:line
2013-11-15 12:44:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 12:45:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\views\controllers\web\management\form.php [ 22 ] in file:line
2013-11-15 12:45:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 13:00:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function test() ~ APPPATH\views\controllers\web\management\form.php [ 4 ] in file:line
2013-11-15 13:00:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 13:01:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function test() on a non-object ~ APPPATH\views\controllers\web\management\form.php [ 4 ] in file:line
2013-11-15 13:01:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 13:01:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\views\controllers\web\management\form.php [ 4 ] in file:line
2013-11-15 13:01:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 13:01:38 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\controllers\web\management\form.php [ 4 ] in file:line
2013-11-15 13:01:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 13:03:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\views\controllers\web\management\form.php [ 4 ] in file:line
2013-11-15 13:03:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 13:03:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Dispatch' not found ~ APPPATH\views\controllers\web\management\form.php [ 4 ] in file:line
2013-11-15 13:03:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 15:01:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:01:59 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:02:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:02:03 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:02:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:02:08 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:02:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:02:12 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:04:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:04:31 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:04:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:04:32 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:04:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:04:43 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:09:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:09:23 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:14:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:14:27 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:14:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:14:30 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:14:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:14:31 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:16:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:16:44 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:18 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:34 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:36 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:36 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:37 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:37 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:38 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:38 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:39 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:40 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:41 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:41 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:22:42 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:23:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:23:09 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:23:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:23:10 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:23:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: term ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-15 15:23:17 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15