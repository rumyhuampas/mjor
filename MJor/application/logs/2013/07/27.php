<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-27 12:37:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _title ~ APPPATH\views\_header.php [ 8 ] in C:\xampp\htdocs\MJor\application\views\_header.php:8
2013-07-27 12:37:11 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\views\_header.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\MJor\application\views\partes.php(1): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MJor\application\classes\Controller\partes.php(26): Kohana_View->render()
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Partes->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Partes))
#8 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MJor\application\views\_header.php:8
2013-07-27 15:44:39 --- CRITICAL: Kohana_Exception [ 0 ]: The Date property does not exist in the Model_Vale class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\MJor\modules\orm\classes\Kohana\ORM.php:699
2013-07-27 15:44:39 --- DEBUG: #0 C:\xampp\htdocs\MJor\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('Date', '2013-07-27')
#1 C:\xampp\htdocs\MJor\application\classes\Controller\reportes.php(21): Kohana_ORM->__set('Date', '2013-07-27')
#2 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_newvale()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MJor\modules\orm\classes\Kohana\ORM.php:699
2013-07-27 17:29:11 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(assets/css/pdfstyle.css): failed to open stream: No such file or directory ~ APPPATH\classes\Helpers\reportes.php [ 26 ] in :
2013-07-27 17:29:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\MJor\application\classes\Helpers\reportes.php(26): file_get_contents('assets/css/pdfs...')
#2 C:\xampp\htdocs\MJor\application\classes\Controller\reportes.php(25): Helpers_Reportes::createVale()
#3 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_newvale()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#6 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-07-27 17:29:26 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Helpers_Reportes::show(), called in C:\xampp\htdocs\MJor\application\classes\Controller\reportes.php on line 27 and defined ~ APPPATH\classes\Helpers\reportes.php [ 20 ] in C:\xampp\htdocs\MJor\application\classes\Helpers\reportes.php:20
2013-07-27 17:29:26 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\classes\Helpers\reportes.php(20): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\MJor\application\classes\Controller\reportes.php(27): Helpers_Reportes::show()
#2 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_newvale()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\MJor\application\classes\Helpers\reportes.php:20
2013-07-27 18:54:30 --- CRITICAL: Kohana_Exception [ 0 ]: Required route parameter not passed: msgtype ~ SYSPATH\classes\Kohana\Route.php [ 599 ] in C:\xampp\htdocs\MJor\application\classes\Controller\reportes.php:26
2013-07-27 18:54:30 --- DEBUG: #0 C:\xampp\htdocs\MJor\application\classes\Controller\reportes.php(26): Kohana_Route->uri(Array)
#1 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_newvale()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#4 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\MJor\application\classes\Controller\reportes.php:26
2013-07-27 19:55:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_vales' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-07-27 19:55:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-27 19:55:57 --- CRITICAL: Kohana_Exception [ 0 ]: The Date property does not exist in the Model_Vale class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\MJor\modules\orm\classes\Kohana\ORM.php:600
2013-07-27 19:55:57 --- DEBUG: #0 C:\xampp\htdocs\MJor\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Date')
#1 C:\xampp\htdocs\MJor\application\views\vales.php(77): Kohana_ORM->__get('Date')
#2 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MJor\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MJor\application\classes\Controller\reportes.php(13): Kohana_View->render()
#5 C:\xampp\htdocs\MJor\system\classes\Kohana\Controller.php(84): Controller_Reportes->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reportes))
#8 C:\xampp\htdocs\MJor\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MJor\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MJor\modules\orm\classes\Kohana\ORM.php:600