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
                <div><img id="delete" class="img-chitiet" src="../../../../productImage/doll/doll4.jpg"></div>
                <div class="add-img">
                    <div id="img-delete" class="element delete" onclick="deleteIMG();">
                        <img id="need-delete" src="../../../../productImage/doll/doll4.jpg" style="display: block;">
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
                    <div class="product-name"><b>Hatchimals Pixes cánh thần tiên</b>
                        </div>
                    <div class="product-price"><b>244,000 VNĐ</b>
                        </div>
                </div>
                <div style="line-height: 30px;"> <!--Describe-->
                    <p><b>Mô Tả Sản Phẩm</b>
                        <p>
                    <p>
                    <h3> Đồ Chơi HATCHIMALS Pixies Cánh Thần Tiên 6059069 - Giao hàng ngẫu nhiên</h3>
                    
                    

                    <b>Đồ chơi HATCHIMALS Pixies cánh thần tiên 6059069 </b>là cô nàng búp bê sành điệu, một đại diện tiêu biểu cho thời trang của thế giới nhiệm màu Hatchtopia. Các dòng sản phẩm đồ chơi Hatchimals luôn có sự mới mẻ, sáng tạo nhất định nhằm tăng thêm sự hứng thú của bé trong quá trình vừa học vừa chơi.
                    <br>
                    Dòng búp bê sưu tập Hatchimals Pixies cánh thần tiên 6059069 gây ấn tượng với những đặc điểm nổi bật sau đây:
                    <br>
                    
                    - Gia đình Hatchimals Pixie cánh thần tiên có tất cả 6 chị em gái. Mỗi nàng tiên đều sở hữu cho riêng mình bộ cánh vải lộng lẫy với nhiều hoa văn độc đáo, chuyên biệt như lột tả chân thực sự cá tính và đẳng cấp thời thượng của mình.
                    <br>
                    - Các cô nàng Thiên Thần Pixie cánh thần tiên mỗi ngày đều dành thời gian tút tát lại vẻ đẹp, cùng như đặc biệt chăm chút cho bộ cánh của mình trong chiếc lồng ấp hình quả trứng trong suốt mang đậm chất Hatchimals. Khi muốn đánh thức cô nàng, hãy sử dụng phong cách nhà Hatchimals, xoa nhẹ cho đến khi khóa trái tim của chiếc lồng ấp chuyển màu rồi ấn nhẹ để mở trứng.
                    <br>
                    - Mỗi khi xuống phố dạo chơi, các cô nàng đều không quên diện lên mình những phụ kiện lấp lánh để góp phần tôn lên nét kiêu sa của bản thân.
                    <br>
                    - Đồ chơi được làm từ nhựa cao cấp, không góc cạnh và không hề độc hại nhằm đảm bảo an toàn cho bé trong suốt quá trình chơi và sau đó.
                    <br>
                    - Sản phẩm dành cho các bé từ 3 tuổi
                    <br>
                    - Sản phẩm được giao hàng ngẫu nhiên
                
                    </p>
                </div>
            </div>
            <a href="../../updateproduct.php" style="float: right;margin-right: 45px;margin-top: 20px;margin-bottom: 20px;"><button style="padding: 5px 15px;cursor: pointer;"><i class="ti-arrow-left" style="margin-right: 5px;"></i>Quay lại</button></a>
        </div>
        </div>
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
    </body>
</html>