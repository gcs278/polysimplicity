<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-21 00:06:38 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`politicalsimplicity_candidates`.`personal_information`, CONSTRAINT `fk_personal_information_candidates1` FOREIGN KEY (`candidates_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UP) [ DELETE FROM `candidates` WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-21 00:06:38 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `ca...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1442): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(373): Kohana_ORM->delete()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-21 00:08:23 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`politicalsimplicity_candidates`.`personal_information`, CONSTRAINT `fk_personal_information_candidates1` FOREIGN KEY (`candidates_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UP) [ DELETE FROM `candidates` WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-21 00:08:23 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `ca...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1442): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(373): Kohana_ORM->delete()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-21 00:09:53 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete personal model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:374
2013-11-21 00:09:53 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(374): Kohana_ORM->delete()
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:374
2013-11-21 00:11:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'isset' (T_ISSET), expecting '(' ~ APPPATH\views\controllers\web\management\index.php [ 26 ] in file:line
2013-11-21 00:11:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-21 00:13:22 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete personal model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:374
2013-11-21 00:13:22 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(374): Kohana_ORM->delete()
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:374
2013-11-21 00:14:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\controllers\web\management\index.php [ 3 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php:3
2013-11-21 00:14:00 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 3, Array)
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
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php:3
2013-11-21 00:14:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\views\controllers\web\management\index.php [ 19 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php:19
2013-11-21 00:14:39 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 19, Array)
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
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php:19
2013-11-21 00:15:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\views\controllers\web\management\index.php [ 19 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php:19
2013-11-21 00:15:00 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 19, Array)
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
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php:19
2013-11-21 00:15:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\views\controllers\web\management\index.php [ 19 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php:19
2013-11-21 00:15:01 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 19, Array)
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
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\index.php:19
2013-11-21 00:16:50 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`politicalsimplicity_candidates`.`positions`, CONSTRAINT `fk_positions_candidates1` FOREIGN KEY (`candidates_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ DELETE FROM `candidates` WHERE `id` = '4' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-21 00:16:50 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `ca...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1442): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(376): Kohana_ORM->delete()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-21 00:17:54 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete personal model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:375
2013-11-21 00:17:54 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(375): Kohana_ORM->delete()
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:375
2013-11-21 20:55:35 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete personal model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:376
2013-11-21 20:55:35 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(376): Kohana_ORM->delete()
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:376
2013-11-21 21:07:55 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant all - assumed 'all' ~ APPPATH\classes\Controller\Web\Management.php [ 373 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:373
2013-11-21 21:07:55 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(373): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\pol...', 373, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:373
2013-11-21 21:08:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Web\Management.php [ 374 ] in file:line
2013-11-21 21:08:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-21 21:11:10 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete personal model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:377
2013-11-21 21:11:10 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(377): Kohana_ORM->delete()
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:377
2013-11-21 21:17:27 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update personal model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:310
2013-11-21 21:17:27 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(310): Kohana_ORM->update()
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:310
2013-11-21 21:18:13 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update personal model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:310
2013-11-21 21:18:13 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(310): Kohana_ORM->update()
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:310
2013-11-21 21:25:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\views\controllers\web\management\delete.php [ 19 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\delete.php:19
2013-11-21 21:25:54 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\delete.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 19, Array)
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
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\delete.php:19
2013-11-21 23:08:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$views' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Web\Management.php [ 7 ] in file:line
2013-11-21 23:08:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-21 23:16:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\views\controllers\web\management\form.php [ 177 ] in file:line
2013-11-21 23:16:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-21 23:16:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\controllers\web\management\form.php [ 178 ] in file:line
2013-11-21 23:16:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-21 23:21:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'increase' (T_STRING), expecting ',' or ';' ~ APPPATH\views\controllers\web\management\form.php [ 188 ] in file:line
2013-11-21 23:21:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-21 23:36:52 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\controllers\web\management\form.php [ 189 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php:189
2013-11-21 23:36:52 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php(189): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\pol...', 189, Array)
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
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php:189
2013-11-21 23:38:54 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\controllers\web\management\form.php [ 203 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php:203
2013-11-21 23:38:54 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php(203): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\pol...', 203, Array)
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
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\management\form.php:203