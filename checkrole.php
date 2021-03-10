<?php 
require_once('head.php');
require_once('dbcon.inc.php');

$SQL ='select * from user where urole = 1';

$result=$db->query($SQL);
$check = $result->num_rows;
$userrole=$result->fetch_assoc();
if($check=1)
{
    redirect('admin.page.php');
}else{
    redirect('index.php');
}
?>