<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-06-03 08:23:46 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-06-03 08:23:46 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('cna', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('cna')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(114): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67