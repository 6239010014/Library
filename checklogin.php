<?php 
require_once('head.php');
require_once('dbcon.inc.php');

$inputUsername=$_POST['username'];
$inputPassword=$_POST['password'];

 
$SQL='select * from user where uname="'.$inputUsername.'" AND upass = "'.md5($inputPassword).'" ';

echo "$SQL";
$db = $db->connect();
$db ->query($SQL);
$countuser = $db->num_rows;
$userdata=$db->fetch_assoc();
if($countuser==1)
{
    print "Welcome ".$userdata['uname'];
    print 'meta http-equiv="refresh" content="2;url=index.php>';
    JAlert("Login success");
    $_SESSION['login_username']=$userdata['uname'];
    $_SESSION['login_fullname']=$userdata['fullname'];
    redirect('index.php');
}else
{
    JAlert("Please double check username and password again");
    redirect('login.php');
}
?>