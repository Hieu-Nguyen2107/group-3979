<header style="width: 100%;">
    <div id="header">
        <ul class="menubar" id="nav">
        <li><a href="../../indexadmin.php">home</a></li>
        <div class="user-container" style="margin-left: auto;margin-right: 30px;">
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
        echo '<i class="ti-user" style="margin-right: 7px;color: white;"></i><span style="color: white;">' .$acc. '</span>' ;
        ?>
        </div>
        </div>
        </ul>
    </div>
</header>