<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-25 17:39:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _tarifas ~ APPPATH\views\empleados.php [ 102 ] in C:\xampp\htdocs\MJor\application\views\empleados.php:102
2013-07-25 17:39:43 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\views\empleados.php(102): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 102, Array)
#1 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php(14): Kohana_View->render()
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Empleados->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Empleados))
#7 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\MJor\application\views\empleados.php:102
2013-07-25 17:59:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: empelado ~ APPPATH\views\empleados.php [ 169 ] in C:\xampp\htdocs\MJor\application\views\empleados.php:169
2013-07-25 17:59:01 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\views\empleados.php(169): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 169, Array)
#1 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php(16): Kohana_View->render()
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Empleados->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Empleados))
#7 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\MJor\application\views\empleados.php:169
2013-07-25 17:59:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: empelado ~ APPPATH\views\empleados.php [ 169 ] in C:\xampp\htdocs\MJor\application\views\empleados.php:169
2013-07-25 17:59:52 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\views\empleados.php(169): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 169, Array)
#1 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php(16): Kohana_View->render()
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Empleados->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Empleados))
#7 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\MJor\application\views\empleados.php:169
2013-07-25 20:46:33 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\empleados.php [ 21 ] in C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php:21
2013-07-25 20:46:33 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php(21): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Empleados->action_getAutoSocios()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Empleados))
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php:21
2013-07-25 20:46:44 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\empleados.php [ 21 ] in C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php:21
2013-07-25 20:46:44 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php(21): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Empleados->action_getAutoSocios()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Empleados))
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php:21
2013-07-25 20:48:59 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Helpers\socio.php [ 54 ] in C:\xampp\htdocs\MJor\application\classes\Helpers\socio.php:54
2013-07-25 20:48:59 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\classes\Helpers\socio.php(54): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 54, Array)
#1 C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php(20): Helpers_Socio::getForAuto()
#2 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Empleados->action_getAutoSocios()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Empleados))
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MJor\application\classes\Helpers\socio.php:54
2013-07-25 20:59:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _tarifas ~ APPPATH\views\empleados.php [ 102 ] in C:\xampp\htdocs\MJor\application\views\empleados.php:102
2013-07-25 20:59:54 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\views\empleados.php(102): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 102, Array)
#1 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php(13): Kohana_View->render()
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Empleados->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Empleados))
#7 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\MJor\application\views\empleados.php:102
2013-07-25 21:03:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: socio ~ APPPATH\classes\Controller\empleados.php [ 43 ] in C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php:43
2013-07-25 21:03:24 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Empleados->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Empleados))
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php:43
2013-07-25 21:04:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: socio ~ APPPATH\classes\Controller\empleados.php [ 43 ] in C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php:43
2013-07-25 21:04:30 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Empleados->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Empleados))
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php:43
2013-07-25 21:04:35 --- CRITICAL: Database_Exception [ 130 ]: Incorrect file format 'C:\xampp\tmp\#sql78c_5f_0' [ SHOW FULL COLUMNS FROM `empleados` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\MJor\modules\database\classes\Kohana\Database\MySQL.php:358
2013-07-25 21:04:35 --- DEBUG: #0 C:\xampp\htdocs\MJor\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\MJor\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('empleados')
#2 C:\xampp\htdocs\MJor\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\MJor\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\MJor\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\MJor\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\MJor\application\classes\Helpers\empleado.php(16): Kohana_ORM::factory('empleado')
#7 C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php(12): Helpers_Empleado::get()
#8 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Empleados->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Empleados))
#11 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\MJor\modules\database\classes\Kohana\Database\MySQL.php:358
2013-07-25 21:06:44 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$Id ~ APPPATH\classes\Controller\empleados.php [ 43 ] in C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php:43
2013-07-25 21:06:44 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Empleados->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Empleados))
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php:43
2013-07-25 21:07:01 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$Id ~ APPPATH\classes\Controller\empleados.php [ 44 ] in C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php:44
2013-07-25 21:07:01 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php(44): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 44, Array)
#1 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Empleados->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Empleados))
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\MJor\application\classes\Controller\empleados.php:44
2013-07-25 21:28:24 --- CRITICAL: ErrorException [ 1 ]: Call to a member function format() on a non-object ~ APPPATH\classes\Controller\empleados.php [ 40 ] in :
2013-07-25 21:28:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :