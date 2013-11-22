<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-22 00:10:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'class' (T_CLASS), expecting ',' or ';' ~ APPPATH\views\controllers\web\management\form.php [ 207 ] in file:line
2013-11-22 00:10:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 11:11:12 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:171
2013-11-22 11:11:12 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
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
2013-11-22 13:33:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_View_Type' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-22 13:33:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 13:33:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Views_Type' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-22 13:33:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 13:35:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Views_Type' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-22 13:35:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 13:38:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Views_Type' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-22 13:38:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 13:38:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Views_Type' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-22 13:38:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 13:39:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Views_Type' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-22 13:39:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 13:40:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Views_Type' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-22 13:40:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 13:42:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Viewsd' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-22 13:42:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 13:43:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Views_Type' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-22 13:43:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 13:45:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_views_type' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-22 13:45:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 13:46:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_views_type' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-22 13:46:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 13:46:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_views_type' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-22 13:46:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 13:47:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_views_type' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-22 13:47:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 13:49:33 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_viewsType as array ~ APPPATH\classes\Controller\Web\Management.php [ 66 ] in file:line
2013-11-22 13:49:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 13:56:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::has() ~ APPPATH\classes\Controller\Web\Management.php [ 106 ] in file:line
2013-11-22 13:56:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 14:01:30 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`politicalsimplicity_candidates`.`edits`, CONSTRAINT `fk_edits_candidates1` FOREIGN KEY (`candidates_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ DELETE FROM `candidates` WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-22 14:01:30 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `ca...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1442): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(410): Kohana_ORM->delete()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-22 14:02:23 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete edits model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:396
2013-11-22 14:02:23 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(396): Kohana_ORM->delete()
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:396
2013-11-22 14:05:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Edits::delete_all() ~ APPPATH\classes\Controller\Web\Management.php [ 394 ] in file:line
2013-11-22 14:05:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 14:06:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete_all() ~ APPPATH\classes\Controller\Web\Management.php [ 394 ] in file:line
2013-11-22 14:06:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 14:08:19 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete edits model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:396
2013-11-22 14:08:19 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(396): Kohana_ORM->delete()
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:396
2013-11-22 14:09:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Web\Management.php [ 395 ] in file:line
2013-11-22 14:09:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 14:12:47 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete edits model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:397
2013-11-22 14:12:47 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(397): Kohana_ORM->delete()
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:397
2013-11-22 14:15:15 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`politicalsimplicity_candidates`.`edits`, CONSTRAINT `fk_edits_candidates1` FOREIGN KEY (`candidates_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ DELETE FROM `candidates` WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-22 14:15:15 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `ca...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1442): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(411): Kohana_ORM->delete()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-22 14:16:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH\classes\Controller\Web\Management.php [ 397 ] in file:line
2013-11-22 14:16:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 14:18:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH\classes\Controller\Web\Management.php [ 397 ] in file:line
2013-11-22 14:18:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 14:19:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::Debug() ~ APPPATH\classes\Controller\Web\Management.php [ 397 ] in file:line
2013-11-22 14:19:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-22 14:20:05 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`politicalsimplicity_candidates`.`edits`, CONSTRAINT `fk_edits_candidates1` FOREIGN KEY (`candidates_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ DELETE FROM `candidates` WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-22 14:20:05 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `ca...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1442): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(411): Kohana_ORM->delete()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-22 14:21:25 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Edits class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-22 14:21:25 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(397): Kohana_ORM->__get('name')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-22 14:21:50 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`politicalsimplicity_candidates`.`edits`, CONSTRAINT `fk_edits_candidates1` FOREIGN KEY (`candidates_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ DELETE FROM `candidates` WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-22 14:21:50 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `ca...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1442): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(411): Kohana_ORM->delete()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-22 14:22:23 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete edits model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:398
2013-11-22 14:22:23 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(398): Kohana_ORM->delete()
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:398
2013-11-22 14:23:50 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`politicalsimplicity_candidates`.`edits`, CONSTRAINT `fk_edits_candidates1` FOREIGN KEY (`candidates_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ DELETE FROM `candidates` WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-22 14:23:50 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `ca...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1442): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(413): Kohana_ORM->delete()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251