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
<body>
        <div class="conainer-fluid">
            <div class="navbar sticky-top navbar-success bg-success  px-5">
                <ul class="navbar-nav p-0 "></ul>
                    <li>
                        <div class="color-in-navbar"><?php echo $_SESSION['login_username']; ?> | <a href="logout.php">ออกจากระบบ</a></div>
                    </li>
                </ul>
            </div>
        </div>
<!-- content Here      -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="10%">No.</th>
                            <th width="20%">Name</th>
                            <th width="20%">Type</th>
                            <th width="30%">ISBN</th>
                            <th width="20%">View</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $get_dcm = $db->get_all_dcm();
                        $i = 1;
                        foreach ($get_dcm as $document) {
                            ?>
                        <tr>
                        <td><?php echo $i ?></td>
                            <td><?php echo $document['did'] ?></td>
                            <td><?php echo $document['dname'] ?></td>
                            <td><?php if ($document['disbn'] != "") {
                                        $library = $document['disbn'];
                                        echo substr($library, 0, 0). substr($library, 0);
                                    } ?>
                            </td>
                            <td><button class="btn btn-success btn-s" data-toggle="modal" data-target="#edit_user"
                                    onclick="return show_edit_user(<?php echo $user['id'] ?>);">Edit</button></td>
                    <?php 

$sb= 'select * from document';
$result=$db->query($sb);

while($book=$result->fetch_assoc()){
    print_r($book);
    print "<hr>";
}
?>


<!-- end content here -->
<?php
    }
    require_once('footer.php');
    }
?>