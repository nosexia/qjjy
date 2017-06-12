<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-02-16 01:59:47 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:115
2017-02-16 01:59:47 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(115): Kohana_Cookie::salt('user_id', 10)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php(7): Kohana_Cookie::set('user_id', 10)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome_View->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome_View))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:115
2017-02-16 02:00:43 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 02:00:43 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 02:00:58 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 02:00:58 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 02:31:02 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 02:31:02 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 02:45:31 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 02:45:31 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 02:59:53 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 02:59:53 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:04:17 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:04:17 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:07:44 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:07:44 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:17:32 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:17:32 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:17:36 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:17:36 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:17:38 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:17:38 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:17:54 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:17:54 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:21:28 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:21:28 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:23:13 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:23:13 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:23:58 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:23:58 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:24:01 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:24:01 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:24:03 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:24:03 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:24:37 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:24:37 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:24:40 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:24:40 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:28:42 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:28:42 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:29:22 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:29:22 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:29:25 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:29:25 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:30:56 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:30:56 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:30:58 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:30:58 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:31:00 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:31:00 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:31:03 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:31:03 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:31:21 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:31:21 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:33:34 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:33:34 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:33:36 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:33:36 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:33:38 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:33:38 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:34:57 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:34:57 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:35:31 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:35:31 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:35:33 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:35:33 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:35:52 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:35:52 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:36:57 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:36:57 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:45:00 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-02-16 03:45:00 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('user_id', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('user_id')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67