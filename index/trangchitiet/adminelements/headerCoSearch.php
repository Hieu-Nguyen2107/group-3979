<header style="width: 100%;">
    <div id="header">
        <ul class="menubar" id="nav">
        <li><a href="../../indexadmin.php">home</a></li>
        <div class="search-container">
            <form method="GET" action="timkiemsanpham.php">
            <input type="text" id="search-input" placeholder="Tìm kiếm..." name ="noidung" />
            <button type="submit" name = "btn" id="search-button">Tìm kiếm</button>
            </form>
        </div>
        <div class="user-container" style="margin-left: auto;margin-right: 30px;">
        <div class="admin-popup">
            <!-- <i class="user-icon ti-user">Admin</i> -->
            <div>
            <?php
            include "../connection.php" ;
            $acc = $_COOKIE["admin"] ;
            $sql = "SELECT * FROM customer WHERE NameAccount='$acc'" ;
            $result = mysqli_query($conn,$sql) ;
            $row = mysqli_fetch_assoc($result) ;
            echo '<img src="' .$row["AvatarUrl"]. '"><span>Moi</span>' ;
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