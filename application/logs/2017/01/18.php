<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-18 03:23:52 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-18 03:23:52 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_csrf', NULL)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_csrf')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:67
2017-01-18 03:24:00 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Session_Cookie - assumed 'Session_Cookie' ~ APPPATH/classes/Controller/Welcome/View.php [ 7 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:7
2017-01-18 03:24:00 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/xiazhenh...', 7, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome_View->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome_View))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:7
2017-01-18 03:26:55 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Cookie - assumed 'Cookie' ~ APPPATH/classes/Controller/Welcome/View.php [ 7 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:7
2017-01-18 03:26:55 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/xiazhenh...', 7, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome_View->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome_View))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:7
2017-01-18 04:14:58 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Cookie - assumed 'Cookie' ~ APPPATH/classes/Controller/Welcome/View.php [ 6 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:6
2017-01-18 04:14:58 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/xiazhenh...', 6, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome_View->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome_View))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:6
2017-01-18 04:15:47 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Cookie - assumed 'Cookie' ~ APPPATH/classes/Controller/Welcome/View.php [ 6 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:6
2017-01-18 04:15:47 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/xiazhenh...', 6, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome_View->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome_View))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:6
2017-01-18 04:15:58 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Cookie - assumed 'Cookie' ~ APPPATH/classes/Controller/Welcome/View.php [ 6 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:6
2017-01-18 04:15:58 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/xiazhenh...', 6, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome_View->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome_View))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:6
2017-01-18 04:16:05 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Cookie - assumed 'Cookie' ~ APPPATH/classes/Controller/Welcome/View.php [ 6 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:6
2017-01-18 04:16:05 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/xiazhenh...', 6, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome_View->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome_View))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:6
2017-01-18 04:16:12 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Cookie - assumed 'Cookie' ~ APPPATH/classes/Controller/Welcome/View.php [ 6 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:6
2017-01-18 04:16:12 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/xiazhenh...', 6, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome_View->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome_View))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:6
2017-01-18 04:18:47 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Cookie - assumed 'Cookie' ~ APPPATH/bootstrap.php [ 138 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/bootstrap.php:138
2017-01-18 04:18:47 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/bootstrap.php(138): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/xiazhenh...', 138, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(101): require('/Users/xiazhenh...')
#2 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/bootstrap.php:138
2017-01-18 04:19:33 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Cookie - assumed 'Cookie' ~ APPPATH/classes/Controller/Welcome/View.php [ 6 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:6
2017-01-18 04:19:33 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/xiazhenh...', 6, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome_View->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome_View))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php:6
2017-01-18 04:20:29 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:115
2017-01-18 04:20:29 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(115): Kohana_Cookie::salt('name', 'nose')
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php(6): Kohana_Cookie::set('name', 'nose')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome_View->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome_View))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:115
2017-01-18 04:21:12 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:115
2017-01-18 04:21:12 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php(115): Kohana_Cookie::salt('name', 'nose')
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Welcome/View.php(6): Kohana_Cookie::set('name', 'nose')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome_View->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome_View))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Cookie.php:115
2017-01-18 04:22:29 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'set' ~ APPPATH/classes/Controller/Welcome/View.php [ 6 ] in file:line
2017-01-18 04:22:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-01-18 04:22:40 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'set' ~ APPPATH/classes/Controller/Welcome/View.php [ 6 ] in file:line
2017-01-18 04:22:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-01-18 04:24:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'test_load' not found ~ APPPATH/classes/Controller/Welcome/View.php [ 6 ] in file:line
2017-01-18 04:24:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-01-18 04:26:26 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'get' ~ APPPATH/classes/Controller/Welcome/View.php [ 6 ] in file:line
2017-01-18 04:26:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-01-18 04:27:18 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'salt' ~ APPPATH/classes/Controller/Welcome/View.php [ 6 ] in file:line
2017-01-18 04:27:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-01-18 04:32:26 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'default_protocol' ~ APPPATH/classes/Controller/Welcome/View.php [ 6 ] in file:line
2017-01-18 04:32:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-01-18 04:32:55 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'set' ~ APPPATH/classes/Controller/Welcome/View.php [ 6 ] in file:line
2017-01-18 04:32:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-01-18 05:30:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'TestUpper' not found ~ APPPATH/classes/Controller/Welcome/View.php [ 6 ] in file:line
2017-01-18 05:30:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line