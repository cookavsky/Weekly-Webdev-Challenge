<?php
session_start();
$DB_HOST = 'mysql32.mydevil.net';
$DB_USER = 'm11737';
$DB_PASS = 'Kuku648112';
$DB_NAME = 'm11737_Userbases';
$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ( mysqli_connect_errno() ) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}




?>