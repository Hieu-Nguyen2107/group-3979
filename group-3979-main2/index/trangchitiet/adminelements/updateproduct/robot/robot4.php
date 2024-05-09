<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../../index.css" type="text/css">
        <link rel="stylesheet" href="../../../chitiet.css" type="text/css">
        <link rel="stylesheet" href="../../../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="shortcut icon" type="image/png" href="../../../../logo.jpg">
        <script src="../update.js"></script>
    </head>
  <body>
    <header style="width: 100%;">
      <div id="header">
        <!-- Begin nav -->
        <ul class="menubar" id="nav">
          <li><a href="../../updateproduct.php">home</a></li>
      </ul>
      <div class="user-container" style="margin-left: auto;margin-right: 30px;">
        <div class="admin-popup">
          <!-- <i class="user-icon ti-user">Admin</i> -->
          <div>
            <img src="../../avauser/moi.jpg"><span>Moi</span>
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
      </div>
  </header>
  <div style="display: flex;margin-top: 40px;">
    <div class="img-product">
      <div><img id="delete" class="img-chitiet" src="../../../../productImage/robot/robot4.jpg"></div>
      <div class="add-img">
          <div id="img-delete" class="element delete" onclick="deleteIMG();">
              <img id="need-delete" src="../../../../productImage/robot/robot4.jpg" style="display: block;">
              <div id="nothing" class="nothing"></div>
              <div id="trash" class="ti-trash"></div>
              <input id="images" type="file" accept="images/*" style="display: none;">
          </div>
          <div id="img-add" class="element add" onclick="document.getElementById('images1').click();">
              <div class="bgadd"></div>
              <div class="ti-plus"></div>
              <input id="images1" type="file" accept="images/*" style="display: none;">
          </div>
          <div class="element add" onclick="document.getElementById('images2').click();">
              <div class="bgadd"></div>
              <div class="ti-plus"></div>
              <input id="images2" type="file" accept="images/*" style="display: none;">
          </div>
      </div>
  </div>

  <div>
    <div class="edit">
      <div>
          <i class="ti-pencil" onclick="update('body')"></i>
          <i class="ti-save" onclick="save('body')"></i>
      </div>
    </div>

    <div id="body" contenteditable="false">
      <div style="max-width: fit-content;">
          <div class="product-name"><b>Đồ chơi Robot biến hình Xe xúc VECTO VT34 </b>
          </div>
          <div class="product-price"><b>129,000 VNĐ</b>
          </div>
      </div>
      <div style="line-height: 30px;"> <!--Describe-->
          <p><b>Mô Tả Sản Phẩm</b>
            <p>
          <p>
              <h3>Đồ Chơi Robot Biến Hình Xe Xúc VECTO VT34</h3>
              Robot biến hình thành Xe xúc từ VECTO – Món đồ chơi biến hình siêu thú vị dành cho các bé trai, và giúp bé rèn luyện vận động tinh cực bổ ích.

              <br>
              + Bé dùng tay để tự biến đổi đồ chơi từ dạng robot thành Xe xúc và ngược lại
              <br>
              + Sưu tập trọn bộ 5 robot để ghép chúng lại thành 1 robot lớn siêu ngầu:              
            <br>
            1/ Robot biến hình Xe cứu hỏa thang nâng
              <br>
            2/ Robot biến hình Xe xúc
            <br>
            3/ Robot biến hình thành Xe thang nâng
            <br>
            4/ Robot biến hình thành Xe cần cẩu
            <br>    
            5/ Robot biến hình thành Xe vận chuyển tên lửa
            <br>   
            <b>THÔNG TIN VỀ SẢN PHẨM:</b>
            <br>   
            Kích thước hộp hàng: 38.0 x 8.0 x 26.0 cm
            <br>   
            Chủ đề: VECTO ROBOT
            <br>   
            Năm sản xuất: 2023
            <br>   
            Xuất xứ thương hiệu: Việt Nam
            <br>   
            Chất liệu: Nhựa (An toàn tuyệt đối với bé)
            <br>   
            <b>VECTO - THẾ GIỚI ĐỒ CHƠI BÉ TRAI CỰC ĐỈNH</b>
            <br>   
            VECTO là thương hiệu đồ chơi dành riêng cho các bé trai, với các dòng đồ chơi trải dài từ điều khiển từ xa đến lắp ráp. Với mong muốn giúp các bé trai có sự phát triển toàn diện từ trí não đến thể chất, Vecto đã phát triển đa dạng các loại đồ chơi nhằm mang đến cho bé nhiều lựa chọn nhất có thể, một số dòng đồ chơi nổi bật:
            <br>   
            - ROBOT ĐIỀU KHIỂN – PHÁT TRIỂN TƯ DUY SÁNG TẠO
            <br>   
            - XE ĐIỀU KHIỂN – PHÁT TRIỂN TƯ DUY PHƯƠNG HƯỚNG
            <br>   
            - ĐỒ CHƠI BAY – PHÁT TRIỂN TƯ DUY LOGIC
            <br>   
            - ĐỒ CHƠI LẮP RÁP DIY – PHÁT TRIỂN KỸ NĂNG VẬN ĐỘNG TINH
            <br>   
            Và còn nhiều dòng đồ chơi khác từ VECTO đang đợi bé khám phá.
            <br>   
            
              
          </p>
      </div>
    </div>
    <a href="../../updateproduct.php" style="float: right;margin-right: 45px;margin-top: 20px;margin-bottom: 20px;"><button style="padding: 5px 15px;cursor: pointer;"><i class="ti-arrow-left" style="margin-right: 5px;"></i>Quay lại</button></a>
  </div>

  </div>

  <div style="display: block;">
    <footer style="margin-top: 5%;">
      <ul style="margin-left: 3%;" class="footer">
          <li class="footer-data"><img src="../../../../phoneicon.png" style="width:20px;"> Hotline: 0939.797979 - 0979.393939 </li>
          <li class="footer-data"><img src="../../../../emailicon.png" style="width:20px;"> Email: 3979team@gmail.com</li>
          <li class="footer-data"><img src="../../../../addressicon.png" style="width:20px;"> Địa chỉ: 728 Lê Trọng Tấn, Phường Sơn Kì, Quận Tân Phú, TP.HCM  </li>
          <li class="footer-data"><img src="../../../../timeicon.png" style="width:20px;"> Thời gian hoạt động: 10:00 - 21:00</li>
          <li class="footer-data"></li>
      </ul>
      <div style="margin-left: 10%;">
      <p class="footer-data" style="margin-bottom: 5%;"><img src="../../../../connecticon.png" style="width:20px;"> Kết nối với chúng tôi qua các nền tảng sau:</p>
      <img src="../../../../fbicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
      <img src="../../../../instaicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
      <img src="../../../../youtubeicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
      </div>
      <img src="../../../../bocongthuong.png" style="margin-left: 10%;">
    </footer>
  </div>
</body>
</html>