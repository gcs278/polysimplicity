<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-20 14:38:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function values() on a non-object ~ APPPATH\classes\Controller\Web\Management.php [ 283 ] in file:line
2013-11-20 14:38:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-20 14:38:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: candidates ~ APPPATH\classes\Controller\Web\Management.php [ 298 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:298
2013-11-20 14:38:23 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(298): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 298, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:298
2013-11-20 14:38:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function check() on a non-object ~ APPPATH\classes\Controller\Web\Management.php [ 283 ] in file:line
2013-11-20 14:38:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-20 14:41:53 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Web\Management.php [ 309 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:309
2013-11-20 14:41:53 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(309): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\wamp\www\pol...', 309, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php:309
2013-11-20 14:48:48 --- CRITICAL: View_Exception [ 0 ]: The requested view controllers/web/management/modify/1 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2013-11-20 14:48:48 --- DEBUG: #0 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(137): Kohana_View->set_filename('controllers/web...')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(30): Kohana_View->__construct('controllers/web...', NULL)
#2 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(313): Kohana_View::factory('controllers/web...')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\polysimplicity\system\classes\Kohana\View.php:137
2013-11-20 14:52:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Message' not found ~ APPPATH\classes\Controller\Web\Management.php [ 321 ] in file:line
2013-11-20 14:52:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-20 14:57:31 --- CRITICAL: ErrorException [ 2 ]: mysql_query(): MySQL server has gone away ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in file:line
2013-11-20 14:57:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_query(): ...', 'C:\wamp\www\pol...', 186, Array)
#1 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(186): mysql_query('UPDATE `candida...', Resource id #88)
#2 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `candida...', false, Array)
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#4 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(303): Kohana_ORM->update()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-11-20 14:57:53 --- CRITICAL: ErrorException [ 2 ]: mysql_query(): MySQL server has gone away ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in file:line
2013-11-20 14:57:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_query(): ...', 'C:\wamp\www\pol...', 186, Array)
#1 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(186): mysql_query('UPDATE `candida...', Resource id #88)
#2 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `candida...', false, Array)
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#4 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(303): Kohana_ORM->update()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-11-20 14:59:42 --- CRITICAL: ErrorException [ 2 ]: mysql_query(): MySQL server has gone away ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in file:line
2013-11-20 14:59:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_query(): ...', 'C:\wamp\www\pol...', 186, Array)
#1 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(186): mysql_query('UPDATE `candida...', Resource id #88)
#2 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `candida...', false, Array)
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#4 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(303): Kohana_ORM->update()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-11-20 15:00:26 --- CRITICAL: ErrorException [ 2 ]: mysql_query(): MySQL server has gone away ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in file:line
2013-11-20 15:00:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_query(): ...', 'C:\wamp\www\pol...', 186, Array)
#1 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(186): mysql_query('INSERT INTO `ca...', Resource id #88)
#2 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ca...', false, Array)
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#4 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#5 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(104): Kohana_ORM->save()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_form()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-11-20 15:05:45 --- CRITICAL: ErrorException [ 2 ]: mysql_query(): MySQL server has gone away ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in file:line
2013-11-20 15:05:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_query(): ...', 'C:\wamp\www\pol...', 186, Array)
#1 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\MySQL.php(186): mysql_query('UPDATE `candida...', Resource id #88)
#2 C:\wamp\www\polysimplicity\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `candida...', false, Array)
#3 C:\wamp\www\polysimplicity\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#4 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Management.php(303): Kohana_ORM->update()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Management->action_modify()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-11-20 15:24:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sideSelect ~ APPPATH\views\containers\admin.php [ 63 ] in C:\wamp\www\polysimplicity\application\views\containers\admin.php:63
2013-11-20 15:24:56 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\containers\admin.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 63, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\classes\Controller\Admin\Containers\Default.php(93): Kohana_Controller_Template->after()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Admin_Containers_Default->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\polysimplicity\application\views\containers\admin.php:63
2013-11-20 15:25:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sideSelect ~ APPPATH\views\containers\admin.php [ 66 ] in C:\wamp\www\polysimplicity\application\views\containers\admin.php:66
2013-11-20 15:25:45 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\containers\admin.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 66, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\classes\Controller\Admin\Containers\Default.php(93): Kohana_Controller_Template->after()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Admin_Containers_Default->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\polysimplicity\application\views\containers\admin.php:66