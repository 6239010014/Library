<?php 
    require_once('dbcon.inc.php');
    require_once('head.php');
    require_once('fn.php');
    if(!isset($_SESSION['login_username']))
    {
        redirect('login.php');
    }
    else
    {
        
?>  
<body>
        <div class="conainer-fluid">
            <div class="navbar sticky-top navbar-success bg-success  px-5">
                <ul class="navbar-nav p-0 "></ul>
                    <li>
                        <div class="color-in-navbar"><a href="add.php">Add Document</a> |<?php echo $_SESSION['login_fullname']; ?> | <a href="logout.php">Logut/Sign Out</a></div>
                    </li>
                </ul>
            </div>
        </div>
<!-- content Here      -->
<!--?php 
$sb= 'select * from document';
$result=$db->query($sb);

while($book=$result->fetch_assoc()){
    print_r($book);
    print "<hr>"; 
}
?-->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="10%">No.</th>
                            <th width="15%">Name</th>
                            <th width="15%">Type</th>
                            <th width="20%">Author</th>
                            <th width="20%">ISBN</th>
                            <th width="20%">View</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                        $get_dcm = $db->show_document();
                        $i = 1;
                        foreach ($get_dcm as $document) {
                            ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $document['dname'] ?></td>
                            <td><?php echo $document['dtype'] ?></td>
                            <td><?php echo $document['dauthor'] ?></td>
                            <td><?php echo $document['disbn'] ?></td>
                            <td><buttom class='btn btn-info' onclick=''>Open</buttom></td>
                        </tr>
                    </tbody>
                <?php
                        $i++;
                    }
                    ?>
<!-- end content here -->
<?php
    {
    require_once('footer.php');
    }
}
?>