<?php 
require_once('head.php');
require_once('dbcon.inc.php');


$inputUsername=$_POST['username'];
$inputPassword=$_POST['password'];

 
// $SQL='select * from user where uname="'.$inputUsername.'" AND upass = "'.md5($inputPassword).'"';
$SQL ='select * from user where uname = "'.$inputUsername.'" AND upass = "'.md5($inputPassword).'"';
// $result = $db->query($SQL);
// $countuser = $result->num_rows;
// $userdata=$result->fetch_assoc();
// if($countuser==1)
$result = $db->query($SQL);
$countuser = $result->num_rows;
$userdata=$result->fetch_assoc();
echo $SQL;
if($userdata['urole'] == "a")
{
    print "Welcome ".$userdata['uname'];
    print 'meta http-equiv="refresh" content="2;url=index.php>';
    JAlert("Login success");
    $_SESSION['login_username']=$userdata['uname'];
    $_SESSION['login_fullname']=$userdata['fullname'];
    redirect('admin.page.php');
}
elseif($userdata['urole'] == "u")
{
    print "Welcome ".$userdata['uname'];
    print 'meta http-equiv="refresh" content="2;url=index.php>';
    JAlert("Login success");
    $_SESSION['login_username']=$userdata['uname'];
    $_SESSION['login_fullname']=$userdata['fullname'];
    redirect('index.php');
}
else{
    JAlert("Please double check username and password again");
    // redirect('login.php');
}
?>