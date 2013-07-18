<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-17 19:45:58 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\MJor\system\classes\Kohana\Cookie.php:67
2013-07-17 19:45:58 --- DEBUG: #0 C:\xampp\htdocs\MJor\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\xampp\htdocs\MJor\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\xampp\htdocs\MJor\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\MJor\system\classes\Kohana\Cookie.php:67