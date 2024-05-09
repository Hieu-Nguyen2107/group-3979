<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Product 3979 Toys</title>
        <link rel="stylesheet" href="../../../index.css" type="text/css">
        <link rel="stylesheet" href="../../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="../../receipt/receipt.css" type="text/css">
        <script src="../function.js"></script></head>
        <link rel="shortcut icon" type="image/png" href="../../../logo.jpg">
    <body>
        <?php include "headerTrangCT.php" ; ?>
      <div class="body-receipt">
        <h1 style="text-align: center;margin: 20px 10px;">Thông Tin Đơn Hàng</h1>
        <!-- <div id="code"><h1>MÃ ĐƠN HÀNG: #001</h1></div> -->
        <div class="user-information">
            <div><i class="ti-user"></i><b>Thông tin khách hàng</b></div>
            <div id="information">
                Tên: Lê Đức Anh    <br/>
                SĐT: 0909090909  <br/>
                Địa chỉ: 333 Võ Văn Kiệt, Quận 5, Thành phố Hồ Chí Minh<br/>
            </div>
        </div>
        <div id="receipt-list">

            <div id="product">
                <img src="../../../productImage/robot/robot1.jpg">
                <div id="name">
                    Robot chú chó tinh nghịch
                </div>
                <div id="detail">
                    <span id="amount">x1</span> <br/>
                    <span>&#8363 649,000 VNĐ</span> <br/>
                    <span id="price-container"><b>Tổng cộng: &#8363 <span id="price">649,000 VNĐ</span></b></span>
                </div>
            </div>

            <div id="product">
                <img src="../../../productImage/robot/robot2.jpg">
                <div id="name">
                    Mô hình Earthspark Warrior Thrash
                </div>
                <div id="detail">
                    <span id="amount">x2</span> <br/>
                    <span>&#8363 799,000 VNĐ</span> <br/>
                    <span id="price-container"><b>Tổng cộng: &#8363 <span id="price">1,598,000 VNĐ</span></b></span>
                </div>
            </div>

            <div id="sum">
                <span id="logo"><b><i class="ti-money"></i>Thành tiền:</b></span>  <br/>
                <span id="total-price">&#8363 2,247,000 VNĐ</span>
            </div>
      </div>
      <a class="back-button" href="../accountinform.php"><button class="ti-arrow-left"><span style="margin-left: 4px;word-spacing: -3px;"><b>Quay lại</b></span></button></a>
      </div>
      <div style="display: block;margin-top: auto;">
        <?php include "footerTrangCT.php" ; ?>
      </div>
    </body>
</html>