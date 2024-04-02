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
        <?php include "headerIndexAdmin.php" ; ?>
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
          <?php include "footerIndexAdmin.php" ; ?>
        </div>
    </body>
</html>