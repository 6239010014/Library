<?php 
    require_once('dbcon.inc.php');
    require_once('head.php');
    if(!isset($_SESSION['login_username']))
    {
        redirect('login.php');
    }
    else
    {
?>  
<!-- content Here      -->
<?php 
    $sb= 'select * from book';
?>




<!-- end content here -->
<?php
    }
    require_once('footer.php');
?>