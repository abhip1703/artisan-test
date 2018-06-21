<?php

$cleardb_url = parse_url(getenv("mysql://b8d5664d0bf063:504435c9@us-cdbr-iron-east-04.cleardb.net/heroku_d42dba1d0c27ab5?reconnect=true"));
$cleardb_server = $cleardb_url["host"];
$cleardb_user = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"], 1);

$db['default']['hostname'] = $cleardb_server;
$db['default']['username'] = $cleardb_url["user"];
$db['default']['password'] = $cleardb_url["pass"];
$db['default']['database'] = substr($cleardb_url["path"], 1);
db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;


$conn = new mysqli($cleardb_server, $cleardb_user, $cleardb_password, $cleardb_db);
// define('DB_SERVER','localhost');
// define('DB_USER','root');
// define('DB_PASS' ,'');
// define('DB_NAME', 'shopping');
// $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// // Check connection
// if (mysqli_connect_errno())
// {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }
?>