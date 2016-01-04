<?php

// 
//                      ___ _                 __    __     _     
//   /\/\   __ _  ___  / _ \ |__   ___  ___  / / /\ \ \___| |__  
//  /    \ / _` |/ __|/ /_)/ '_ \ / _ \/ _ \ \ \/  \/ / _ \ '_ \ 
// / /\/\ \ (_| | (__/ ___/| | | |  __/  __/  \  /\  /  __/ |_) |
// \/    \/\__,_|\___\/    |_| |_|\___|\___|   \/  \/ \___|_.__/ 
//         Website Design By MacPhee Web (C) 2012 - 2016
//        		   MacPheeWeb.com
//                 	  Zachary MacPhee
//                      Website Version 2.0


$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('test');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}