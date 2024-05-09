<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lock And Unlock User 3979 Toys</title>
        <link rel="stylesheet" href="../../index.css" type="text/css">
        <link rel="stylesheet" href="../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="adminelements.css" type="text/css">
        <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
        <style>
            i.ti-lock{
                font-size: 35px;
                color: red;
            }
            i.ti-unlock{
                font-size: 35px;
                color: rgb(37, 207, 37);
            }
            button.locknunlock{
                cursor: pointer;
                width: fit-content;
                background-color: white;
                padding: 5px 3px;
                border-radius: 4px;
                margin-top: auto;
                margin-left: auto;
                margin-right: 10px;
                margin-bottom: 10px;
            }
        </style>
        <script>
            function change(statusID,iconID){
               var element = document.getElementById(iconID)

               if(element.classList.contains("ti-lock"))
               {
                if(confirm("Bạn có chắc chắn muốn MỞ KHÓA tài khoản này không !!!")){
                    element.classList.add("ti-unlock")
                    element.classList.remove("ti-lock")
                    document.getElementById(statusID).innerText = "Mở Khóa"
                }
               }else{
                if(confirm("Bạn có chắc chắn muốn KHÓA tài khoản này không !!!")){
                    element.classList.add("ti-lock")
                    element.classList.remove("ti-unlock")
                    document.getElementById(statusID).innerText = "Khóa"
                }
               }
            }
        </script>
    </head>
    <body> 
      <header style="width: 100%;">
        <div id="header">
          <!-- Begin nav -->
          <ul class="menubar" id="nav">
            <li><a href="../../indexadmin.php">home</a></li>
            <!-- Thêm phần tìm kiếm -->
  
            <!-- Thêm phần đăng nhập/đăng ký -->
            
            <!-- Thêm phần giỏ hàng -->
        </ul>
        <!-- End nav -->
        <div class="user-container" style="margin-left: auto;margin-right: 30px;">
            <div class="admin-popup">
              <!-- <i class="user-icon ti-user">Admin</i> -->
              <div>
                <img src="avauser/moi.jpg"><span>Moi</span>
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
        <h1 style="margin: 15px 20px;text-align: center;">Khóa Tài Khoản</h1>
        <div class="body-user">

            <div class="user-row">  <!--ROW 1-->
                <div class="user">
                    <img src="avauser/anh.jpg">
                    <div class="information-user">
                        <span class="name">- Tên: Lê Đức Anh</span>
                        <span class="age">- Tuổi: 23</span>
                        <span class="email">- Email: fuckboiz@gmail.com</span>
                        <span class="status">- Trạng thái tài khoản: <span id="status1">Mở khoá</span></span>
                    </div>
                    <button class="locknunlock" onclick="change('status1','icon1');"><i id="icon1" class="ti-unlock"></i></button>
                </div>
                <div class="user">
                    <img src="avauser/viet+.jpg">
                    <div class="information-user">
                        <span class="name">- Tên: Nguyễn Thành Việt</span>
                        <span class="age">- Tuổi: 19</span>
                        <span class="email">- Email: vietplus369@gmail.com</span>
                        <span class="status">- Trạng thái tài khoản: <span id= "status2">Mở khoá</span></span>
                    </div>
                    <button class="locknunlock" onclick="change('status2','icon2');"><i id = "icon2" class="ti-unlock"></i></button>
                </div>
                <div class="user">
                    <img src="avauser/ronaldovn.jpg">
                    <div class="information-user">
                        <span class="name">Tên: Nguyễn Thành Đạt </span>
                        <span class="age">Tuổi: 20</span>
                        <span class="email">Email: jj2803@gmail.com</span>
                        <span class="status">Trạng thái tài khoản: <span id="status3">Mở khoá</span></span>
                    </div>
                    <button class="locknunlock" onclick="change('status3','icon3');"><i id = "icon3" class="ti-unlock"></i></button>
                </div>
            </div>

            <div class="user-row">  <!--ROW 2-->
                <div class="user">
                    <img src="avauser/moi.jpg">
                    <div class="information-user">
                        <span class="name">- Tên: Trương Lê Gia Hưng</span>
                        <span class="age">- Tuổi: 15</span>
                        <span class="email">- Email: trlgh@gmail.com</span>
                        <span class="status">- Trạng thái tài khoản: <span id="status4">Khoá</span></span>
                    </div>
                    <button class="locknunlock" onclick="change('status4','icon4');"><i id="icon4" class="ti-lock"></i></button>
                </div>
                <div class="user">
                    <img src="avauser/quan.jpg">
                    <div class="information-user">
                        <span class="name">- Tên: Trần Minh Quân</span>
                        <span class="age">- Tuổi: 18</span>
                        <span class="email">- Email: pongpink0802@gmail.com</span>
                        <span class="status">- Trạng thái tài khoản: <span id="status5">Khoá</span></span>
                    </div>
                    <button class="locknunlock" onclick="change('status5','icon5');"><i id = "icon5" class="ti-lock"></i></button>
                </div>
                <div class="user">
                    <img src="avauser/trieu.jpg">
                    <div class="information-user">
                        <span class="name">- Tên: Phạm Ngọc Triều</span>
                        <span class="age">- Tuổi: 30</span>
                        <span class="email">- Email: trieutrieu@gmail.com</span>
                        <span class="status">- Trạng thái tài khoản: <span id="status6">Khoá</span></span>
                    </div>
                    <button class="locknunlock" onclick="change('status6','icon6');"><i id="icon6" class="ti-lock"></i></button>
                </div>
            </div>

            <a href="../../indexadmin.php" style="float: right;margin-right: 45px;margin-top: 20px;"><button style="padding: 5px 15px;cursor: pointer;"><i class="ti-home" style="margin-right: 5px;"></i>Quay lại trang chủ</button></a>
        </div>
        <footer>
                        
            <ul style="margin-left: 3%;" class="footer">
                <li class="footer-data"><img src="../../phoneicon.png" style="width:20px;"> Hotline: 0939.797979 - 0979.393939 </li>
                <li class="footer-data"><img src="../../emailicon.png" style="width:20px;"> Email: 3979team@gmail.com</li>
                <li class="footer-data"><img src="../../addressicon.png" style="width:20px;"> Địa chỉ: 728 Lê Trọng Tấn, Phường Sơn Kì, Quận Tân Phú, TP.HCM  </li>
                <li class="footer-data"><img src="../../timeicon.png" style="width:20px;"> Thời gian hoạt động: 10:00 - 21:00</li>
            </ul>
            <div style="margin-left: 10%;">
            <p class="footer-data" style="margin-bottom: 5%;"><img src="../../connecticon.png" style="width:20px;"> Kết nối với chúng tôi qua các nền tảng sau:</p>
            <img src="../../fbicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
            <img src="../../instaicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
            <img src="../../youtubeicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
            </div>
            <img src="../../bocongthuong.png" style="margin-left: 10%;">
        </footer>
    </body>
</html>