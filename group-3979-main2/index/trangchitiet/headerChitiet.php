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
            <li>
            <a href="../phanloaisanpham/robot.php">ROBOT</a>
            </li>
            <li>
            <a href="../phanloaisanpham/doll.php">BÚP BÊ</a>
            </li>
            <li>
            <a href="../phanloaisanpham/lego.php"
                >ĐỒ CHƠI LẮP GHÉP</a
            >
            </li>
            <li>
            <a href="../phanloaisanpham/dcvd.php"
                >ĐỒ CHƠI VẬN ĐỘNG</a
            >
            </li>
        </ul>
        </li>
        <!-- Thêm phần tìm kiếm -->
        <li>
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Tìm kiếm..." />
            <a href="../phanloaisanpham/timkiem1.php">
            <button type="button" id="search-button">Tìm kiếm</button>
            </a>
        </div>
        </li>
        <!--Thêm phần tìm kiếm nâng cao-->
        <div class="search-advanced-container">
        <a href="../userelements/advancedsearch.php">
            <button id="search-advanced-button">Tìm kiếm nâng cao</button>
        </a>
        </div>

        <!-- Thêm phần đăng nhập/đăng ký -->
        <div class="user-container">
        <a
            href="../userelements/login.php"
            class="login-link"
        >
            <span id="taikhoan">Đăng nhập</span>
        </a>
        <a href="../userelements/register.php" class="register-link">Đăng ký</a>
        <i class="user-icon ti-user"></i>
        </div>

        <!-- Thêm phần giỏ hàng -->
        <div class="cart-container">
        <a href="../userelements/shoppingCart.php" class="cart-icon ti-shopping-cart"></a>
        <span class="cart-count"></span>
        </div>
    </ul>
    <!-- End nav -->
    </div>
</header>