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