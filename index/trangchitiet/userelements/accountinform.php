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
    <link rel="stylesheet" href="accountinform.css" type="text/css" />
    <script src="function.js"></script>
    <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
  </head>
  <body onload="changeName();changeLinkIndex2();">
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
            <a href="advancedsearch.php">
              <button id="search-advanced-button">Tìm kiếm nâng cao</button>
            </a>
          </div>

          <!-- Thêm phần đăng nhập/đăng ký -->
          <div class="user-container">
            <a id="login-link" href="accountinform.php" class="login-link"><span id="taikhoan"> Đăng nhập</span></a>
            <a id="linkLogOut2" href="register.php" class="register-link" onclick="checkLogOut2()"><span id="dangxuat">Đăng ký</span></span></a>
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

    <div class="body-account">
        <div class="inform">
            <div>
                <span><b>Thông tin cá nhân</b></span>
                <span>Tên: Lê Đức Anh</span>
                <span>Tuổi: 19</span>
                <span>Địa chỉ: 333 Võ Văn Kiệt, Quận 5, Thành phố Hồ Chí Minh</span>    
                <span>SĐT: 0909090909</span>
            </div>
        </div>
        <div class="receipt-history">

            <h3 style="margin-bottom: 20px;">Lịch sử đơn hàng</h3>

            <table>

                <tr>
                    <td><b>Mã Đơn Hàng</b></td>
                    <td><b>Thời gian</b></td>
                    <td><b>Tổng cộng</b></td>
                    <td><b>Phương thức</b></td>
                    <td><b>Trạng thái đơn hàng</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>001</td>
                    <td>10/12/2023 14:57</td>
                    <td>&#8363 2,247,000</td>
                    <td>Chuyển khoản</td>
                    <td>Đang vận chuyển</td>
                    <td><a href="receipthistory/001.php">Xem chi tiết đơn hàng</a></td>
                </tr>

            </table>
        </div>
    </div>

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
  </body>
</html>