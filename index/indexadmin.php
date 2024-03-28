<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin 3979 Toys</title>
        <link rel="stylesheet" href="index.css" type="text/css">
        <link rel="stylesheet" href="themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="trangchitiet/chitiet.css" type="text/css">
        <link rel="shortcut icon" type="image/png" href="logo.jpg">
    </head>
    <body>
        <header style="width: 100%;">
            <div id="header">
              <ul class="menubar" id="nav">
                <li><a href="">home</a></li>
              </ul>
              <div class="user-container" style="margin-left: auto;margin-right: 30px;">
                <div class="admin-popup">
                  <!-- <i class="user-icon ti-user">Admin</i> -->
                  <div>
                    <img src="trangchitiet/adminelements/avauser/moi.jpg"><span>Moi</span>
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
        <h1 style="text-align: center; margin-top: 20px;">BẠN ĐANG SỬ DỤNG CHẾ ĐỘ ADMIN</h1>
          <div class="function">
            <div class="product-manage">
            <div><button onclick="showmenu('product-manage-menu');">Quản lý sản phẩm</button></div>
            <div id="product-manage-menu">
              <div><a href="trangchitiet/adminelements/addproduct.php"><button>Thêm Sản Phẩm</button></a></div> <!--DONE-->
              <div><a href="trangchitiet/adminelements/deleteproduct.php"><button>Xóa Sản Phẩm</button></a></div> <!--DONE-->
              <div><a href="trangchitiet/adminelements/updateproduct.php"><button>Sửa Sản Phẩm</button></a></div> <!--DONE-->
            </div>
            </div>
            <script>
              function showmenu(id){
                var x = document.getElementById(id).style.display;
                if (x == "block"){
                  document.getElementById(id).style.display = "none";
                }else{
                  document.getElementById(id).style.display = "block";
                }
              }
            </script>
            <div class="user-manage">
            <div><button onclick="showmenu('user-manage-menu');">Quản lý người dùng</button></div>
            <div id="user-manage-menu">
              <div><a href="trangchitiet/adminelements/checkuser.php"><button>Kiểm Tra Thông Tin Người Dùng</button></a></div><!--DONE-->
              <div><a href="trangchitiet/adminelements/adduser.php"><button>Thêm Người Dùng</button></a></div>  <!--DONE-->
              <div><a href="trangchitiet/adminelements/updateuser.php"><button>Sửa Thông Tin Người Dùng</button></a></div>  <!--DONE-->
              <div><a href="trangchitiet/adminelements/lockuser.php"><button>Khóa Người Dùng</button></a></div> <!--DONE-->
            </div>
            </div>
            <div><a href="trangchitiet/adminelements/manageuserreceipt.php"><button>Quản Lý Đơn Hàng Người Dùng</button></a></div><!--Xem chi tiết các đơn hàng, hiện thỉ trạng thái đơn hàng (đang đóng gói,đang vận chuyển, đã giao)-->
            <div><a href="trangchitiet/adminelements/statistics.php"><button>Thống Kê Tình Hình Kinh Doanh</button></a></div><!--Hiện thỉ và tính tổng các đơn hàng theo tiêu chí : số lượng sản phẩm của 1 loại sản phẩm khoảng thời gian-->
          </div>
        <div style="display: block; margin-top: auto;">
          <footer>
                          
              <ul style="margin-left: 3%;" class="footer">
                  <li class="footer-data"><img src="phoneicon.png" style="width:20px;"> Hotline: 0939.797979 - 0979.393939 </li>
                  <li class="footer-data"><img src="emailicon.png" style="width:20px;"> Email: 3979team@gmail.com</li>
                  <li class="footer-data"><img src="addressicon.png" style="width:20px;"> Địa chỉ: 728 Lê Trọng Tấn, Phường Sơn Kì, Quận Tân Phú, TP.HCM  </li>
                  <li class="footer-data"><img src="timeicon.png" style="width:20px;"> Thời gian hoạt động: 10:00 - 21:00</li>
              </ul>
              <div style="margin-left: 10%;">
              <p class="footer-data" style="margin-bottom: 5%;"><img src="connecticon.png" style="width:20px;"> Kết nối với chúng tôi qua các nền tảng sau:</p>
              <img src="fbicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
              <img src="instaicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
              <img src="youtubeicon.png" style="width: 70px; height: 70px; margin-left: 8%;">
              </div>
              <img src="bocongthuong.png" style="margin-left: 10%;">
          </footer>
        </div>
    </body>
</html>