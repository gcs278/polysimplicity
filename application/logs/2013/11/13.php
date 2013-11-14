<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-13 00:01:08 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 00:01:08 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(209): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 00:06:21 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 00:06:21 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(209): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 14:50:31 --- CRITICAL: Kohana_Exception [ 0 ]: The Edits property does not exist in the Model_Candidates class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-13 14:50:31 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Edits')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(41): Kohana_ORM->__get('Edits')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-13 14:54:52 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Edits class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-13 14:54:52 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('id')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(41): Kohana_ORM->__get('id')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-13 14:57:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_related_Edits() ~ APPPATH\classes\Controller\Web\Management.php [ 29 ] in file:line
2013-11-13 14:57:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 15:02:23 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'candidate_id' in 'where clause' [ SELECT `edits`.`idedits` AS `idedits`, `edits`.`candidates_id` AS `candidates_id`, `edits`.`users_id` AS `users_id`, `edits`.`timestamp` AS `timestamp` FROM `Edits` AS `edits` WHERE `candidate_id` = '1' ORDER BY `timestamp` ASC LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 15:02:23 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `edits`....', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(41): Kohana_ORM->find(0)
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 15:07:03 --- CRITICAL: Kohana_Exception [ 0 ]: The user_id property does not exist in the Model_Edits class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-13 15:07:03 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('user_id')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(44): Kohana_ORM->__get('user_id')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-13 15:08:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Users_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:08:57 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 633, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Users')
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(44): Kohana_ORM->__get('Users')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:13:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Users_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:13:05 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 633, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Users')
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(44): Kohana_ORM->__get('Users')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:18:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Users_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:18:41 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 633, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Users')
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(44): Kohana_ORM->__get('Users')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:23:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Users_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:23:17 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 633, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Users')
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(44): Kohana_ORM->__get('Users')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:23:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Users_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:23:47 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 633, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Users')
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(44): Kohana_ORM->__get('Users')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:23:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Users_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:23:52 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 633, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Users')
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(44): Kohana_ORM->__get('Users')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:24:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Users_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:24:41 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 633, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Users')
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(44): Kohana_ORM->__get('Users')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:24:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Users_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:24:42 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 633, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Users')
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(44): Kohana_ORM->__get('Users')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:24:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Users_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:24:45 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 633, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Users')
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(44): Kohana_ORM->__get('Users')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:25:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Users_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:25:26 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 633, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Users')
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(44): Kohana_ORM->__get('Users')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:27:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Users_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:27:44 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 633, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Users')
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(44): Kohana_ORM->__get('Users')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:633
2013-11-13 15:30:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\classes\Controller\Web\Management.php [ 45 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:45
2013-11-13 15:30:28 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 45, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:45
2013-11-13 16:24:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Web\Management.php [ 265 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:265
2013-11-13 16:24:28 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(265): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 265, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:265
2013-11-13 16:24:44 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$first_name ~ APPPATH\classes\Controller\Web\Management.php [ 280 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:280
2013-11-13 16:24:44 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(280): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\pol...', 280, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:280
2013-11-13 16:27:06 --- CRITICAL: Kohana_Exception [ 0 ]: The party property does not exist in the Model_Candidates class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-13 16:27:06 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('party')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(285): Kohana_ORM->__get('party')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-11-13 16:44:46 --- CRITICAL: Database_Exception [ 1052 ]: Column 'id' in where clause is ambiguous [ SELECT `Personal`.`id` AS `Personal:id`, `Personal`.`gender` AS `Personal:gender`, `Personal`.`birth_date` AS `Personal:birth_date`, `Personal`.`birth_state` AS `Personal:birth_state`, `Personal`.`party` AS `Personal:party`, `Personal`.`candidates_id` AS `Personal:candidates_id`, `candidates`.`id` AS `id`, `candidates`.`first_name` AS `first_name`, `candidates`.`middle_name` AS `middle_name`, `candidates`.`last_name` AS `last_name`, `candidates`.`image` AS `image` FROM `candidates` AS `candidates` LEFT JOIN `personal_information` AS `Personal` ON (`candidates`.`id` = `Personal`.`candidates_id`) WHERE `id` IS NULL LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 16:44:46 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Persona...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(282): Kohana_ORM->find(0)
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 16:44:50 --- CRITICAL: Database_Exception [ 1052 ]: Column 'id' in where clause is ambiguous [ SELECT `Personal`.`id` AS `Personal:id`, `Personal`.`gender` AS `Personal:gender`, `Personal`.`birth_date` AS `Personal:birth_date`, `Personal`.`birth_state` AS `Personal:birth_state`, `Personal`.`party` AS `Personal:party`, `Personal`.`candidates_id` AS `Personal:candidates_id`, `candidates`.`id` AS `id`, `candidates`.`first_name` AS `first_name`, `candidates`.`middle_name` AS `middle_name`, `candidates`.`last_name` AS `last_name`, `candidates`.`image` AS `image` FROM `candidates` AS `candidates` LEFT JOIN `personal_information` AS `Personal` ON (`candidates`.`id` = `Personal`.`candidates_id`) WHERE `id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 16:44:50 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Persona...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(282): Kohana_ORM->find(0)
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-13 22:45:03 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:171
2013-11-13 22:45:03 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(12): Kohana_ORM::factory('Users')
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:171
2013-11-13 22:59:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\views\controllers\web\management\form.php [ 49 ] in file:line
2013-11-13 22:59:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 23:00:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\views\controllers\web\management\form.php [ 49 ] in file:line
2013-11-13 23:00:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line