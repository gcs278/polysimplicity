<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-16 21:49:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: candidate_taxation ~ APPPATH\views\controllers\web\home\candidate.php [ 26 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\home\candidate.php:26
2013-12-16 21:49:40 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\home\candidate.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 26, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\views\containers\default.php(146): Kohana_View->__toString()
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
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\home\candidate.php:26
2013-12-16 21:50:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: candidate_taxationDescrip ~ APPPATH\views\controllers\web\home\candidate.php [ 27 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\home\candidate.php:27
2013-12-16 21:50:02 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\home\candidate.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 27, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\views\containers\default.php(146): Kohana_View->__toString()
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
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\home\candidate.php:27
2013-12-16 21:50:35 --- CRITICAL: Kohana_Exception [ 0 ]: The viewsType property does not exist in the Model_Views class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 21:50:35 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('viewsType')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(102): Kohana_ORM->__get('viewsType')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 21:51:18 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType.views_type_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`views`.`id` = `viewsType`.`views_type_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 21:51:18 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 21:51:45 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType.views_type_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`views`.`id` = `viewsType`.`views_type_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 21:51:45 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 21:54:51 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType.fk_view_views_type1' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`views`.`id` = `viewsType`.`fk_view_views_type1`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 21:54:51 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 21:55:04 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType.views_type_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`views`.`id` = `viewsType`.`views_type_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 21:55:04 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 21:55:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType.views_type_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`views`.`id` = `viewsType`.`views_type_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 21:55:30 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 21:56:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_views_type' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-12-16 21:56:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 21:57:13 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType.views_type_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`views`.`id` = `viewsType`.`views_type_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 21:57:13 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:03:28 --- CRITICAL: Kohana_Exception [ 0 ]: The viewsType property does not exist in the Model_Views class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:03:28 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('viewsType')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(102): Kohana_ORM->__get('viewsType')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:05:42 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'views.viewsType_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`candidates_id` AS `candidates_id`, `views`.`views_type_id` AS `views_type_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`viewsType`.`id` = `views`.`viewsType_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:05:42 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:07:06 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'views.viewsType_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`candidates_id` AS `candidates_id`, `views`.`views_type_id` AS `views_type_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`viewsType`.`id` = `views`.`viewsType_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:07:06 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:07:26 --- CRITICAL: Kohana_Exception [ 0 ]: The viewsType property does not exist in the Model_Views class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:07:26 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('viewsType')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(102): Kohana_ORM->__get('viewsType')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:07:37 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'views.viewsType_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`candidates_id` AS `candidates_id`, `views`.`views_type_id` AS `views_type_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`viewsType`.`id` = `views`.`viewsType_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:07:37 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:07:50 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'views.viewsType_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`candidates_id` AS `candidates_id`, `views`.`views_type_id` AS `views_type_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`viewsType`.`id` = `views`.`viewsType_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:07:50 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:10:45 --- CRITICAL: Kohana_Exception [ 0 ]: The views property does not exist in the Model_Views class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:10:45 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('views')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(104): Kohana_ORM->__get('views')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:11:31 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType.views_type_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`views`.`id` = `viewsType`.`views_type_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:11:31 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:11:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Views.php [ 9 ] in file:line
2013-12-16 22:11:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 22:12:03 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType.views_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`views`.`id` = `viewsType`.`views_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:12:03 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:13:34 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType.views.views_type_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`views`.`id` = `viewsType`.`views`.`views_type_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:13:34 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:13:43 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType.views_type_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`views`.`id` = `viewsType`.`views_type_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:13:43 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:14:00 --- CRITICAL: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH\orm\classes\Kohana\ORM.php [ 358 ] in file:line
2013-12-16 22:14:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', 'C:\wamp\www\pol...', 358, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(358): array_merge(Array, 'viewsType')
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#4 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM::factory('Views')
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-12-16 22:14:37 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType.views_type_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`views`.`id` = `viewsType`.`views_type_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:14:37 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:15:20 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType.views_type_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`views`.`id` = `viewsType`.`views_type_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:15:20 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:16:09 --- CRITICAL: Kohana_Exception [ 0 ]: The viewsType property does not exist in the Model_Views class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:16:09 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('viewsType')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(102): Kohana_ORM->__get('viewsType')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:16:47 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'views.viewsType_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`viewsType`.`id` = `views`.`viewsType_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:16:47 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:18:34 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'views.viewsType_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`viewsType`.`id` = `views`.`viewsType_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:18:34 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:23:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType.views_type_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`views_type_id` AS `views_type_id`, `views`.`candidates_id` AS `candidates_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`views`.`id` = `viewsType`.`views_type_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:23:30 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:29:34 --- CRITICAL: Kohana_Exception [ 0 ]: The viewsType property does not exist in the Model_Views class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:29:34 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('viewsType')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(102): Kohana_ORM->__get('viewsType')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:30:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Model\viewsType.php [ 8 ] in file:line
2013-12-16 22:30:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 22:30:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'views.viewsType_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`candidates_id` AS `candidates_id`, `views`.`views_type_id` AS `views_type_id` FROM `views` AS `views` LEFT JOIN `views_type` AS `viewsType` ON (`viewsType`.`id` = `views`.`viewsType_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:30:25 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:32:40 --- CRITICAL: Database_Exception [ 1146 ]: Table 'politicalsimplicity_candidates.viewstypes' doesn't exist [ SHOW FULL COLUMNS FROM `viewstypes` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-16 22:32:40 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('viewstypes')
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1689): Kohana_ORM::factory('ViewsType')
#7 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(858): Kohana_ORM->_related('viewsType')
#8 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->with('viewsType')
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-16 22:33:07 --- CRITICAL: Database_Exception [ 1146 ]: Table 'politicalsimplicity_candidates.viewstypes' doesn't exist [ SHOW FULL COLUMNS FROM `viewstypes` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-16 22:33:07 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('viewstypes')
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1689): Kohana_ORM::factory('ViewsType')
#7 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(858): Kohana_ORM->_related('viewsType')
#8 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->with('viewsType')
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-16 22:33:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\viewsType.php [ 5 ] in file:line
2013-12-16 22:33:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 22:33:35 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'views.viewsType_id' in 'on clause' [ SELECT `viewsType`.`id` AS `viewsType:id`, `viewsType`.`name` AS `viewsType:name`, `views`.`id` AS `id`, `views`.`simple` AS `simple`, `views`.`detail` AS `detail`, `views`.`links` AS `links`, `views`.`candidates_id` AS `candidates_id`, `views`.`views_type_id` AS `views_type_id` FROM `views` AS `views` LEFT JOIN `viewsType` AS `viewsType` ON (`viewsType`.`id` = `views`.`viewsType_id`) WHERE `views`.`candidates_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:33:35 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsTy...', 'Model_Views', Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(97): Kohana_ORM->find_all()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:34:12 --- CRITICAL: Kohana_Exception [ 0 ]: The views property does not exist in the Model_Views class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:34:12 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('views')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(104): Kohana_ORM->__get('views')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:39:47 --- CRITICAL: Kohana_Exception [ 0 ]: The viewsType property does not exist in the Model_Views class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:39:47 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('viewsType')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(104): Kohana_ORM->__get('viewsType')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:39:55 --- CRITICAL: Kohana_Exception [ 0 ]: The viewsType property does not exist in the Model_Views class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:39:55 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('viewsType')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(104): Kohana_ORM->__get('viewsType')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:40:20 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Views class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:40:20 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(104): Kohana_ORM->__get('name')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 22:40:35 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'views.viewsType_id' in 'where clause' [ SELECT `viewstype`.`id` AS `id`, `viewstype`.`name` AS `name` FROM `viewsType` AS `viewstype` WHERE `views`.`viewsType_id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:40:35 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsty...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(102): Kohana_ORM->find(0)
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:40:45 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType_id' in 'where clause' [ SELECT `viewstype`.`id` AS `id`, `viewstype`.`name` AS `name` FROM `viewsType` AS `viewstype` WHERE `viewsType_id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:40:45 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsty...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(102): Kohana_ORM->find(0)
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:40:49 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'viewsType_id' in 'where clause' [ SELECT `viewstype`.`id` AS `id`, `viewstype`.`name` AS `name` FROM `viewsType` AS `viewstype` WHERE `viewsType_id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:40:49 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `viewsty...', false, Array)
#1 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(102): Kohana_ORM->find(0)
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php:251
2013-12-16 22:43:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: views_display ~ APPPATH\views\controllers\web\home\candidate.php [ 23 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\home\candidate.php:23
2013-12-16 22:43:13 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\home\candidate.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 23, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\views\containers\default.php(146): Kohana_View->__toString()
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
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\home\candidate.php:23
2013-12-16 22:44:47 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Controller\Web\Home.php [ 105 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:105
2013-12-16 22:44:47 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(105): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\pol...', 105, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:105
2013-12-16 22:45:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::toString() ~ APPPATH\classes\Controller\Web\Home.php [ 99 ] in file:line
2013-12-16 22:45:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 22:45:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: views_display ~ APPPATH\classes\Controller\Web\Home.php [ 104 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:104
2013-12-16 22:45:10 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(104): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 104, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:104
2013-12-16 23:03:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Web\Home.php [ 105 ] in file:line
2013-12-16 23:03:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 23:03:36 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Web_Home::$view_type ~ APPPATH\classes\Controller\Web\Home.php [ 104 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:104
2013-12-16 23:03:36 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(104): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\pol...', 104, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:104
2013-12-16 23:19:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::deubg() ~ APPPATH\classes\Controller\Web\Home.php [ 100 ] in file:line
2013-12-16 23:19:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 23:19:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH\classes\Controller\Web\Home.php [ 100 ] in file:line
2013-12-16 23:19:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 23:20:45 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Web_Home::$candidate_views ~ APPPATH\classes\Controller\Web\Home.php [ 100 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:100
2013-12-16 23:20:45 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(100): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\pol...', 100, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:100
2013-12-16 23:34:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function convert_state() ~ APPPATH\classes\Controller\Web\Home.php [ 94 ] in file:line
2013-12-16 23:34:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 23:48:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\Web\Home.php [ 90 ] in file:line
2013-12-16 23:48:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 23:48:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: candidate ~ APPPATH\classes\Controller\Web\Home.php [ 89 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:89
2013-12-16 23:48:48 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 89, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:89
2013-12-16 23:49:18 --- CRITICAL: Kohana_Exception [ 0 ]: The count property does not exist in the Model_Candidates class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 23:49:18 --- DEBUG: #0 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('count')
#1 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(89): Kohana_ORM->__get('count')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_candidate()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php:603
2013-12-16 23:49:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\Web\Home.php [ 89 ] in file:line
2013-12-16 23:49:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line