<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-02-20 06:35:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_data ~ APPPATH/views/welcome/index.php [ 14 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/welcome/index.php:14
2017-02-20 06:35:29 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/welcome/index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/xiazhenh...', 14, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome_View))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(115): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/welcome/index.php:14
2017-02-20 06:47:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_data ~ APPPATH/views/welcome/index.php [ 14 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/welcome/index.php:14
2017-02-20 06:47:41 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/welcome/index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/xiazhenh...', 14, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome_View))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(115): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/welcome/index.php:14
2017-02-20 06:50:48 --- EMERGENCY: RedisException [ 0 ]: Redis server went away ~ APPPATH/views/welcome/index.php [ 28 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/welcome/index.php:28
2017-02-20 06:50:48 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/welcome/index.php(28): Redis->ping()
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome_View))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(115): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/welcome/index.php:28