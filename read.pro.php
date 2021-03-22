<?php

require_once('dbcon.inc.php');
require_once('head.php');
$sql = "select * from document";
$result=array(
    'Did'=>$id,
    'Dfile'=>$files_name
);
return $result;

$SQL="select Dfile form document where Dfile ='".json_decode($files_name)."' where Did='$id'";


function OpenfilePDF($file)
{   
    ob_start();
    $file = '../mysql/data/library';
    $filename= $_POST['$files_name'];
    header ('Content-type : application/pdf');
    header ('Content-Disposition : inline; filename="'.$filename.'"');
    header ('Content-Tranfer-Encoding: binary');
    header ('Accept-Ranges:bytes');
    @readfile($file);

    ob_end_flush(); 
}