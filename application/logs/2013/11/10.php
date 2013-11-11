<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-10 00:05:39 --- CRITICAL: Kohana_Exception [ 0 ]: The personal_id property does not exist in the Model_Candidates class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-10 00:05:39 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('personal_id')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(31): Kohana_ORM->__get('personal_id')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-10 00:08:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\controllers\web\management\index.php [ 16 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php:16
2013-11-10 00:08:43 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 16, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\views\containers\default.php(56): Kohana_View->__toString()
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
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php:16
2013-11-10 00:23:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\controllers\web\management\index.php [ 12 ] in file:line
2013-11-10 00:23:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 00:23:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::current() ~ APPPATH\views\controllers\web\management\index.php [ 12 ] in file:line
2013-11-10 00:23:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 01:03:39 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\Session.php:125
2013-11-10 01:03:39 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\polysimplicity\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 C:\wamp\www\polysimplicity\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(11): Kohana_Auth::instance()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\polysimplicity\system\classes\Kohana\Session.php:125
2013-11-10 23:34:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\controllers\web\management\login.php [ 3 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\login.php:3
2013-11-10 23:34:25 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\login.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 3, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\views\containers\default.php(56): Kohana_View->__toString()
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
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\login.php:3
2013-11-10 23:36:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function convert_image() ~ APPPATH\classes\Controller\Web\Management.php [ 90 ] in file:line
2013-11-10 23:36:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 23:36:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'pulbic' (T_STRING), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Web\Management.php [ 146 ] in file:line
2013-11-10 23:36:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 23:36:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function convert_image() ~ APPPATH\classes\Controller\Web\Management.php [ 90 ] in file:line
2013-11-10 23:36:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 23:37:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function convert_image() ~ APPPATH\classes\Controller\Web\Management.php [ 90 ] in file:line
2013-11-10 23:37:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 23:37:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function convert_image() ~ APPPATH\classes\Controller\Web\Management.php [ 120 ] in file:line
2013-11-10 23:37:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 23:39:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Web\Management.php [ 120 ] in file:line
2013-11-10 23:39:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 23:41:32 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Web\Management.php [ 154 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:154
2013-11-10 23:41:32 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(154): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\wamp\www\pol...', 154, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_form()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:154
2013-11-10 23:42:15 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Web\Management.php [ 155 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:155
2013-11-10 23:42:15 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(155): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\wamp\www\pol...', 155, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_form()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:155