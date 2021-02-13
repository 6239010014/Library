<?php 
 require_once('head.php')
?>
<br>
 <h1 align="center">Add book</h1>
            <form action="add.pro.php" method="post" align="center" enctype="mutipart/form-data">
            <div class="centered">
                <div class="row-sm">
                    Book name : &nbsp;<input type="text" name="bookname">        
                </div>
                <br>
                <div class="row-sm">
                    Book File : &nbsp;<input type="file" name="pdffiles[]" multiple>
                </div>
                <div class="row-sm">
                    ISBN : &nbsp;<input type="text" name="isbn">
                </div>
                <br>
                <div class="row-sm">
                    <button type="submit" class="btn btn-md  btn-success">Upload</button>
                </div>
            </form>
<?php 
 require_once('footer.php')
?>