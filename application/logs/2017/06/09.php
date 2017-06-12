<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-06-09 20:28:53 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2017-06-09 20:28:53 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'select * from a...', false, Array)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Home.php(5): Kohana_Database_Query->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#9 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2017-06-09 20:43:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLI' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2017-06-09 20:43:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-09 20:50:21 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2017-06-09 20:50:21 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'select * from a...', false, Array)
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Home.php(5): Kohana_Database_Query->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#9 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/MySQL.php:171