
<header style="width: 100%;">
<div id="header">
    <ul class="menubar" id="nav">
    <li><a href="">home</a></li>
    <div class="user-container" style="margin-left: auto;margin-right: 30px;color: white">
    <div>
        <?php 
        $severname = "localhost" ;
        $username = "root" ;
        $password = "" ;
        $dbname = "mydb" ;
        
        $conn = new mysqli($severname, $username, $password, $dbname) ;
        
        if ($conn->connect_error){
            die("Connection error: " .$conn->connect_error) ;
        }
        $acc = $_COOKIE["admin"] ;
        echo '<i class="ti-user" style="margin-right: 7px"></i><span>' .$acc. '</span>' ;
        echo '<a id="linkLogOut" href="loginAdmin.php" class="register-link"><span id="dangxuat">Đăng xuất
        </span></a>' ;
        ?>
    </div>
    </div>
    </ul>
</div>
</header> 