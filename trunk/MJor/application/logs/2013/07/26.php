<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-26 00:30:18 --- CRITICAL: View_Exception [ 0 ]: The requested view partes could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\MJor\system\classes\Kohana\View.php:137
2013-07-26 00:30:18 --- DEBUG: #0 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(137): Kohana_View->set_filename('partes')
#1 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(30): Kohana_View->__construct('partes', NULL)
#2 C:\xampp\htdocs\MJor\application\classes\Controller\partes.php(7): Kohana_View::factory('partes')
#3 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Partes->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Partes))
#6 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MJor\system\classes\Kohana\View.php:137