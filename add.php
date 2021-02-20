<?php
    require_once('head.php')
?>

<body>
    <div class="container  col-auto mt-5">
        <form method="post" action="add.pro.php" enctype="multipart/form-data">
            <div class="box">
                <h1>Add Document</h1>
                <input type="text"  id="Dname" name="Dname" placeholder="Document Name" required>
                <input type="text"  id="DISBN" name="DISBN" placeholder="Document ISBN " required>
                <input type="text"  id="Dauthor" name="Dauthor" placeholder="Document Author" required>
                <input type="file"  id="PDFfile" name="PDFfiles[]" multiple required>
                <br>
                <input class="btn-green" name="login" type="submit" value="Add"><br>
            </div>
        </form>
    </div>
</body>

<?php
    require('footer.php')
?>

</html>