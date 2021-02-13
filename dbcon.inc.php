<?php 
session_start();
 $dbserver = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = 'library';

 $db = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
 $db->set_charset("uft8");

 if (mysqli_connect_errno()) {
     echo "Connection Failed".mysqli_connect_error();
     exit();
 }

require_once('fn.php');
?>