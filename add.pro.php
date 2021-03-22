<?php

require_once('dbcon.inc.php');
require_once('head.php');

$path="upload/";

$num_file=count($_FILES['PDFfiles']['name']);

$df = "INSERT INTO document (Dname,Dtype,Disbn,Dauthor) VALUES ('".$_POST['Dname']."','".$_POST['Dtype']."','".$_POST['DISBN']."','".$_POST['Dauthor']."')";
$db->query($df);
$id=$db->insert_id;

$files_name=array();
for($i=0;$i<$num_file;$i++){

    $name=time()."_".$id.$i.$_FILES['PDFfiles']['name'][$i];
    $tmp_name=$_FILES['PDFfiles']['name'][$i];
    $files_name[]=$path.$name;
    move_uploaded_file($_POST['Dname'],$path.$name);
}

$SQL="update document set Dfile='".json_encode($files_name)."' where Did='$id'";
$db->query($SQL);

redirect('admin.page.php');

require_once('footer.php');
?>