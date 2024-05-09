<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../index.css" type="text/css">
        <link rel="stylesheet" href="../chitiet.css" type="text/css">
        <link rel="stylesheet" href="../../themify-icons-font/themify-icons/themify-icons.css">
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
                    <li><a href="../phanloaisanpham/robot.php">ROBOT</a></li>
                    <li><a href="../phanloaisanpham/doll.php">BÚP BÊ</a></li>
                    <li><a href="../phanloaisanpham/lego.php">ĐỒ CHƠI LẮP GHÉP</a></li>
                    <li><a href="../phanloaisanpham/dcvd.php">ĐỒ CHƠI VẬN ĐỘNG</a></li>
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
        <div style="display: flex;margin-top: 40px;">
        <div class="img-product">
            <img class="img-chitiet" src="../../productImage/robot/robot1.jpg">
        </div>
        <div>
          <div style="max-width: fit-content;">
              <div class="product-name"><b>Robot chú chó tinh nghịch</b></div>
              <div class="product-price"><b>649,000 VNĐ</b></div>
              <div style="display: flex;margin-left: 30px;">
                  <button class="button-amount decrease"><i class="ti-minus"></i></button>
                  <input class="amount" type="text"value="1" min="1" readonly>
                  <button class="button-amount increase"><i class="ti-plus"></i></button>
              </div>
              <script>
                  let increase = document.querySelector('.increase');
                  let amount = document.querySelector('.amount');
                  let decrease = document.querySelector('.decrease');

                  let v = 0;

                  increase.onclick = function(){
                      v++;
                      amount.value = v;
                  }
                  
                  decrease.onclick = function(){
                      if(amount.value != 1){
                      if (v == 1)
                      {
                          amount.value = 1;
                      }
                      else{
                          v--;
                          amount.value = v;
                      }
                  }
                  }
              </script>
              <div style="margin: 20px 0">
              <form action="" method="post"> 
              <button class="button" onclick="checkOrder();">Mua Ngay</button>
              <!-- <button class="button" onclick="checkAddCart();">Thêm Vào Giỏ Hàng</button> -->
              <input type="submit" name="addcart" value="Dat Hang" />
              <input type="hidden" name="tensp" value="Robot chu cho tinh nghich" />
              <input type="hidden" name="gia" value="649,000" />
              <input type="hidden" name="hinh" value="../../productImage/robot/robot1.jpg" />
              </div>
              </form>    
          </div>
          <div style="line-height: 30px;"> <!--Describe-->
            <p><b>Mô Tả Sản Phẩm</b>    <p>
            <p>
            <h3>Đồ Chơi VECTO Robot Chú Chó Tinh Nghịch - Nô Đùa Cùng Bé VT18012</h3>
            
            Dễ thương và lém lỉnh, tinh nghịch nhưng đầy tháo vát. Robot chú chó tinh nghịch đã đến rồi đây. Các bé và ba mẹ đã sẵn sàng rước chú về chưa nè?
                <br>
            - Khả năng sủa giống hệt chó thật
                <br>
            - Nhảy múa theo nhạc cực Cool
                <br>
            - Chức năng lập trình một chuỗi động tác độc đáo
                <br>
            - Điều khiển linh hoạt tới, lui, trái , phải
                <br>
            Ngoài các chức năng nổi trội trên với thiết kế vẻ mặt cực kỳ dễ thương nhưng không kém phần nghịch ngợm sẽ giúp cho các giây phút vui chơi của bé vô cùng hào hứng.
                <br>
            <b>Bộ sản phẩm bao Robot chú chó tinh nghịch gồm:</b>
                <br>
            1 x Robot chú chó tinh nghịch (có kèm pin sạc bên trong)
                <br>
            1 x Remote điều khiển (xài pin tiểu Không kèm pin)
                <br>
            1 x Cáp sạc USB
                <br>
            <b>VECTO - THẾ GIỚI ĐỒ CHƠI BÉ TRAI CỰC ĐỈNH</b>
                <br>
            VECTO là thương hiệu đồ chơi dành riêng cho các bé trai, với các dòng đồ chơi trải dài từ đồ chơi điều khiển từ xa cho đến các dòng đồ chơi lắp ráp. Với mong muốn giúp các bé trai có một sự phát triển toàn diện từ trí não đến thể chất, Vecto đã phát triển đa dạng các loại đồ chơi để đem đến cho bé nhiều lựa chọn nhất có thể, có thể kể đến như:
                <br>
            - ROBOT ĐIỀU KHIỂN – PHÁT TRIỂN TƯ DUY SÁNG TẠO
                <br>
            - XE ĐIỀU KHIỂN – PHÁT TRIỂN TƯ DUY PHƯƠNG HƯỚNG
                <br>
            - ĐỒ CHƠI BAY – PHÁT TRIỂN TƯ DUY LOGIC
                <br>
            - ĐỒ CHƠI LẮP RÁP DIY – PHÁT TRIỂN KỸ NĂNG VẬN ĐỘNG TINH
                <br>
            Và còn nhiều dòng đồ chơi khác đang đợi bé khám phá
            </p>
        </div>
          <div style="float: right;margin: 20px 30px;"><a href="../../index.php"><button style="font-size: 17px;"><i class="ti-arrow-left"></i>Quay lại</button></a></div>
        </div>
        </div>
        <div style="display: block;margin-top: auto;">
            <footer>
                <ul style="margin-left: 3%;" class="footer">
                    <li class="footer-data"><img src="../../phoneicon.png" style="width:20px;"> Hotline: 0939.797979 - 0979.393939 </li>
                    <li class="footer-data"><img src="../../emailicon.png" style="width:20px;"> Email: 3979team@gmail.com</li>
                    <li class="footer-data"><img src="../../addressicon.png" style="width:20px;"> Địa chỉ: 728 Lê Trọng Tấn, Phường Sơn Kì, Quận Tân Phú, TP.HCM  </li>
                    <li class="footer-data"><img src="../../timeicon.png" style="width:20px;"> Thời gian hoạt động: 10:00 - 21:00</li>
                    <li class="footer-data"></li>
                </ul>
                <div style="margin-left: 10%;">
                <p class="footer-data" style="margin-bottom: 5%;"><img src="../../connecticon.png" style="width:20px;"> Kết nối với chúng tôi qua các nền tảng sau:</p>
                <img src="../../fbicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
                <img src="../../instaicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
                <img src="../../youtubeicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
                </div>
                <img src="../../bocongthuong.png" style="margin-left: 10%;">
            </footer>
        </div>
    </body>
</html>