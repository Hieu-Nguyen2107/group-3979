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
                <div><img id="delete" class="img-chitiet" src="../../../../productImage/dochoivandong/dcvd3.jpg"></div>
                <div class="add-img">
                    <div id="img-delete" class="element delete" onclick="deleteIMG();">
                        <img id="need-delete" src="../../../../productImage/dochoivandong/dcvd3.jpg" style="display: block;">
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
                    <div class="product-name"><b>Máy gắp thú kích thước lớn có đèn và nhạc CHAMPION GAMES CPG76 </b>
                    </div>
                    <div class="product-price"><b>699,000 VNĐ</b>
                    </div>
                </div>
                <div style="line-height: 30px;"> <!--Describe-->
                    <p><b>Mô Tả Sản Phẩm</b>
                        <p>
                    <p>
                    <h3>Đồ Chơi Máy Gắp Thú Kích Thước Lớn Có Đèn Và Nhạc CHAMPION GAMES CPG762</h3>
                    

    Máy gắp thú kích thước lớn có đèn và nhạc là máy mô phỏng trò chơi gắp thú tại các khu vui chơi.
    <br>
    - Với cơ chế hoạt động y như máy thật, bé chỉ cần bỏ đồng xu vào máy, khởi động và gắp những con thú xinh xắn. Khi gắp thành công, máy sẽ có âm thanh và đèn chúc mừng.
    <br>
    - Bé có thể phối hợp khéo léo giữa tay và mắt khi chơi. Đồng thời rèn luyện trí não để tìm cách gắp được con thú mà bé yêu thích
    <br>
    - Bé có thể chơi cùng bạn bè, gia đình để so tài gắp banh để thêm gắn kết tình cảm với mọi người.
    <br>
    Chú ý: Nạp xu để kích hoạt máy vận hành. 1 xu có thể vận hành máy trong khoảng 1 phút, khi hết thời gian này, máy sẽ ngừng hoạt động. Cần bỏ thêm xu để máy hoạt động trở lại.


                    
                
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