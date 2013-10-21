<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-21 14:28:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\classes\Controller\Web\Home.php [ 10 ] in C:\wamp\www\polysimplicity\alt\application\classes\Controller\Web\Home.php:10
2013-10-21 14:28:25 --- DEBUG: #0 C:\wamp\www\polysimplicity\alt\application\classes\Controller\Web\Home.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 10, Array)
#1 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\alt\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\alt\application\classes\Controller\Web\Home.php:10
2013-10-21 14:29:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Candidates' not found ~ APPPATH\classes\Controller\Web\Home.php [ 9 ] in file:line
2013-10-21 14:29:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 14:31:55 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Candidates' not found ~ APPPATH\classes\Controller\Web\Home.php [ 9 ] in file:line
2013-10-21 14:31:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 14:33:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Candidates' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2013-10-21 14:33:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 14:37:58 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Candidates::$_db ~ APPPATH\classes\Model\Candidates.php [ 14 ] in C:\wamp\www\polysimplicity\alt\application\classes\Model\Candidates.php:14
2013-10-21 14:37:58 --- DEBUG: #0 C:\wamp\www\polysimplicity\alt\application\classes\Model\Candidates.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\pol...', 14, Array)
#1 C:\wamp\www\polysimplicity\alt\application\classes\Controller\Web\Home.php(10): Model_Candidates->get_all_candidates()
#2 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#5 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\alt\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\alt\application\classes\Model\Candidates.php:14
2013-10-21 14:39:28 --- CRITICAL: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\Model\Candidates.php [ 14 ] in file:line
2013-10-21 14:39:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 14:39:29 --- CRITICAL: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\Model\Candidates.php [ 14 ] in file:line
2013-10-21 14:39:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 14:41:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function GDN__construct() ~ APPPATH\classes\Controller\Web\Home.php [ 8 ] in file:line
2013-10-21 14:41:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 14:42:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ APPPATH\classes\Model\Candidates.php [ 15 ] in file:line
2013-10-21 14:42:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 14:43:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM) ~ APPPATH\classes\Model\Candidates.php [ 14 ] in file:line
2013-10-21 14:43:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 14:47:49 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\polysimplicity\alt\modules\database\classes\Kohana\Database\MySQL.php:171
2013-10-21 14:47:49 --- DEBUG: #0 C:\wamp\www\polysimplicity\alt\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\polysimplicity\alt\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `first_n...', false, Array)
#2 C:\wamp\www\polysimplicity\alt\application\classes\Model\Candidates.php(14): Kohana_Database_Query->execute()
#3 C:\wamp\www\polysimplicity\alt\application\classes\Controller\Web\Home.php(10): Model_Candidates->get_all_candidates()
#4 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\alt\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\alt\modules\database\classes\Kohana\Database\MySQL.php:171
2013-10-21 14:49:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all_candidates() on a non-object ~ APPPATH\views\controllers\web\home\index.php [ 4 ] in file:line
2013-10-21 14:49:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 14:49:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all_candidates() on a non-object ~ APPPATH\views\controllers\web\home\index.php [ 4 ] in file:line
2013-10-21 14:49:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line