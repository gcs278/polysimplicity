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
2013-12-22 17:13:13 --- CRITICAL: View_Exception [ 0 ]: The requested view controllers/web/management/form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2013-12-22 17:13:13 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(137): Kohana_View->set_filename('controllers/web...')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(30): Kohana_View->__construct('controllers/web...', NULL)
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(474): Kohana_View::factory('controllers/web...')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2013-12-22 18:44:42 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php on line 445 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1849 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:1849
2013-12-22 18:44:42 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1849): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\pol...', 1849, Array)
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(445): Kohana_ORM->where('title')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:1849
2013-12-22 18:46:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Web\Management.php [ 512 ] in file:line
2013-12-22 18:46:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-22 18:46:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Web\Management.php [ 512 ] in file:line
2013-12-22 18:46:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line