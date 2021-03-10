<?php
function redirect($url)
{
    echo "<script> window.location.assign('".$url."');</script>";
}

function JAlert($message)
{
    echo "<script> alert('".$message."'); </script>";
}
function OpenfilePDF($file)
{
    ob_start();
    $file = 'path/upload/';
    $filename= $_POST['$files_name'];
    header ('Content-type : application/pdf');
    header ('Content-Disposition : inline; filename="'.$filename.'"');
    header ('Content-Tranfer-Encoding: binary');
    header ('Accept-Ranges:bytes');
    @readfile($file);

    ob_end_flush();
}
?>