<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../../index.css" type="text/css">
        <link rel="stylesheet" href="../../../chitiet.css" type="text/css">
        <link rel="stylesheet" href="../../../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="shortcut icon" type="image/png" href="../../../../logo.jpg">
        <script src="../update.js"></script>
        <style>
            i.ti-pencil{
                border: 1px solid black;
                border-radius: 3px;
                cursor: pointer;
                color: black;
            }
            i.ti-pencil:hover{
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            }
        </style>
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
                <div><img id="delete" class="img-chitiet" src="../../../../productImage/lego/lego1.jpg"></div>
                <div class="add-img">
                    <div id="img-delete" class="element delete" onclick="deleteIMG();">
                        <img id="need-delete" src="../../../../productImage/lego/lego1.jpg" style="display: block;">
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
                        <div class="product-name"><b>Đồ chơi lắp ráp Phi thuyền X-Wing Starfighter™ LEGO STAR WARS</b>
                            </div>
                        <div class="product-price"><b>7,559,000 VNĐ</b>
                            </div>
                    </div>
                    <div style="line-height: 30px;"> <!--Describe-->
                        <p><b>Mô Tả Sản Phẩm</b><p>
                        <p>
                        <h3> Đồ Chơi Lắp Ráp Phi Thuyền X-Wing Starfighter™ LEGO STAR WARS 75355 (1953 chi tiết)</h3>
                        
                        
                        Tái hiện những pha hành động đầy kịch tính của bộ phim Star Wars: The Mandalorian khi xây dựng phiên bản Phi thuyền X-Wing Starfighter thuộc bộ sưu tập cao cấp. Bộ lắp ráp mang đầy đủ chi tiết theo phong cách LEGO®. Người chơi có thể trưng bày chiếc X-wing với 2 hình thái khác nhau, chế độ do thám hoặc chế độ tấn công cùng với chân đế đi kèm. Bộ lắp ráp gồm một Phi thuyền X-Wing Starfighter, một nhân vật minifigure Luke Skywalker và Robot R2-D2.
                        <br>
                        • Sử dụng Sức Mạnh Sáng Tạo của bạn để lắp ráp và trưng bày phiên bản Phi thuyền X-Wing Starfighter LEGO® Star Wars™ (75355) đến từ bộ phim Star Wars: Người Mandalorian
                        <br>
                        • 2 nhân vật Star Wars™ - Bao gồm nhân vật minifigure Luke Skywalker LEGO® với kiếm ánh sáng và bộ đồ được thiết kế đặc biệt dành riêng, cùng với Robot R2-D2
                        <br>
                        • Người chơi có thể quay nút trên đỉnh X-wing để điều chỉnh chuyển hình thái của phi thuyền từ do thám sang tấn công. Ngoài ra phi thuyền có một khoảng trống để đặt Robot R2-D2 phía sau buồng lái
                        <br>
                        • Trưng bày chiếc phi thuyền X-wing trên chân đế đi kèm, cùng bảng hiển thị dữ liệu kỹ thuật của X-wing và có không gian cho Luke Skywalker
                        <br>
                        • Ý tưởng tặng quà – Với 1.949 chi tiết, đây là một món quà vô cùng ý nghĩa vào dịp lễ hoặc sinh nhật và cực kì đặc biệt dành cho fan Lego hoặc những người hâm mộ bộ phim Star Wars™
                    
                        </p>
                    </div>
                </div>
                <a href="../../updateproduct.php" style="float: right;margin-right: 45px;margin-top: 20px;margin-bottom: 20px;"><button style="padding: 5px 15px;cursor: pointer;"><i class="ti-arrow-left" style="margin-right: 5px;"></i>Quay lại</button></a>
            </div>
        </div>
        <div style="display: block;margin-top: auto;">
        <footer>
            <ul style="margin-left: 3%;" class="footer">
                <li class="footer-data"><img src="../../../../phoneicon.png" style="width:20px;"> Hotline: 0939.797979 - 0979.393939 </li>
                <li class="footer-data"><img src="../../../../emailicon.png" style="width:20px;"> Email: 3979team@gmail.com</li>
                <li class="footer-data"><img src="../../../../addressicon.png" style="width:20px;"> Địa chỉ: 728 Lê Trọng Tấn, Phường Sơn Kì, Quận Tân Phú, TP.HCM  </li>
                <li class="footer-data"><img src="../../../../timeicon.png" style="width:20px;"> Thời gian hoạt động: 10:00 - 21:00</li>
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