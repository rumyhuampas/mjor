<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-11 00:10:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_tarifaesp' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-08-11 00:10:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-11 02:20:27 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, string given, called in C:\xampp\htdocs\MJor\application\views\partes.php on line 141 and defined ~ SYSPATH\classes\Kohana\Form.php [ 252 ] in C:\xampp\htdocs\MJor\system\classes\Kohana\Form.php:252
2013-08-11 02:20:27 --- DEBUG: #0 C:\xampp\htdocs\MJor\system\classes\Kohana\Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 252, Array)
#1 C:\xampp\htdocs\MJor\application\views\partes.php(141): Kohana_Form::select('hora', '', Array)
#2 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MJor\application\classes\Controller\partes.php(42): Kohana_View->render()
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Partes->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Partes))
#8 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MJor\system\classes\Kohana\Form.php:252