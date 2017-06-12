<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-11 04:19:23 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 04:19:23 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(128): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 04:19:24 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 04:19:24 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(128): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 04:19:30 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 04:19:30 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(128): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 04:19:31 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 04:19:31 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(128): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 04:20:07 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 04:20:07 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 05:51:33 --- EMERGENCY: ErrorException [ 2 ]: fopen(data.txt): failed to open stream: Permission denied ~ APPPATH/views/welcome/index.php [ 16 ] in file:line
2017-01-11 05:51:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(data.txt)...', '/Users/xiazhenh...', 16, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/welcome/index.php(16): fopen('data.txt', 'w')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome.php(8): Kohana_View->render()
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2017-01-11 06:04:02 --- EMERGENCY: ErrorException [ 2 ]: fopen(/Users/xiazhenhua/Documents/work/localProject/kohana/application/views/welcome/data.txt): failed to open stream: Permission denied ~ APPPATH/views/welcome/index.php [ 16 ] in file:line
2017-01-11 06:04:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/Users/xi...', '/Users/xiazhenh...', 16, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/welcome/index.php(16): fopen('/Users/xiazhenh...', 'w')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2017-01-11 06:13:59 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:13:59 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:14:09 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:14:09 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:14:18 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:14:18 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:14:36 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:14:36 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:15:22 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:15:22 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:15:23 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:15:23 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:15:23 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:15:23 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:15:23 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:15:23 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:31:59 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:31:59 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:32:42 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 06:32:42 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 09:27:37 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 09:27:37 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 09:27:52 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 09:27:52 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 09:35:58 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 09:35:58 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 09:35:58 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-11 09:35:58 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('Hm_lvt_3592cc1c...', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('Hm_lvt_3592cc1c...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67