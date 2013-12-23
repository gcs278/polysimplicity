<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-23 00:05:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: views_tabbed_display ~ APPPATH/views/controllers/web/management/form.php [ 232 ] in /home/polysciadmin/politicalsimplicity.com/public/application/views/controllers/web/management/form.php:232
2013-12-23 00:05:34 --- DEBUG: #0 /home/polysciadmin/politicalsimplicity.com/public/application/views/controllers/web/management/form.php(232): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/polysciad...', 232, Array)
#1 /home/polysciadmin/politicalsimplicity.com/public/system/classes/Kohana/View.php(61): include('/home/polysciad...')
#2 /home/polysciadmin/politicalsimplicity.com/public/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/polysciad...', Array)
#3 /home/polysciadmin/politicalsimplicity.com/public/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/polysciadmin/politicalsimplicity.com/public/application/views/containers/admin.php(109): Kohana_View->__toString()
#5 /home/polysciadmin/politicalsimplicity.com/public/system/classes/Kohana/View.php(61): include('/home/polysciad...')
#6 /home/polysciadmin/politicalsimplicity.com/public/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/polysciad...', Array)
#7 /home/polysciadmin/politicalsimplicity.com/public/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/polysciadmin/politicalsimplicity.com/public/application/classes/Controller/Admin/Containers/Default.php(94): Kohana_Controller_Template->after()
#9 /home/polysciadmin/politicalsimplicity.com/public/system/classes/Kohana/Controller.php(87): Controller_Admin_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/polysciadmin/politicalsimplicity.com/public/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Management))
#12 /home/polysciadmin/politicalsimplicity.com/public/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/polysciadmin/politicalsimplicity.com/public/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/polysciadmin/politicalsimplicity.com/public/index.php(118): Kohana_Request->execute()
#15 {main} in /home/polysciadmin/politicalsimplicity.com/public/application/views/controllers/web/management/form.php:232