<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-25 12:07:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Candidates.php [ 9 ] in file:line
2013-10-25 12:07:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 15:06:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `candidates`.`id` AS `id`, `candidates`.`first_name` AS `first_name`, `candidates`.`middle_name` AS `middle_name`, `candidates`.`last_name` AS `last_name`, `candidates`.`personal_id` AS `personal_id`, `candidates`.`position_runningFor_id` AS `position_runningFor_id`, `candidates`.`views_id` AS `views_id`, `candidates`.`positions_id` AS `positions_id` FROM `candidates` AS `candidates` WHERE `name` LIKE 'd%' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\alt\modules\database\classes\Kohana\Database\Query.php:251
2013-10-25 15:06:30 --- DEBUG: #0 C:\wamp\www\polysimplicity\alt\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `candida...', 'Model_Candidate...', Array)
#1 C:\wamp\www\polysimplicity\alt\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\alt\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\alt\application\classes\Controller\Web\Home.php(9): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\alt\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\alt\modules\database\classes\Kohana\Database\Query.php:251
2013-10-25 15:06:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: person ~ APPPATH\views\controllers\web\home\index.php [ 2 ] in C:\wamp\www\polysimplicity\alt\application\views\controllers\web\home\index.php:2
2013-10-25 15:06:53 --- DEBUG: #0 C:\wamp\www\polysimplicity\alt\application\views\controllers\web\home\index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 2, Array)
#1 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\alt\application\views\containers\default.php(28): Kohana_View->__toString()
#5 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#6 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#7 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\polysimplicity\alt\application\classes\Controller\Web\Containers\Default.php(93): Kohana_Controller_Template->after()
#9 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Controller.php(87): Controller_Web_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#12 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\polysimplicity\alt\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\polysimplicity\alt\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\polysimplicity\alt\application\views\controllers\web\home\index.php:2