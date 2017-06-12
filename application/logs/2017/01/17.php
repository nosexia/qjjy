<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-17 03:16:52 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-17 03:16:52 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_csrf', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_csrf')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-17 03:18:00 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-17 03:18:00 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_csrf', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_csrf')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-17 03:18:17 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-17 03:18:17 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_csrf', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_csrf')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-17 03:18:27 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-17 03:18:27 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_csrf', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_csrf')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-17 03:34:57 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-17 03:34:57 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_csrf', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_csrf')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-17 03:34:59 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-17 03:34:59 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_csrf', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_csrf')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-17 03:35:41 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 105 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2017-01-17 03:35:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Users/xiazhenh...', 423, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P<contro...', 'welcome/index.h...', NULL)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#5 {main} in file:line
2017-01-17 03:39:59 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 121 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2017-01-17 03:39:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Users/xiazhenh...', 423, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P<contro...', 'welcome/index.h...', NULL)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#5 {main} in file:line
2017-01-17 03:40:26 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 90 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2017-01-17 03:40:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Users/xiazhenh...', 423, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P<contro...', 'welcome/index', NULL)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#5 {main} in file:line
2017-01-17 04:17:42 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-17 04:17:42 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_csrf', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_csrf')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67