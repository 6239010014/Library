<?php   
session_start();
 $dbserver = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = 'library';

 $db = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
 $db->set_charset("uft8");


require_once('fn.php');
?>