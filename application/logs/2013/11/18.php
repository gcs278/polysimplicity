<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-18 22:34:00 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:171
2013-11-18 22:34:00 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
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
2013-11-18 22:42:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Web_Containers_Admin' not found ~ APPPATH\classes\Controller\Web\Management.php [ 5 ] in file:line
2013-11-18 22:42:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-18 22:42:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Web_Containers_admin' not found ~ APPPATH\classes\Controller\Web\Management.php [ 5 ] in file:line
2013-11-18 22:42:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-18 23:00:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Web\Home.php [ 93 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:93
2013-11-18 23:00:23 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 93, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:93
2013-11-18 23:02:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: first_name ~ APPPATH\views\controllers\web\home\candidate.php [ 2 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\home\candidate.php:2
2013-11-18 23:02:02 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\home\candidate.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 2, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\views\containers\default.php(122): Kohana_View->__toString()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php(97): Kohana_Controller_Template->after()
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Web_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\home\candidate.php:2