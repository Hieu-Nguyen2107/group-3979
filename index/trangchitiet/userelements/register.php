<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Đăng Ký 3979 Toys</title>
    <link rel="stylesheet" href="../../index.css" type="text/css" />
    <link
      rel="stylesheet"
      href="../../themify-icons-font/themify-icons/themify-icons.css"
    />
    <link rel="stylesheet" href="register.css" />
    <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
  </head>
  <body>
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
              >Đăng nhập</a
            >
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
    <div class="inform">
      <form action="login.php">
        <div class="inner-inform">
          <input
            type="text"
            id="email"
            name="email"
            placeholder=" Email"
          /><br />
          <input type="text" id="name" name="name" placeholder="Họ và tên" /> <br/>
          <input
            type="text"
            id="username"
            name="username"
            placeholder=" Tên tài khoản"
          /><br />
          <input
            type="password"
            id="pass"
            name="pass"
            placeholder=" Nhập mật khẩu"
          /><br />
          <input
            type="password"
            id="pass"
            name="pass"
            placeholder=" Nhập lại mật khẩu"
          /><br />
          <input
            type="submit"
            value="Đăng Ký"
            onclick="alert('Bạn đã đăng ký thành công !!!')"
          />
        </div>
      </form>
    </div>
    <div style="display: block;margin-top: auto;">
      <footer>
        <ul style="margin-left: 3%" class="footer">
          <li class="footer-data">
            <img src="../../phoneicon.png" style="width: 20px" /> Hotline:
            0939.797979 - 0979.393939
          </li>
          <li class="footer-data">
            <img src="../../emailicon.png" style="width: 20px" /> Email:
            3979team@gmail.com
          </li>
          <li class="footer-data">
            <img src="../../addressicon.png" style="width: 20px" /> Địa chỉ: 728
            Lê Trọng Tấn, Phường Sơn Kì, Quận Tân Phú, TP.HCM
          </li>
          <li class="footer-data">
            <img src="../../timeicon.png" style="width: 20px" /> Thời gian hoạt
            động: 10:00 - 21:00
          </li>
        </ul>
        <div style="margin-left: 10%">
          <p class="footer-data" style="margin-bottom: 5%">
            <img src="../../connecticon.png" style="width: 20px" /> Kết nối với
            chúng tôi qua các nền tảng sau:
          </p>
          <img
            src="../../fbicon.png"
            style="width: 70px; height: 70px; margin-left: 8%"
          />
          <img
            src="../../instaicon.png"
            style="width: 70px; height: 70px; margin-left: 8%"
          />
          <img
            src="../../youtubeicon.png"
            style="width: 70px; height: 70px; margin-left: 8%"
          />
        </div>
        <img src="../../bocongthuong.png" style="margin-left: 10%" />
      </footer>
    </div>
  </body>
</html>
