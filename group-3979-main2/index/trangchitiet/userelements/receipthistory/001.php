<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Product 3979 Toys</title>
        <link rel="stylesheet" href="../../../index.css" type="text/css">
        <link rel="stylesheet" href="../../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="../../receipt/receipt.css" type="text/css">
        <script src="../function.js"></script></head>
        <link rel="shortcut icon" type="image/png" href="../../../logo.jpg">
    <body onload="changeName();changeLinkReceiptHistory();">
        <header>
            <div id="header">
              <!-- Begin nav -->
              <ul class="menubar" id="nav">
                <li><a href="../../../index.php">home</a></li>
                <li>
                  <a href="">
                    product
                    <i class="nav-arrow-down ti-angle-down"></i>
                  </a>
                  <ul class="subnav">
                    <li>
                      <a href="../../phanloaisanpham/robot.php">ROBOT</a>
                    </li>
                    <li>
                      <a href="../../phanloaisanpham/doll.php">BÚP BÊ</a>
                    </li>
                    <li>
                      <a href="../../phanloaisanpham/lego.php"
                        >ĐỒ CHƠI LẮP GHÉP</a
                      >
                    </li>
                    <li>
                      <a href="../../phanloaisanpham/dcvd.php"
                        >ĐỒ CHƠI VẬN ĐỘNG</a
                      >
                    </li>
                  </ul>
                </li>
                <!-- Thêm phần tìm kiếm -->
                <li>
                  <div class="search-container">
                    <input type="text" id="search-input" placeholder="Tìm kiếm..." />
                    <a href="../../phanloaisanpham/timkiem1.php">
                      <button type="button" id="search-button">Tìm kiếm</button>
                    </a>
                  </div>
                </li>
                <!--Thêm phần tìm kiếm nâng cao-->
                <div class="search-advanced-container">
                  <a href="../advancedsearch.php">
                    <button id="search-advanced-button">Tìm kiếm nâng cao</button>
                  </a>
                </div>
      
                <!-- Thêm phần đăng nhập/đăng ký -->
                <div class="user-container">
                  <a id="login-link" href="../login.php" class="login-link"><span id="taikhoan"> Đăng nhập</span></a>
                  <a id="linkLogOut2" href="../register.php" class="register-link" onclick="checkLogOut3();"><span id="dangxuat">Đăng ký</span></span></a>
                  <i class="user-icon ti-user"></i>
                </div>
      
                <!-- Thêm phần giỏ hàng -->
                <div class="cart-container">
                  <a href="../shoppingCart.php" class="cart-icon ti-shopping-cart"></a>
                  <span class="cart-count"></span>
                </div>
              </ul>
              <!-- End nav -->
            </div>
          </header>
      <div class="body-receipt">
        <h1 style="text-align: center;margin: 20px 10px;">Thông Tin Đơn Hàng</h1>
        <!-- <div id="code"><h1>MÃ ĐƠN HÀNG: #001</h1></div> -->
        <div class="user-information">
            <div><i class="ti-user"></i><b>Thông tin khách hàng</b></div>
            <div id="information">
                Tên: Lê Đức Anh    <br/>
                SĐT: 0909090909  <br/>
                Địa chỉ: 333 Võ Văn Kiệt, Quận 5, Thành phố Hồ Chí Minh<br/>
            </div>
        </div>
        <div id="receipt-list">

            <div id="product">
                <img src="../../../productImage/robot/robot1.jpg">
                <div id="name">
                    Robot chú chó tinh nghịch
                </div>
                <div id="detail">
                    <span id="amount">x1</span> <br/>
                    <span>&#8363 649,000 VNĐ</span> <br/>
                    <span id="price-container"><b>Tổng cộng: &#8363 <span id="price">649,000 VNĐ</span></b></span>
                </div>
            </div>

            <div id="product">
                <img src="../../../productImage/robot/robot2.jpg">
                <div id="name">
                    Mô hình Earthspark Warrior Thrash
                </div>
                <div id="detail">
                    <span id="amount">x2</span> <br/>
                    <span>&#8363 799,000 VNĐ</span> <br/>
                    <span id="price-container"><b>Tổng cộng: &#8363 <span id="price">1,598,000 VNĐ</span></b></span>
                </div>
            </div>

            <div id="sum">
                <span id="logo"><b><i class="ti-money"></i>Thành tiền:</b></span>  <br/>
                <span id="total-price">&#8363 2,247,000 VNĐ</span>
            </div>
      </div>
      <a class="back-button" href="../accountinform.php"><button class="ti-arrow-left"><span style="margin-left: 4px;word-spacing: -3px;"><b>Quay lại</b></span></button></a>
      </div>
      <div style="display: block;margin-top: auto;">
        <footer>
                        
            <ul style="margin-left: 3%;" class="footer">
                <li class="footer-data"><img src="../../../phoneicon.png" style="width:20px;"> Hotline: 0939.797979 - 0979.393939 </li>
                <li class="footer-data"><img src="../../../emailicon.png" style="width:20px;"> Email: 3979team@gmail.com</li>
                <li class="footer-data"><img src="../../../addressicon.png" style="width:20px;"> Địa chỉ: 728 Lê Trọng Tấn, Phường Sơn Kì, Quận Tân Phú, TP.HCM  </li>
                <li class="footer-data"><img src="../../../timeicon.png" style="width:20px;"> Thời gian hoạt động: 10:00 - 21:00</li>
            </ul>
            <div style="margin-left: 10%;">
            <p class="footer-data" style="margin-bottom: 5%;"><img src="../../../connecticon.png" style="width:20px;"> Kết nối với chúng tôi qua các nền tảng sau:</p>
            <img src="../../../fbicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
            <img src="../../../instaicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
            <img src="../../../youtubeicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
            </div>
            <img src="../../../bocongthuong.png" style="margin-left: 10%;">
        </footer>
      </div>
    </body>
</html>