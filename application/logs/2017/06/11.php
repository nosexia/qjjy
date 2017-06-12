<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-06-11 00:51:52 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/views/answer/index.php [ 40 ] in file:line
2017-06-11 00:51:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 01:03:39 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant －1 - assumed '－1' ~ APPPATH/views/answer/index.php [ 31 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/index.php:31
2017-06-11 01:03:39 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/index.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/xiazhenh...', 31, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/index.php:31
2017-06-11 01:15:02 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `'&'' or `"variable (T_VARIABLE)"' ~ APPPATH/classes/Controller/Answer.php [ 23 ] in file:line
2017-06-11 01:15:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 01:16:11 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `'&'' or `"variable (T_VARIABLE)"' ~ APPPATH/classes/Controller/Answer.php [ 23 ] in file:line
2017-06-11 01:16:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 01:22:48 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Answer.php [ 7 ] in file:line
2017-06-11 01:22:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 02:26:01 --- EMERGENCY: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/classes/Controller/Answer.php [ 27 ] in file:line
2017-06-11 02:26:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 03:17:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: create_content ~ APPPATH/views/answer/detail.php [ 10 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php:10
2017-06-11 03:17:25 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php(10): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xiazhenh...', 10, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php:10
2017-06-11 03:18:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Answer.php [ 33 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php:33
2017-06-11 03:18:42 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php(33): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/xiazhenh...', 33, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php(27): Controller_Answer->getPrevDetail('1', Array)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Answer->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php:33
2017-06-11 03:24:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: answer_id ~ APPPATH/views/answer/detail.php [ 15 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php:15
2017-06-11 03:24:15 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xiazhenh...', 15, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php:15
2017-06-11 03:29:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: next_detail ~ APPPATH/views/answer/detail.php [ 18 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php:18
2017-06-11 03:29:12 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xiazhenh...', 18, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php:18
2017-06-11 03:52:37 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Answer.php [ 27 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php:27
2017-06-11 03:52:37 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php(27): Kohana_Core::error_handler(2048, 'Only variables ...', '/Users/xiazhenh...', 27, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Answer->action_detail()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php:27
2017-06-11 03:53:34 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Controller_Answer::getPrevDetail(), called in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php on line 27 and defined ~ APPPATH/classes/Controller/Answer.php [ 33 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php:33
2017-06-11 03:53:34 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php(33): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/xiazhenh...', 33, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php(27): Controller_Answer->getPrevDetail(Array)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Answer->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php:33
2017-06-11 03:53:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: prev_detail ~ APPPATH/views/answer/detail.php [ 12 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php:12
2017-06-11 03:53:53 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php(12): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xiazhenh...', 12, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php:12
2017-06-11 03:54:02 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Answer.php [ 27 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php:27
2017-06-11 03:54:02 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php(27): Kohana_Core::error_handler(2048, 'Only variables ...', '/Users/xiazhenh...', 27, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Answer->action_detail()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php:27
2017-06-11 03:54:54 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Answer.php [ 27 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php:27
2017-06-11 03:54:54 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php(27): Kohana_Core::error_handler(2048, 'Only variables ...', '/Users/xiazhenh...', 27, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Answer->action_detail()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php:27
2017-06-11 03:55:21 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Answer.php [ 27 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php:27
2017-06-11 03:55:21 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php(27): Kohana_Core::error_handler(2048, 'Only variables ...', '/Users/xiazhenh...', 27, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Answer->action_detail()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Answer.php:27
2017-06-11 03:55:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::next() ~ APPPATH/classes/Controller/Answer.php [ 34 ] in file:line
2017-06-11 03:55:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 03:56:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: next_detail ~ APPPATH/views/answer/detail.php [ 18 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php:18
2017-06-11 03:56:18 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xiazhenh...', 18, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/detail.php:18
2017-06-11 04:32:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  prev_detail  ~ APPPATH/views/news/detail.php [ 22 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/news/detail.php:22
2017-06-11 04:32:02 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/news/detail.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xiazhenh...', 22, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/news/detail.php:22
2017-06-11 04:32:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  next_detail  ~ APPPATH/views/news/detail.php [ 31 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/news/detail.php:31
2017-06-11 04:32:20 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/news/detail.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xiazhenh...', 31, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/news/detail.php:31
2017-06-11 04:33:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  next_detail  ~ APPPATH/views/news/detail.php [ 31 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/news/detail.php:31
2017-06-11 04:33:35 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/news/detail.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xiazhenh...', 31, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/news/detail.php:31
2017-06-11 04:36:40 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-5' at line 1 [ SELECT * FROM news LIMIT 5 OFFSET -5 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-11 04:36:40 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM n...', false, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/News.php(10): Kohana_Database_Query->execute()
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_News->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-11 04:36:43 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-5' at line 1 [ SELECT * FROM news LIMIT 5 OFFSET -5 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-11 04:36:43 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM n...', false, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/News.php(10): Kohana_Database_Query->execute()
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_News->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-11 04:36:49 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-5' at line 1 [ SELECT * FROM news LIMIT 5 OFFSET -5 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-11 04:36:49 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM n...', false, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/News.php(10): Kohana_Database_Query->execute()
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_News->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-11 04:37:44 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-5' at line 1 [ SELECT * FROM news LIMIT 5 OFFSET -5 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-11 04:37:44 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM n...', false, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/News.php(10): Kohana_Database_Query->execute()
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_News->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-11 04:37:55 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-5' at line 1 [ SELECT * FROM news LIMIT 5 OFFSET -5 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-11 04:37:55 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM n...', false, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/News.php(10): Kohana_Database_Query->execute()
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_News->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-11 04:51:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  next_detail  ~ APPPATH/views/product/detail.php [ 31 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/product/detail.php:31
2017-06-11 04:51:52 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/product/detail.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xiazhenh...', 31, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/product/detail.php:31
2017-06-11 05:07:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: new_list ~ APPPATH/views/home/index.php [ 52 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/home/index.php:52
2017-06-11 05:07:23 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/home/index.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xiazhenh...', 52, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/home/index.php:52
2017-06-11 09:07:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: answer_content ~ APPPATH/views/home/index.php [ 80 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/home/index.php:80
2017-06-11 09:07:26 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/home/index.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xiazhenh...', 80, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/home/index.php:80
2017-06-11 10:02:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Validator' not found ~ APPPATH/classes/Controller/Contact.php [ 9 ] in file:line
2017-06-11 10:02:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 10:03:21 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1598332222, ewewe.qq.com, 你好胖) VALUES' at line 1 [ INSERT INTO customer_info (nosexia, 1598332222, ewewe.qq.com, 你好胖) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-11 10:03:21 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO cus...', false, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Contact.php(15): Kohana_Database_Query->execute()
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Contact->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-11 10:06:49 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1497193609, 1598332222, nosexia, ewewe.qq.com, 你好胖) VALUES' at line 1 [ INSERT INTO customer_info (1497193609, 1598332222, nosexia, ewewe.qq.com, 你好胖) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-11 10:06:49 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO cus...', false, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Contact.php(15): Kohana_Database_Query->execute()
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Contact->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251