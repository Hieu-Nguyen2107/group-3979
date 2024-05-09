<!DOCTYPE html>
<!--Phai co phan trang va phan loai san pham-->
<html>
  <head>
    <meta charset="UTF-8" />
    <title>3979 Toys</title>
    <link rel="stylesheet" href="../../index.css" type="text/css" />
    <link
      rel="stylesheet"
      href="../../themify-icons-font/themify-icons/themify-icons.css"
    />
    <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
    <script src="../userelements/function.js"></script>
  </head>
  <body onload="changeName();changeLinkProduct();">
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
              <li><a href="robot.php">ROBOT</a></li>
              <li><a href="doll.php">BÚP BÊ</a></li>
              <li><a href="lego.php">ĐỒ CHƠI LẮP GHÉP</a></li>
              <li><a href="dcvd.php">ĐỒ CHƠI VẬN ĐỘNG</a></li>
            </ul>
          </li>
          <!-- Thêm phần tìm kiếm -->
          <li>
            <div class="search-container">
              <input type="text" id="search-input" placeholder="Tìm kiếm..." />
              <a href="timkiem1.php">
                <button type="button" id="search-button">Tìm kiếm</button>
              </a>
            </div>
          </li>

          <div class="search-advanced-container">
            <a href="../userelements/advancedsearch.php">
              <button id="search-advanced-button">Tìm kiếm nâng cao</button>
            </a>
          </div>

          <!-- Thêm phần đăng nhập/đăng ký -->
          <div class="user-container">
            <a id="login-link" href="../userelements/login.php" class="login-link"><span id="taikhoan"> Đăng nhập</span></a>
            <a id="linkLogOut2" href="../userelements/register.php" class="register-link" onclick="checkLogOut2()"><span id="dangxuat">Đăng ký</span></span></a>
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
    <img class="img-adver" src="../../adverImange/img1.jpg" />
    <div class="body">
      <div class="list-header"><b>BÚP BÊ</b></div>
      <div class="product-list">
        <a class="product" href="../doll/doll1.php">
          <img src="../../productImage/doll/doll1.jpg" />
          <div class="product-detail">
            <div class="name">
              Mô hình nhân vật SMP CHAINSAW MAN - DENJI BANDAI CANDY
            </div>
            <div class="price">1,369,000 VNĐ</div>
          </div>
        </a>
        <a class="product" href="../doll/doll2.php">
          <img src="../../productImage/doll/doll2.jpg" />
          <div class="product-detail">
            <div class="name">Bánh Mì Barber Bread</div>
            <div class="price">72,000 VNĐ</div>
          </div>
        </a>
        <a class="product" href="../doll/doll3.php">
          <img src="../../productImage/doll/doll3.jpg" />
          <div class="product-detail">
            <div class="name">MLP Quả trứng kỳ diệu</div>
            <div class="price">69,000 VNĐ</div>
          </div>
        </a>
        <a class="product" href="../doll/doll4.php">
          <img src="../../productImage/doll/doll4.jpg" />
          <div class="product-detail">
            <div class="name">Hatchimals Pixes cánh thần tiên</div>
            <div class="price">244,000 VNĐ</div>
          </div>
        </a>
      </div>
      <div style="margin-left: 48%">
        <a href="doll.php"><button class="page">1</button></a>
      </div>
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
          <li class="footer-data"></li>
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
