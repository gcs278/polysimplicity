<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-14 23:19:11 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Positions.positions_id' in 'on clause' [ SELECT `Personal`.`id` AS `Personal:id`, `Personal`.`gender` AS `Personal:gender`, `Personal`.`birth_date` AS `Personal:birth_date`, `Personal`.`birth_state` AS `Personal:birth_state`, `Personal`.`party` AS `Personal:party`, `Personal`.`candidates_id` AS `Personal:candidates_id`, `Positions`.`id` AS `Positions:id`, `Positions`.`title` AS `Positions:title`, `Positions`.`term_start` AS `Positions:term_start`, `Positions`.`term_end` AS `Positions:term_end`, `Positions`.`status` AS `Positions:status`, `Positions`.`candidates_id` AS `Positions:candidates_id`, `candidates`.`id` AS `id`, `candidates`.`first_name` AS `first_name`, `candidates`.`middle_name` AS `middle_name`, `candidates`.`last_name` AS `last_name`, `candidates`.`image` AS `image` FROM `candidates` AS `candidates` LEFT JOIN `personal_information` AS `Personal` ON (`candidates`.`id` = `Personal`.`candidates_id`) LEFT JOIN `positions` AS `Positions` ON (`candidates`.`id` = `Positions`.`positions_id`) WHERE `candidates`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 23:19:11 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Persona...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(287): Kohana_ORM->find(0)
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 23:21:45 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `Edits` (`candidates_id`, `users_id`) VALUES (3, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 23:21:45 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `Ed...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(115): Kohana_ORM->save()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_form()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-11-14 23:31:02 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH\classes\Controller\Web\Management.php [ 298 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:298
2013-11-14 23:31:02 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(298): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\pol...', 298, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:298