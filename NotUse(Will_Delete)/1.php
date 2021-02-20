<?php
require_once('head.php');
?>
            <h1 align="center">Login</h1>
            <form action="checklogin.php" method="post">
            <div class="centered">
                <div class="row-sm">
                    Username <input type="text" name="username">        
                </div>
                <div class="row-sm">
                    password <input type="password" name="password">
                </div>
                <div class="row-sm">
                    <input type="submit" value="login">
                </div>
            </form>
<?php
    require('footer.php')
?>
