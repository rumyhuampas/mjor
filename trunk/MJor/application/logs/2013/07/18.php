<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-18 19:02:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menuid ~ APPPATH\views\_primarymenu.php [ 4 ] in C:\xampp\htdocs\MJor\application\views\_primarymenu.php:4
2013-07-18 19:02:35 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\views\_primarymenu.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\MJor\application\views\fincas.php(8): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MJor\application\classes\Controller\fincas.php(12): Kohana_View->render()
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Fincas->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fincas))
#8 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MJor\application\views\_primarymenu.php:4
2013-07-18 19:50:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_finca' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-07-18 19:50:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :