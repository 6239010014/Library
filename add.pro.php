<?php

require_once('dbcon.inc.php');
require_once('head.php');

$path="upload/";

$num_file=count($_FILES['pdffiles']['name']);

for($i=0;$i<$num_file;$i++){

    $name=time()."_".$i.$_FILES['pdfFiles']['name'][$i];
    $tmp_name=$_FILES['pdfFiles']['tmp_name'][$i];

    move_uploaded_file($tmp_name,$path.$name);
}
require_once('footer.php');
?>