<?php
setcookie("admin","giahung345",time() + (86400 * 30), "/") ;
?>
<header style="width: 100%;">
<div id="header">
    <ul class="menubar" id="nav">
    <li><a href="">home</a></li>
    <div class="user-container" style="margin-left: auto;margin-right: 30px;">
    <div class="admin-popup">
        <!-- <i class="user-icon ti-user">Admin</i> -->
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
        $sql = "SELECT * FROM customer WHERE NameAccount='$acc'" ;
        $result = mysqli_query($conn,$sql) ;
        $row = mysqli_fetch_assoc($result) ;
        echo '<img src="trangchitiet/adminelements/' .$row["AvatarUrl"]. '"><span>Moi</span>' ;
        ?>
        </div>
        <!-- <div class="popup">
        <div>
            <div><i class="ti-user"></i>
            <span>Admin</span>
            </div>
            <span>Tên: Đông Quân</span>
            <span>Tuổi: 19</span>
        </div>
        </div> -->
        
    </div>
    </div>
    </ul>
</div>
</header> 