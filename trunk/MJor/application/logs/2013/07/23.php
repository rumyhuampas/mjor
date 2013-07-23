<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-23 19:31:29 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_ORM::loaded() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\fincas.php [ 45 ] in C:\xampp\htdocs\MJor\application\classes\Controller\fincas.php:45
2013-07-23 19:31:29 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\classes\Controller\fincas.php(45): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\xampp\htdocs...', 45, Array)
#1 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Fincas->action_changeactive()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fincas))
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\MJor\application\classes\Controller\fincas.php:45
2013-07-23 20:03:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_campania' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-07-23 20:03:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :