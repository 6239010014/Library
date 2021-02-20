<?php
    require_once('head.php')
?>

<body>
    <div class="container  col-auto mt-5">
        <form method="post" action="checklogin.php">
            <div class="box">
                <h1>Log In</h1>
                <img src="assets/image/user.svg">
                <input type="text"  id="username" name="username" placeholder="Username">
                <span id="usernameavailable"></span>
                <img src="assets/image/password.svg">
                <input type="password"  id="password" name="password" placeholder="Password">
                <input class="btn-green" name="login" type="submit" value="Login"><br>
            </div>
        </form>
    </div>
</body>

<?php
    require('footer.php')
?>

</html>