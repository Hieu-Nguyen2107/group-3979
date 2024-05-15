<header>
    <div id="header">
    <!-- Begin nav -->
    <ul class="menubar" id="nav">
        <li><a href="../../index.php">home</a></li>
        <li>
        <a href="">
            product
            <i class="nav-arrow-down ti-angle-down"></i>
        </a>
        <ul class="subnav">
            <li><a href="../../phanloai.php?typeSelect=robot">ROBOT</a></li>
            <li><a href="../../phanloai.php?typeSelect=doll">BÚP BÊ</a></li>
            <li><a href="../../phanloai.php?typeSelect=lego">ĐỒ CHƠI LẮP GHÉP</a></li>
            <li><a href="../../phanloai.php?typeSelect=dochoivandong">ĐỒ CHƠI VẬN ĐỘNG</a></li>
        </ul>
        </li>
        <!-- Thêm phần tìm kiếm -->
        <li>
            <div class="search-container">
            <form method="GET" action="../../dstimkiemcoban.php">
            <input type="text" id="search-input" placeholder="Tìm kiếm..." name ="noidung" />
            <button type="submit" name = "btn" id="search-button">Tìm kiếm</button>
            </form>
            <div class="search-advanced-container">
                <a href="advancedsearch.php">
                    <button id="search-advanced-button">Tìm kiếm nâng cao</button>
                </a>
            </div>
            </div>
        </li>

        <!-- Thêm phần đăng nhập/đăng ký -->
        <div class="user-container">
            <a id="login-link" 
            <?php
                if(!isset($_COOKIE["user"]))
                {
                    echo 'href="login.php"' ;
                }else{
                    echo 'href="accountinform.php"' ;
                }
            ?>
            class="login-link"><span id="taikhoan">
            <?php
                if(!isset($_COOKIE["user"]))
                {
                    echo "Đăng nhập" ;
                }else{
                    echo"". $_COOKIE["user"] ;
                }
            ?>
            </span></a>
            <a id="linkLogOut" 
            <?php
                if (!isset($_COOKIE["user"])){
                    echo 'href="register.php"' ;
                }else{
                    echo 'href="loginProcess.php"' ;
                }
            ?>
            class="register-link" onclick="checkLogOut()"><span id="dangxuat">
            <?php
                if(!isset($_COOKIE["user"]))
                {
                    echo 'Đăng ký' ;
                }else{
                    echo 'Đăng xuất' ;
            }
            ?>
            </span></a>

            <i class="user-icon ti-user"></i>
            </div>

        <!-- Thêm phần giỏ hàng -->
        <div class="cart-container">
        <a href="shoppingCart.php" class="cart-icon ti-shopping-cart"></a>
        <span class="cart-count"></span>
        </div>
    </ul>
    <!-- End nav -->
    </div>
</header>