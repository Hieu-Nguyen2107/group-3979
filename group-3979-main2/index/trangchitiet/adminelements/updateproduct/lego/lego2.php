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
                <div><img id="delete" class="img-chitiet" src="../../../../productImage/lego/lego2.jpg"></div>
                <div class="add-img">
                    <div id="img-delete" class="element delete" onclick="deleteIMG();">
                        <img id="need-delete" src="../../../../productImage/lego/lego2.jpg" style="display: block;">
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
                        <div class="product-name"><b>Đồ chơi lắp ráp Vườn bách thảo LEGO FRIENDS 41757</b>
                            </div>
                        <div class="product-price"><b>2,599,000 VNĐ</b>
                            </div>
                        </div>
                    <div style="line-height: 30px;"> <!--Describe-->
                        <p><b>Mô Tả Sản Phẩm</b><p>
                        <p>
                        <h3>   Đồ Chơi Lắp Ráp Vườn Bách Thảo LEGO FRIENDS 41757 (1072 chi tiết)</h3>
                        
                        Thể hiện tình yêu với thiên nhiên qua bộ lắp ráp Vườn Bách Thảo LEGO Friends. Xây dựng nhà kính và bổ sung thêm vào các loại cây cỏ, các loài hoa để hu vườn trở nên sống động. Vòm kính trong suốt có chức năng xoay để mô phỏng các chú bướm đang bay quanh - giống như trong một vườn thực sự. Trưng bày mô hình của bạn để thưởng thức khu vườn đáng yêu này quanh năm nhé!
                    <br>
                        • Bộ lắp ráp dành cho trẻ từ 12 tuổi – Bộ lắp rắp Vườn Bách Thảo này giúp cho trẻ yêu thích thực vật có thể tận hưởng qua từng mảnh ghép
                        <br>
                        • Lấy cảm hứng từ các dòng thực vật - Trẻ sẽ khám phá một loạt các loài cây và hoa kỳ lạ dựa trên các loài thực tế. Đó là một cách tuyệt vời để trẻ tìm hiểu thêm về thế giới thực vật
                    <br>
                        • Vòm kính trong suốt của đồ chơi nhà kính có chức năng xoay, cho phép 4 chú bướm bay quanh giống như bướm thật trong vườn thực vật
                        <br>
                        • Phụ kiện nhà kính bao gồm một cái bình tưới nước, kéo, sổ tay, máy ảnh, bút, cái chiếu, giỏ, chai, bánh croissants và trái cây
                        <br>
                        • Bộ lắp ráp Vườn Bách Thảo này là một món quà lý tưởng cho trẻ từ 12 tuổi trở lên và cho những người sưu tập.
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