<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Product 3979 Toys</title>
        <link rel="stylesheet" href="../../index.css" type="text/css">
        <link rel="stylesheet" href="../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="adminelements.css" type="text/css">
        <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
    </head>
    <body>
      <header style="width: 100%;">
        <div id="header">
          <!-- Begin nav -->
          <ul class="menubar" id="nav">
            <li><a href="../../indexadmin.php">home</a></li>
            

          </ul>

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
        <h1 style="margin: 15px 20px;text-align: center;">Thêm Sản Phẩm</h1>
        <form action="" style="line-height: 25px;margin: 20px 40px;" onsubmit="return check();">
            <label for="producttype">Loại sản phẩm:</label><br/>
            <select>
              <option value="robot">Robot</option>
              <option value="doll">Búp bê</option>
              <option value="lego">Đồ chơi lắp ghép</option>
              <option value="dcvd">Đồ chơi vận động</option>
            </select>
            <br/>
            <label for="productname">Tên sản phẩm:</label><br/>
            <input type="text" id="pname" name="pname" placeholder="Tên sản phẩm"><br/>
            <label for="productprice">Giá tiền sản phẩm:</label><br/>
            <input type="text" id="pprice" name="pprice" placeholder="&#8363 Giá tiền sản phẩm"><br/>
            <label for="productimage">Hình ảnh sản phẩm:</label><br/>
            <input type="file" id="pimage" name="pimage" accept="img/png, img/jpeg"><br/>
            <label for="productdescribe">Mô tả sản phẩm:</label><br/>
            <textarea type="text" id="pdescribe" name="pdescribe" rows="25" cols="150" placeholder="Mô tả sản phẩm"></textarea><br/>
            <input class="submit" type="submit" value="Thêm">
            <script>
              function check(){
                let name = document.getElementById('pname').value;
                let type = document.getElementById('ptype').value;
                let price = document.getElementById('pprice').value;
                if ( name == "" || type == "" || price == ""){
                  alert("Vui lòng điền đầy đủ thông tin !!!");
                  return false;
                }else{
                  alert("Thêm sản phẩm thành công !!!");
                  return true;
                }
              }
            </script>
            <input class="reset" type="reset" value="Reset">
        </form>
        <div style="display: block;margin-top: auto;">
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
        </div>
    </body>
</html>