<?php

define('DB_SERVER', 'mysql32.mydevil.net');
define('DB_USERNAME', 'm11737');
define('DB_PASSWORD', 'Kuku648112');
define('DB_NAME', 'm11737_Userbases');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>