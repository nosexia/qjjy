<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-06-12 07:50:51 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2016-10-12, 1598332222, nosexia, ewewe.qq.com, 你好胖) VALUES' at line 1 [ INSERT INTO customer_info (2016-10-12, 1598332222, nosexia, ewewe.qq.com, 你好胖) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-12 07:50:51 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO cus...', false, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Contact.php(15): Kohana_Database_Query->execute()
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Contact->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-12 07:51:00 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2016-10-12, 1598332222, nosexia, ewewe.qq.com, 你好胖) VALUES' at line 1 [ INSERT INTO customer_info (2016-10-12, 1598332222, nosexia, ewewe.qq.com, 你好胖) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-12 07:51:00 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO cus...', false, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Contact.php(15): Kohana_Database_Query->execute()
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Contact->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-12 07:52:41 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2016-10-12, 1598332222, nosexia, ewewe.qq.com, 你好胖) VALUES' at line 1 [ INSERT INTO customer_info (2016-10-12, 1598332222, nosexia, ewewe.qq.com, 你好胖) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-12 07:52:41 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO cus...', false, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Contact.php(15): Kohana_Database_Query->execute()
#2 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Contact->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#8 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/modules/database/classes/Kohana/Database/Query.php:251
2017-06-12 08:26:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: dn ~ APPPATH/classes/Controller/Contact.php [ 16 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Contact.php:16
2017-06-12 08:26:42 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Contact.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xiazhenh...', 16, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Contact->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Contact.php:16
2017-06-12 08:27:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: dn ~ APPPATH/classes/Controller/Contact.php [ 16 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Contact.php:16
2017-06-12 08:27:43 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Contact.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xiazhenh...', 16, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Contact->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Contact.php:16
2017-06-12 08:28:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: dn ~ APPPATH/classes/Controller/Contact.php [ 16 ] in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Contact.php:16
2017-06-12 08:28:23 --- DEBUG: #0 /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Contact.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xiazhenh...', 16, Array)
#1 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Controller.php(84): Controller_Contact->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#4 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/xiazhenhua/Documents/work/localProject/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/xiazhenhua/Documents/work/localProject/kohana/index.php(116): Kohana_Request->execute()
#7 {main} in /Users/xiazhenhua/Documents/work/localProject/kohana/application/classes/Controller/Contact.php:16