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
            <img class="img-chitiet" src="../../productImage/doll/doll3.jpg">
        </div>
        <div>
        <div style="max-width: fit-content;">
            <div class="product-name"><b>MLP Quả trứng kỳ diệu</b></div>
            <div class="product-price"><b>72,000 VNĐ</b></div>
            <div style="display: flex;margin-left: 30px;">
                <button class="button-amount decrease"><i class="ti-minus"></i></button>
                <input class="amount" type="text"value="1" readonly>
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
              <button class="button" onclick="checkOrder();">Mua Ngay</button>
              <button class="button" onclick="checkAddCart();">Thêm Vào Giỏ Hàng</button>
            </div>
        </div>
            <div style="line-height: 30px;"> <!--Describe-->
                <p>
                <h3> Đồ Chơi MLP Quả Trứng Kỳ Diệu MY LITTLE PONY A8330T</h3>
                
                

                MLP quá trứng kỳ diệu MY LITTLE PONY A8330T là mô hình đồ chơi mô phỏng sinh động theo nhân vật hoạt hình trong bộ phim nổi tiếng My Little Pony. Hình dáng chú ngựa nhiều màu sắc vô cùng đáng yêu sẽ tạo hứng thú cho bé khi chơi.  Sở hữu ngay quả trứng kỳ diệu để cùng con khám phá những bí ẩn bên trong nhé!
                <br>
                
                <b>MLP quá trứng kỳ diệu</b> được ưa chuộng bởi những đặc điểm nổi bật sau:
                <br>
                
               - Kích thước bao bì: 9x5x5 cm, trọng lượng 50 gram, nhỏ gọn, thích hợp cho việc cầm nắm của trẻ nhỏ.
                <br>
               - Chú ngựa Pony đặc trưng với nhiều màu sắc, chiếc bờm xinh đẹp, là một biểu tượng độc đáo không kém phần hiện đại. 
                <br>
              - Đồ chơi giúp trẻ tăng cường trí thông minh, tư duy tốt hơn trong quá trình phối hợp các phụ kiện cho nhân vật chú ngựa Pony.
                <br>
                - Thiết kế có hình quả trứng tròn, nhẵn, không góc cạnh, không làm trầy xước làn da mỏng manh của con.
                <br>
                - Sản phẩm được làm từ nhựa sáng bóng, không chứa chất độc hại, an toàn cho sức khỏe của trẻ.
                <br>
                - Sản phẩm được khuyên dành cho các bé gái ở mọi lứa tuổi. 
                
              
                </p>
            </div>
            <div style="float: right;margin: 15px 30px;"><a href="../../index.php"><button style="font-size: 17px;"><i class="ti-arrow-left"></i>Quay lại</button></a></div>
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