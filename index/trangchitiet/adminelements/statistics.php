<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Statistics 3979 Toys</title>
        <link rel="stylesheet" href="../../index.css" type="text/css">
        <link rel="stylesheet" href="../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="adminelements.css" type="text/css">
        <link rel="stylesheet" href="../chitiet.css" type="text/css">
        <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
    </head>
    <body>
      <?php include "headerAdmin.php" ; ?>
      <div>

        <h1 style="margin: 30px 15px;text-align: center;">Tình Hình Kinh Doanh</h1>
        <form action="statistics.php" method="POST" style="margin-top: 15px;padding-left: 20px;padding-top: 20px;padding-bottom: 20px;background-color: pink;
            border-top: 2px solid #000;border-bottom: 2px solid #000;text-align: center;">
            <lable for="starDate">Ngày Bắt Đầu:</lable>
            <input type="date" name="startDate"/>
            <lable for="endDate">Ngày Kết Thúc:</lable>
            <input type="date" name="endDate" />
            <input name="submitStatis" type="submit" value="Tìm">
        </form>
        <?php 
        echo '<div id="body-frame">' ;

        if (isset($_POST["submitStatis"])){
          $start = $_POST["startDate"] ;
          $end = $_POST["endDate"] ;
          echo ' <div class="body-statistics">

          <div class="container-statistics">' ;

            include "../connection.php" ;
            $sql = "SELECT * FROM receipt INNER JOIN customer ON receipt.NameAccount = customer.NameAccount WHERE DateReceipt BETWEEN '$start' AND '$end' AND receipt.Status != 2" ;
            $result = mysqli_query($conn,$sql) ;
            $endTotal = 0 ;
            while ( $row = mysqli_fetch_assoc($result) )
            {
              $total = 0 ;
              $sql = "SELECT * FROM receiptdetail WHERE ReceiptID = '" .$row["ReceiptID"]. "'" ;
              $result2 = mysqli_query($conn,$sql) ;
              while($rec = mysqli_fetch_assoc($result2)){
                $sql = "SELECT * FROM product WHERE ProductName = '" .$rec["ProductName"]. "'" ;
                $result2 = mysqli_query($conn,$sql) ;
                $pro = mysqli_fetch_assoc($result2) ;
                $total += (int) $pro["Price"] * $rec["Amount"] ;
              }
              echo '<div class="receipt">
                <span id="code">Thông tin khách hàng
                  <!-- <a href="../receipt/receipt1.php">Xem thông tin đơn hàng</a> -->
                </span>
      
                <span id="status">     
                  <span id="receipt-inform">     
                    Tên: ' .$row["Name"]. '    <br/>
                    Email: ' .$row["Email"]. '  <br/>
                    Địa chỉ: ' .$row["Address"]. '<br/>
                  </span>
                  <span id="receipt-total">Tổng giá tiền của đơn hàng: &#8363 ' .$total. ' VNĐ</span>
                </span>
              </div>' ;
              $endTotal += $total ;
            }

            echo '<span id="total"><i class="ti-money"></i>Tổng cộng: &#8363 ' .$endTotal. '</span>

          </div>

          <a href="../../indexadmin.php" style="float: right;margin-right: 20px;margin-top: 10px;margin-bottom: 10px;"><button style="padding: 5px 15px;cursor: pointer;"><i class="ti-home" style="margin-right: 5px;"></i>Quay lại trang chủ</button></a>
        </div>' ;
        }

        echo '</div>' ;
        ?>
        <!-- Mô hình nhân vật SMP CHAINSAW MAN - DENJI BANDAI CANDY -->
        <!-- <div id="body-frame">

          <div class="body-statistics"> 

            <div class="container-statistics">

              <span id="result">
                
                <b>
                Tên sản phẩm: <span id="pnameresult">Mô hình Earthspark Warrior Thrash</span> <br/> 
                Loại sản phẩm: <span id="ptyperesult">ROBOT</span> <br/> 
                Khoảng thời gian: <span id="timeresult">3 Ngày</span> <br/> 
                </b>
              </span>

              <div id="receipt1" class="receipt">
                <span id="code">MÃ ĐƠN HÀNG #001
                  <a href="../receipt/receipt1.php">Xem thông tin đơn hàng</a>
                </span>
      
                <span id="status">     
                  <span id="receipt-inform">     
                    Tên: Lê Đức Anh    <br/>
                    SĐT: 0909090909  <br/>
                    Địa chỉ: 333 Võ Văn Kiệt, Quận 5, Thành phố Hồ Chí Minh<br/>
                  </span>
                  <span id="receipt-total">Tổng giá tiền của sản phẩm: &#8363 1,598,000 VNĐ</span>
                </span>
              </div>

              <div id="receipt2" class="receipt">
                <span id="code">MÃ ĐƠN HÀNG #002
                  <a href="../receipt/receipt2.php">Xem thông tin đơn hàng</a>
                </span>
      
                <span id="status">     
                  <span id="receipt-inform">     
                    Tên: Nguyễn Thành Việt    <br/>
                      SĐT: 0937898989  <br/>
                      Địa chỉ: 898 Linh Đông, Thành phố Thủ Đức <br/>
                  </span>
                  <span id="receipt-total">Tổng giá tiền của sản phẩm: &#8363 799,000</span>
                </span>
              </div>

              <div id="receipt4" class="receipt">
                <span id="code">MÃ ĐƠN HÀNG #004
                  <a href="../receipt/receipt4.php">Xem thông tin đơn hàng</a>
                </span>
      
                <span id="status">     
                  <span id="receipt-inform">     
                    Tên: Trương Lê Gia Hưng    <br/>
                    SĐT: 0911311322  <br/>
                    Địa chỉ: 666 Đồng Nai, Quận 10, Thành phố Hồ Chí Minh <br/>
                  </span>
                  <span id="receipt-total">Tổng giá tiền của sản phẩm: &#8363 1,598,000</span>
                </span>
              </div>

              <div id="receipt5" class="receipt">
                <span id="code">MÃ ĐƠN HÀNG #005
                  <a href="../receipt/receipt5.php">Xem thông tin đơn hàng</a>
                </span>
      
                <span id="status">     
                  <span id="receipt-inform">     
                    Tên: Phạm Ngọc Triều  <br/>
                    SĐT: 0916665668   <br/>
                    Địa chỉ: 545 Hậu Giang, Quận 6, Thành phố Hồ Chí Minh <br/>
                  </span>
                  <span id="receipt-total">Tổng giá tiền của sản phẩm: &#8363 799,000</span>
                </span>
              </div>

              <span id="total"><i class="ti-money"></i>Tổng cộng: &#8363 4,794,000</span>

            </div>

          </div>
          <a href="../../indexadmin.php" style="float: right;margin-right: 20px;margin-top: 10px;margin-bottom: 10px;"><button style="padding: 5px 15px;cursor: pointer;"><i class="ti-home" style="margin-right: 5px;"></i>Quay lại trang chủ</button></a>
        </div> -->

      </div>
      <div style="display: block;margin-top: auto;">
        <?php include "footerAdmin.php" ; ?>
      </div>
    </body>
</html>