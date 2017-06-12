<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-10 01:12:11 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Account.php [ 12 ] in file:line
2016-12-10 01:12:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-10 01:13:14 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant name - assumed 'name' ~ APPPATH/classes/Controller/Account.php [ 11 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Account.php:11
2016-12-10 01:13:14 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Account.php(11): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/xiazhenh...', 11, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Account.php(5): Controller_Account::fund()
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Account->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Account.php:11