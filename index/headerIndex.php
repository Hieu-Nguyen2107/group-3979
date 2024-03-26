<header>
    <div id="header">
        <!-- Begin nav -->
        <ul id="nav">
        <li><a href="index.htm">home</a></li>
        <li>
            <a href="">
            product
            <i class="nav-arrow-down ti-angle-down"></i>
            </a>
            <ul class="subnav">
            <li><a href="trangchitiet/phanloaisanpham/robot.htm">ROBOT</a></li>
            <li><a href="trangchitiet/phanloaisanpham/doll.htm">BÚP BÊ</a></li>
            <li><a href="trangchitiet/phanloaisanpham/lego.htm">ĐỒ CHƠI LẮP GHÉP</a></li>
            <li><a href="trangchitiet/phanloaisanpham/dcvd.htm">ĐỒ CHƠI VẬN ĐỘNG</a></li>
            </ul>
        </li>
        <!-- Thêm phần tìm kiếm -->
        <li>
            <div class="search-container">
            <input type="text" id="search-input" placeholder="Tìm kiếm..." />
            <a href="trangchitiet/phanloaisanpham/timkiem1.htm">
                <button type="button" id="search-button">Tìm kiếm</button>
            </a>
            <div class="search-advanced-container">
                <a href="trangchitiet/userelements/advancedsearch.htm">
                    <button id="search-advanced-button">Tìm kiếm nâng cao</button>
                </a>
            </div>
            </div>
        </li>
        

        <!-- Thêm phần đăng nhập/đăng ký -->
        <li>
            <div class="user-container">
                    <?php
                        if (!isset($_COOKIE["user"])){
                            echo '<a id="login-link" href="trangchitiet/userelements/login.php" class="login-link"><span id="taikhoan">'.
                                "Đăng nhập". 
                                "</span></a>". 
                                '<a id="linkLogOut" href="trangchitiet/userelements/register.php" class="register-link" onclick="checkLogOut()"><span id="dangxuat">'.
                                "Đăng ký".
                                "</span></a>" ;
                            
                        }else{
                            echo '<a id="login-link" href="trangchitiet/userelements/accountinform.php" class="login-link"><span id="taikhoan">'.
                                $_COOKIE["user"].
                                "</span></a>".
                                '<a id="linkLogOut" href="../../index.php" class="register-link" onclick="checkLogOut()"><span id="dangxuat">'.
                                "Đăng xuất".
                                "</span></a>" ;
                        }
                    ?>
                <i class="user-icon ti-user"></i>
            </div>
        </li>

        <!-- Thêm phần giỏ hàng -->
        <li>
            <div class="cart-container">
                <a href="trangchitiet/userelements/shoppingCart.htm" class="cart-icon ti-shopping-cart"></a>
                <span class="cart-count"></span>
            </div>
        </li>
        </ul>
        <!-- End nav -->
    </div>
</header> 