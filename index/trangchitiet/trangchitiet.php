<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../index.css" type="text/css">
        <link rel="stylesheet" href="chitiet.css" type="text/css">
        <link rel="stylesheet" href="../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="shortcut icon" type="image/png" href="../logo.jpg">
    </head>
    <body>
        <?php include "headerTrangCT.php"; ?>
        <?php
            include "connection.php" ;
            $name = $_GET['productName'] ;
            $sql = "SELECT * FROM product WHERE ProductName = '$name'" ;
            $p = mysqli_query($conn,$sql) ;
            while ($row = mysqli_fetch_assoc($p)){
                echo '<div style="display: flex;margin-top: 40px;">
                <div class="img-product">
                    <img class="img-chitiet" src="../' .$row['ImageUrl']. '">
                </div>
                <div>
                  <div style="max-width: fit-content;">
                      <div class="product-name"><b>' .$row['ProductName']. '</b></div>
                      <div class="product-price"><b>' .$row['Price']. ' VNĐ</b></div>
                      <form action="" method="POST">
                          <input class="amount" type="number" value="1" min="1">
                          <input type="submit" value="Mua Ngay" class="button" onclick="checkOrder();" />
                          <input type="button" value="Thêm Vào Giỏ Hàng" class="button" onclick="checkAddCart();" />
                      </form>
                  </div>
                  <div style="line-height: 30px;"> <!--Describe-->
                  <p><b>Mô Tả Sản Phẩm</b>
                    ' .$row['Describe']. '</p>
                </div>
                  <div style="float: right;margin: 20px 30px;"><a href="../index.php"><button style="font-size: 17px;"><i class="ti-arrow-left"></i>Quay lại</button></a></div>
                </div>
                </div>' ;
            }
        ?>
        <!-- <div style="display: flex;margin-top: 40px;">
        <div class="img-product">
            <img class="img-chitiet" src="../../productImage/robot/robot1.jpg">
        </div>
        <div>
          <div style="max-width: fit-content;">
              <div class="product-name"><b>Robot chú chó tinh nghịch</b></div>
              <div class="product-price"><b>649,000 VNĐ</b></div>
              <div style="display: flex;margin-left: 30px;">
                  <button class="button-amount decrease"><i class="ti-minus"></i></button>
                  <input class="amount" type="text"value="1" min="1" readonly>
                  <button class="button-amount increase"><i class="ti-plus"></i></button>
              </div>
              <script>
                  let increase = document.querySelector('.increase');
                  let amount = document.querySelector('.amount');
                  let decrease = document.querySelector('.decrease');

                  let v = 0;

                  increase.onclick = function(){
                      v++;
                      amount.value = v;
                  }
                  
                  decrease.onclick = function(){
                      if(amount.value != 1){
                      if (v == 1)
                      {
                          amount.value = 1;
                      }
                      else{
                          v--;
                          amount.value = v;
                      }
                  }
                  }
              </script>
              <div style="margin: 20px 0">
              <button class="button" onclick="checkOrder();">Mua Ngay</button>
              <button class="button" onclick="checkAddCart();">Thêm Vào Giỏ Hàng</button>
              </div>
          </div>
          <div style="line-height: 30px;">
            <p><b>Mô Tả Sản Phẩm</b>    <p>
            <p>
            <h3>Đồ Chơi VECTO Robot Chú Chó Tinh Nghịch - Nô Đùa Cùng Bé VT18012</h3>
            
            Dễ thương và lém lỉnh, tinh nghịch nhưng đầy tháo vát. Robot chú chó tinh nghịch đã đến rồi đây. Các bé và ba mẹ đã sẵn sàng rước chú về chưa nè?
                <br>
            - Khả năng sủa giống hệt chó thật
                <br>
            - Nhảy múa theo nhạc cực Cool
                <br>
            - Chức năng lập trình một chuỗi động tác độc đáo
                <br>
            - Điều khiển linh hoạt tới, lui, trái , phải
                <br>
            Ngoài các chức năng nổi trội trên với thiết kế vẻ mặt cực kỳ dễ thương nhưng không kém phần nghịch ngợm sẽ giúp cho các giây phút vui chơi của bé vô cùng hào hứng.
            </p>
        </div>
          <div style="float: right;margin: 20px 30px;"><a href="../../index.php"><button style="font-size: 17px;"><i class="ti-arrow-left"></i>Quay lại</button></a></div>
        </div>
        </div> -->
        <div style="display: block;margin-top: auto;">
            <?php include "footerTrangCT.php"; ?>
        </div>
    </body>
</html>