<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-17 00:13:04 --- CRITICAL: Database_Exception [ 1146 ]: Table 'politicalsimplicity_candidates.viewstype' doesn't exist [ SHOW FULL COLUMNS FROM `viewsType` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-17 00:13:04 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('viewsType')
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(99): Kohana_ORM::factory('viewsType')
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#10 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-17 00:13:21 --- CRITICAL: Database_Exception [ 1146 ]: Table 'politicalsimplicity_candidates.views_type' doesn't exist [ SHOW FULL COLUMNS FROM `views_type` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-17 00:13:21 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('views_type')
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(99): Kohana_ORM::factory('viewsType')
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#10 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-17 00:14:05 --- CRITICAL: Database_Exception [ 1146 ]: Table 'politicalsimplicity_candidates.views_type' doesn't exist [ SHOW FULL COLUMNS FROM `views_type` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-17 00:14:05 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('views_type')
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(99): Kohana_ORM::factory('viewsType')
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#10 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-17 00:14:09 --- CRITICAL: Database_Exception [ 1146 ]: Table 'politicalsimplicity_candidates.views_type' doesn't exist [ SHOW FULL COLUMNS FROM `views_type` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-17 00:14:09 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('views_type')
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(99): Kohana_ORM::factory('viewsType')
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#10 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-17 19:27:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\classes\Controller\Web\Home.php [ 104 ] in file:line
2013-12-17 19:27:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 19:27:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\classes\Controller\Web\Home.php [ 104 ] in file:line
2013-12-17 19:27:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 19:27:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Web\Home.php [ 111 ] in file:line
2013-12-17 19:27:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 21:26:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\classes\Controller\Web\Management.php [ 486 ] in file:line
2013-12-17 21:26:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 21:27:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '==' (T_IS_EQUAL), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Web\Management.php [ 211 ] in file:line
2013-12-17 21:27:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 21:28:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: views_tabbed_display ~ APPPATH\views\controllers\web\management\form.php [ 171 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php:171
2013-12-17 21:28:47 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php(171): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 171, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\views\containers\admin.php(109): Kohana_View->__toString()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\polysimplicity\application\classes\Controller\Admin\Containers\Default.php(93): Kohana_Controller_Template->after()
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Admin_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php:171
2013-12-17 21:40:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: views_tabbed_display ~ APPPATH\views\controllers\web\management\form.php [ 171 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php:171
2013-12-17 21:40:41 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php(171): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 171, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\views\containers\admin.php(109): Kohana_View->__toString()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\polysimplicity\application\classes\Controller\Admin\Containers\Default.php(93): Kohana_Controller_Template->after()
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Admin_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php:171
2013-12-17 21:56:27 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH\classes\Controller\Web\Management.php [ 176 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:176
2013-12-17 21:56:27 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(176): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\wamp\www\pol...', 176, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_form()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:176
2013-12-17 21:57:39 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`politicalsimplicity_candidates`.`views`, CONSTRAINT `fk_views_candidates1` FOREIGN KEY (`candidates_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `views` (`simple`, `detail`) VALUES ('Increase', 'asdfasdf') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-17 21:57:39 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `vi...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(181): Kohana_ORM->save()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_form()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-17 22:01:34 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Web_Management::$create_tabbed_views ~ APPPATH\classes\Controller\Web\Management.php [ 448 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:448
2013-12-17 22:01:34 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(448): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\pol...', 448, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:448