<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-09 00:01:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Web\Home.php [ 190 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:190
2013-11-09 00:01:08 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(190): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 190, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:190
2013-11-09 00:04:09 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in C:\wamp\www\polysimplicity\modules\auth\classes\Kohana\Auth\File.php:40
2013-11-09 00:04:09 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('admin')
#1 C:\wamp\www\polysimplicity\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('admin', 'admin', false)
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(191): Kohana_Auth->login('admin', 'admin')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\auth\classes\Kohana\Auth\File.php:40
2013-11-09 00:04:23 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in C:\wamp\www\polysimplicity\modules\auth\classes\Kohana\Auth\File.php:40
2013-11-09 00:04:23 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('admin')
#1 C:\wamp\www\polysimplicity\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('admin', 'admin', false)
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(191): Kohana_Auth->login('admin', 'admin')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\auth\classes\Kohana\Auth\File.php:40
2013-11-09 00:18:47 --- CRITICAL: View_Exception [ 0 ]: The requested view user/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2013-11-09 00:18:47 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/login')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/login', NULL)
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(185): Kohana_View::factory('user/login')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2013-11-09 00:26:20 --- CRITICAL: View_Exception [ 0 ]: The requested view user/create could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2013-11-09 00:26:20 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/create')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/create', NULL)
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(212): Kohana_View::factory('user/create')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2013-11-09 00:26:30 --- CRITICAL: View_Exception [ 0 ]: The requested view home/create could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2013-11-09 00:26:30 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(137): Kohana_View->set_filename('home/create')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(30): Kohana_View->__construct('home/create', NULL)
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(212): Kohana_View::factory('home/create')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2013-11-09 00:28:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Web\Home.php [ 199 ] in file:line
2013-11-09 00:28:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-09 00:29:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Web\Home.php [ 199 ] in file:line
2013-11-09 00:29:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-09 00:29:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Web\Home.php [ 199 ] in file:line
2013-11-09 00:29:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-09 00:31:19 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: controllers/web/home/form ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:199
2013-11-09 00:31:19 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(199): Kohana_Route::get('controllers/web...')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:199
2013-11-09 00:31:39 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: /home/form ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:199
2013-11-09 00:31:39 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(199): Kohana_Route::get('/home/form')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:199
2013-11-09 00:32:46 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: default ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:199
2013-11-09 00:32:46 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(199): Kohana_Route::get('default')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:199
2013-11-09 00:51:50 --- CRITICAL: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2013-11-09 00:51:50 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/info')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/info', NULL)
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(43): Kohana_View::factory('user/info')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_form()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2013-11-09 00:52:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Web\Home.php [ 48 ] in file:line
2013-11-09 00:52:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-09 00:59:57 --- CRITICAL: View_Exception [ 0 ]: The requested view controllers/web/management/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2013-11-09 00:59:57 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(137): Kohana_View->set_filename('controllers/web...')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(30): Kohana_View->__construct('controllers/web...', NULL)
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(11): Kohana_View::factory('controllers/web...')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2013-11-09 01:00:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\controllers\web\management\login.php [ 4 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\login.php:4
2013-11-09 01:00:26 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 4, Array)
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
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\login.php:4
2013-11-09 01:14:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\views\controllers\web\management\index.php [ 5 ] in file:line
2013-11-09 01:14:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-09 01:15:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: candidate ~ APPPATH\classes\Controller\Web\Management.php [ 121 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:121
2013-11-09 01:15:23 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(121): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 121, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_form()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:121
2013-11-09 01:24:54 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\Session.php:125
2013-11-09 01:24:54 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
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
2013-11-09 01:25:10 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:171
2013-11-09 01:25:10 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('candidates')
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(9): Kohana_ORM::factory('Candidates')
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:171
2013-11-09 22:47:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: personal ~ APPPATH\classes\Controller\Web\Management.php [ 27 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:27
2013-11-09 22:47:16 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 27, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:27
2013-11-09 22:47:23 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$personal_id ~ APPPATH\classes\Controller\Web\Management.php [ 27 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:27
2013-11-09 22:47:23 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\pol...', 27, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:27
2013-11-09 22:49:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'each' (T_STRING), expecting '(' ~ APPPATH\classes\Controller\Web\Management.php [ 27 ] in file:line
2013-11-09 22:49:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-09 22:49:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: candidate ~ APPPATH\classes\Controller\Web\Management.php [ 30 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:30
2013-11-09 22:49:42 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 30, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:30
2013-11-09 23:09:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$table' (T_VARIABLE) ~ APPPATH\classes\Controller\Web\Management.php [ 35 ] in file:line
2013-11-09 23:09:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-09 23:09:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$table' (T_VARIABLE) ~ APPPATH\classes\Controller\Web\Management.php [ 35 ] in file:line
2013-11-09 23:09:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-09 23:09:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_personal_information' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-09 23:09:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-09 23:14:58 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'personal.personal_id' in 'on clause' [ SELECT `personal`.`id` AS `personal:id`, `personal`.`gender` AS `personal:gender`, `personal`.`birth_date` AS `personal:birth_date`, `personal`.`birth_state` AS `personal:birth_state`, `personal`.`party` AS `personal:party`, `candidates`.`id` AS `id`, `candidates`.`first_name` AS `first_name`, `candidates`.`middle_name` AS `middle_name`, `candidates`.`last_name` AS `last_name`, `candidates`.`personal_id` AS `personal_id`, `candidates`.`image` AS `image` FROM `candidates` AS `candidates` LEFT JOIN `personal_information` AS `personal` ON (`candidates`.`id` = `personal`.`personal_id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:14:58 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `persona...', 'Model_Candidate...', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:16:44 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'personal.personal_id' in 'on clause' [ SELECT `personal`.`id` AS `personal:id`, `personal`.`gender` AS `personal:gender`, `personal`.`birth_date` AS `personal:birth_date`, `personal`.`birth_state` AS `personal:birth_state`, `personal`.`party` AS `personal:party`, `candidates`.`id` AS `id`, `candidates`.`first_name` AS `first_name`, `candidates`.`middle_name` AS `middle_name`, `candidates`.`last_name` AS `last_name`, `candidates`.`personal_id` AS `personal_id`, `candidates`.`image` AS `image` FROM `candidates` AS `candidates` LEFT JOIN `personal_information` AS `personal` ON (`candidates`.`id` = `personal`.`personal_id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:16:44 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `persona...', 'Model_Candidate...', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:17:32 --- CRITICAL: Kohana_Exception [ 0 ]: The gender property does not exist in the Model_Candidates class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:17:32 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('gender')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(35): Kohana_ORM->__get('gender')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:18:35 --- CRITICAL: Kohana_Exception [ 0 ]: The gender property does not exist in the Model_Candidates class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:18:35 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('gender')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(35): Kohana_ORM->__get('gender')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:18:45 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'personal.idd' in 'on clause' [ SELECT `personal`.`id` AS `personal:id`, `personal`.`gender` AS `personal:gender`, `personal`.`birth_date` AS `personal:birth_date`, `personal`.`birth_state` AS `personal:birth_state`, `personal`.`party` AS `personal:party`, `candidates`.`id` AS `id`, `candidates`.`first_name` AS `first_name`, `candidates`.`middle_name` AS `middle_name`, `candidates`.`last_name` AS `last_name`, `candidates`.`personal_id` AS `personal_id`, `candidates`.`image` AS `image` FROM `candidates` AS `candidates` LEFT JOIN `personal_information` AS `personal` ON (`candidates`.`id` = `personal`.`idd`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:18:45 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `persona...', 'Model_Candidate...', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:18:51 --- CRITICAL: Kohana_Exception [ 0 ]: The gender property does not exist in the Model_Candidates class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:18:51 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('gender')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(35): Kohana_ORM->__get('gender')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:19:02 --- CRITICAL: Kohana_Exception [ 0 ]: The gender property does not exist in the Model_Candidates class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:19:02 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('gender')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(35): Kohana_ORM->__get('gender')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:21:25 --- CRITICAL: Kohana_Exception [ 0 ]: The personald property does not exist in the Model_Candidates class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:21:25 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('personald')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(35): Kohana_ORM->__get('personald')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:21:29 --- CRITICAL: Kohana_Exception [ 0 ]: The personald property does not exist in the Model_Candidates class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:21:29 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('personald')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(35): Kohana_ORM->__get('personald')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:21:35 --- CRITICAL: Kohana_Exception [ 0 ]: The personald property does not exist in the Model_Candidates class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:21:35 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('personald')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(35): Kohana_ORM->__get('personald')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:27:39 --- CRITICAL: Database_Exception [ 1146 ]: Table 'politicalsimplicity_candidates.personal' doesn't exist [ SELECT `candidates`.`id` AS `id`, `candidates`.`first_name` AS `first_name`, `candidates`.`middle_name` AS `middle_name`, `candidates`.`last_name` AS `last_name`, `candidates`.`personal_id` AS `personal_id`, `candidates`.`image` AS `image` FROM `candidates` AS `candidates` LEFT JOIN `personal` ON (`Candidates`.`personal_id` = `personal`.`id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:27:39 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `candida...', 'Model_Candidate...', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:28:01 --- CRITICAL: Database_Exception [ 1146 ]: Table 'politicalsimplicity_candidates.personal' doesn't exist [ SELECT `candidates`.`id` AS `id`, `candidates`.`first_name` AS `first_name`, `candidates`.`middle_name` AS `middle_name`, `candidates`.`last_name` AS `last_name`, `candidates`.`personal_id` AS `personal_id`, `candidates`.`image` AS `image` FROM `candidates` AS `candidates` LEFT JOIN `personal` ON (`Candidates`.`personal_id` = `personal_information`.`id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:28:01 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `candida...', 'Model_Candidate...', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:28:40 --- CRITICAL: Kohana_Exception [ 0 ]: The party property does not exist in the Model_Candidates class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:28:40 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('party')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(35): Kohana_ORM->__get('party')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-09 23:30:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: first_name ~ APPPATH\views\controllers\web\management\submit.php [ 2 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\submit.php:2
2013-11-09 23:30:49 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\submit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 2, Array)
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
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\submit.php:2
2013-11-09 23:35:18 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Candidates.personal_idd' in 'on clause' [ SELECT `candidates`.`id` AS `id`, `candidates`.`first_name` AS `first_name`, `candidates`.`middle_name` AS `middle_name`, `candidates`.`last_name` AS `last_name`, `candidates`.`personal_id` AS `personal_id`, `candidates`.`image` AS `image` FROM `candidates` AS `candidates` LEFT JOIN `personal_information` ON (`Candidates`.`personal_idd` = `personal_information`.`id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:35:18 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `candida...', 'Model_Candidate...', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:41:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-09 23:41:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-09 23:52:40 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'personal.personal_id' in 'on clause' [ SELECT `personal`.`id` AS `personal:id`, `personal`.`gender` AS `personal:gender`, `personal`.`birth_date` AS `personal:birth_date`, `personal`.`birth_state` AS `personal:birth_state`, `personal`.`party` AS `personal:party`, `candidates`.`id` AS `id`, `candidates`.`first_name` AS `first_name`, `candidates`.`middle_name` AS `middle_name`, `candidates`.`last_name` AS `last_name`, `candidates`.`personal_id` AS `personal_id`, `candidates`.`image` AS `image` FROM `candidates` AS `candidates` LEFT JOIN `personal_information` AS `personal` ON (`candidates`.`id` = `personal`.`personal_id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:52:40 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `persona...', 'Model_Candidate...', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(28): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:52:56 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'personal.candidates.personal_id' in 'on clause' [ SELECT `personal`.`id` AS `personal:id`, `personal`.`gender` AS `personal:gender`, `personal`.`birth_date` AS `personal:birth_date`, `personal`.`birth_state` AS `personal:birth_state`, `personal`.`party` AS `personal:party`, `candidates`.`id` AS `id`, `candidates`.`first_name` AS `first_name`, `candidates`.`middle_name` AS `middle_name`, `candidates`.`last_name` AS `last_name`, `candidates`.`personal_id` AS `personal_id`, `candidates`.`image` AS `image` FROM `candidates` AS `candidates` LEFT JOIN `personal_information` AS `personal` ON (`candidates`.`id` = `personal`.`candidates`.`personal_id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:52:56 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `persona...', 'Model_Candidate...', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(28): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:53:56 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'personal.candidates_id' in 'on clause' [ SELECT `personal`.`id` AS `personal:id`, `personal`.`gender` AS `personal:gender`, `personal`.`birth_date` AS `personal:birth_date`, `personal`.`birth_state` AS `personal:birth_state`, `personal`.`party` AS `personal:party`, `candidates`.`id` AS `id`, `candidates`.`first_name` AS `first_name`, `candidates`.`middle_name` AS `middle_name`, `candidates`.`last_name` AS `last_name`, `candidates`.`personal_id` AS `personal_id`, `candidates`.`image` AS `image` FROM `candidates` AS `candidates` LEFT JOIN `personal_information` AS `personal` ON (`candidates`.`id` = `personal`.`candidates_id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:53:56 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `persona...', 'Model_Candidate...', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(28): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-09 23:59:41 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\Session.php:125
2013-11-09 23:59:41 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
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
2013-11-09 23:59:59 --- CRITICAL: Database_Exception [ 1146 ]: Table 'politicalsimplicity_candidates.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:359
2013-11-09 23:59:59 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\polysimplicity\modules\orm\classes\Model\Auth\User\Token.php(29): Kohana_ORM->__construct(Array)
#6 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(46): Model_Auth_User_Token->__construct(Array)
#7 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\Auth\ORM.php(158): Kohana_ORM::factory('User_Token', Array)
#8 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\Auth\ORM.php(199): Kohana_Auth_ORM->auto_login()
#9 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(11): Kohana_Auth_ORM->get_user()
#10 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#13 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:359