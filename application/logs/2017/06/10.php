<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-06-10 01:47:09 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Home.php [ 6 ] in file:line
2017-06-10 01:47:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-10 01:47:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'DDB' not found ~ APPPATH/classes/Controller/Home.php [ 5 ] in file:line
2017-06-10 01:47:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-10 08:47:37 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2017-06-10 08:47:37 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Home.php(5): Kohana_Database_Query->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#9 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2017-06-10 08:47:49 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2017-06-10 08:47:49 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Home.php(5): Kohana_Database_Query->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#9 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2017-06-10 08:48:39 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2017-06-10 08:48:39 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Home.php(5): Kohana_Database_Query->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#9 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2017-06-10 08:48:41 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2017-06-10 08:48:41 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Home.php(5): Kohana_Database_Query->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#9 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2017-06-10 08:49:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2017-06-10 08:49:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-10 08:52:01 --- EMERGENCY: Database_Exception [ 0 ]: invalid data source name ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2017-06-10 08:52:01 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM a...', false, Array)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Home.php(5): Kohana_Database_Query->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#9 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2017-06-10 08:52:14 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2017-06-10 08:52:14 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Home.php(5): Kohana_Database_Query->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#9 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2017-06-10 09:00:44 --- EMERGENCY: Database_Exception [ 0 ]: invalid data source name ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2017-06-10 09:00:44 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM a...', false, Array)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Home.php(5): Kohana_Database_Query->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#9 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2017-06-10 09:01:55 --- EMERGENCY: Database_Exception [ 0 ]: invalid data source name ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2017-06-10 09:01:55 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM a...', false, Array)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Home.php(5): Kohana_Database_Query->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#9 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2017-06-10 09:25:25 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_DB::query(), called in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Home.php on line 9 and defined ~ MODPATH/database/classes/Kohana/DB.php [ 42 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/DB.php:42
2017-06-10 09:25:25 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/DB.php(42): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/xiazhenh...', 42, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Home.php(9): Kohana_DB::query('answer')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/DB.php:42
2017-06-10 09:28:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Controller/Home.php [ 10 ] in file:line
2017-06-10 09:28:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-10 09:35:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_data ~ APPPATH/views/answer/index.php [ 10 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/index.php:10
2017-06-10 09:35:22 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/xiazhenh...', 10, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/index.php:10
2017-06-10 22:10:27 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/views/answer/index.php [ 26 ] in file:line
2017-06-10 22:10:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-10 22:11:32 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 132120576 bytes) ~ APPPATH/views/answer/index.php [ 29 ] in file:line
2017-06-10 22:11:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-10 22:11:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/views/answer/index.php [ 27 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/index.php:27
2017-06-10 22:11:56 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/index.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/xiazhenh...', 27, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/index.php:27
2017-06-10 22:15:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/views/answer/index.php [ 27 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/index.php:27
2017-06-10 22:15:57 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/index.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/xiazhenh...', 27, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(61): include('/Users/xiazhenh...')
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xiazhenh...', Array)
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Answer))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#10 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/views/answer/index.php:27
2017-06-10 22:27:44 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 132120576 bytes) ~ APPPATH/views/answer/index.php [ 30 ] in file:line
2017-06-10 22:27:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-10 22:28:00 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/views/answer/index.php [ 27 ] in file:line
2017-06-10 22:28:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-10 22:32:00 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/views/answer/index.php [ 34 ] in file:line
2017-06-10 22:32:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-10 22:32:12 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/views/answer/index.php [ 34 ] in file:line
2017-06-10 22:32:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line