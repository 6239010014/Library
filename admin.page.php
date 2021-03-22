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
            <div class="navbar sticky-top navbar-warning bg-warning  px-5">
                <ul class="navbar-nav p-0 "></ul>
                    <li>
                        <div class="color-in-navbar"><a class="p-1 mb-1 bg-success text-light "href="add.php">Add Document</a>&nbsp;<a disable class="p-1 mb-1 bg-info text-light"><?php echo $_SESSION['login_fullname']."&nbsp<b>(Admin)</b>";?></a> <a class="p-1 mb-1 bg-danger text-light"href="logout.php">Logut/Sign Out</a></div>
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
                <br>
                <form action="#" method="get">
                    <input class="topnav-left"type="text" name="txt_kw" id="txt_kw" placeholder="Search....">&nbsp;<button class="btn btn-sm btn-success" >Search</button>&nbsp;
                </form>
                    <br>
                    <br>
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
                    $search = isset($_GET['txt_kw']) ? $_GET['txt_kw'] : '';
                    

                   
                    $SQL ="SELECT * FROM document where dname like '%$search%' or disbn like '%$search%' ";
                    $result = $db->query($SQL);
                    if($result = $db->query($SQL)){
                    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                    ?> 
                <tr>
                    <td align="center"><?php
                            printf ("%s \n", $row['did'])
                    ?></td>
                    <td align="center"><?php
                            printf ("%s \n", $row['dname']); 
                            print "<br>";                    
                    ?></td>
                    <td align="center"><?php
                            printf ("%s\n", $row['dtype']); 
                            print "<br>";
                    ?></td>
                    <td align="center"><?php 
                            printf ("%s\n", $row['dauthor']); 
                            print "<br>"; 
                    ?></td>   
                    <td align="center"><?php
                            printf ("%s\n", $row['disbn']); 
                            print "<br>";
                    ?></td>
                    <td><button class="btn btn-dark btn-m" onclick="return OpenfilePDF()">Read</button> </td>
                </tr>
                <?php 
                        }
                $result->free_result();
                    }
                }
                ?>
                </tbody>
<!-- end content here -->
<?php
    {
    require_once('footer.php');
    }
?>