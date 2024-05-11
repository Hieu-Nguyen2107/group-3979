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
      <?php include "headerCoSearch.php" ; ?>
      <div>

        <h1 style="margin: 30px 15px;text-align: center;">Tình Hình Kinh Doanh</h1>
        <form action="statistics.php" method="POST" style="margin-top: 15px;padding-left: 20px;padding-top: 20px;padding-bottom: 20px;background-color: pink;
            border-top: 2px solid #000;border-bottom: 2px solid #000;text-align: center;">
            <label for="pname"><b>Tên sản phẩm: </b></label>
            <input type="text" id="pname" name="pname" placeholder="Tên sản phẩm">
            <label for="ptype" style="margin-left: 20px;"><b>Loại sản phẩm: </b></label>
            <select name="ptype">
              <option value="" selected disabled hidden>Choose here</option>
              <option value="ROBOT">ROBOT</option>
              <option value="BÚP BÊ">BÚP BÊ</option>
              <option value="ĐỒ CHƠI LẮP GHÉP">ĐỒ CHƠI LẮP GHÉP</option>
              <option value="ĐỒ CHƠI VẬN ĐỘNG">ĐỒ CHƠI VẬN ĐỘNG</option>
            </select>
            <label for="time" style="margin-left: 20px;"><b>Khoảng thời gian: </b></label>
            <input type="number" id="num" name="num" placeholder="1" min="1" max="100" style="width: 60px;">
            <select name="timetype">
              <option value="" selected disabled hidden>Ngày , Tháng , Năm</option>
              <option value="Ngày">Ngày</option>
              <option value="Tháng">Tháng</option>
              <option value="Năm">Năm</option>
            </select>
            <input name="submitStatis" type="submit" value="Tìm">
        </form>
        <?php 
        echo '<div id="body-frame">' ;

        if (isset($_POST["submitStatis"])){
          echo ' <div class="body-statistics">

          <div class="container-statistics">

            <span id="result">
              
              <b>
              Tên sản phẩm: <span id="pnameresult">' .$_POST["pname"]. '</span> <br/> 
              Loại sản phẩm: <span id="ptyperesult">' .$_POST["ptype"]. '</span> <br/> 
              Khoảng thời gian: <span id="timeresult">' .$_POST["num"]. '&nbsp' .$_POST["timetype"]. '</span> <br/> 
              </b>
            </span>' ;

            include "../connection.php" ;
            $total = 0 ;
            $sql = "SELECT * FROM receiptdetail WHERE ProductName = '" .$_POST["pname"]. "'" ;
            $result = mysqli_query($conn,$sql) ;
            $sql = "SELECT * FROM product WHERE ProductName = '" .$_POST["pname"]. "'" ;
            $result2 = mysqli_query($conn,$sql) ;
            $pro = mysqli_fetch_assoc($result2) ;
            while ( $row = mysqli_fetch_assoc($result) )
            {
              $sql = "SELECT * FROM receipt WHERE ReceiptID = '" .$row["ReceiptID"]. "'" ;
              $result2 = mysqli_query($conn,$sql) ;
              $rec = mysqli_fetch_assoc($result2) ;
              $sql = "SELECT * FROM customer WHERE NameAccount = '" .$rec["NameAccount"]. "'" ;
              $result2 = mysqli_query($conn,$sql) ;
              $cus = mysqli_fetch_assoc($result2) ;
              echo '<div class="receipt">
                <span id="code">MÃ ĐƠN HÀNG #' .$row["ReceiptID"]. '
                  <!-- <a href="../receipt/receipt1.php">Xem thông tin đơn hàng</a> -->
                </span>
      
                <span id="status">     
                  <span id="receipt-inform">     
                    Tên: ' .$cus["Name"]. '    <br/>
                    Email: ' .$cus["Email"]. '  <br/>
                    Địa chỉ: ' .$cus["Address"]. '<br/>
                  </span>
                  <span id="receipt-total">Tổng giá tiền của sản phẩm: &#8363 ' .(int) $pro["Price"] * $row["Amount"]. '000 VNĐ</span>
                </span>
              </div>' ;
              $total += (int) $pro["Price"] * $row["Amount"] ;
            }

            echo '<span id="total"><i class="ti-money"></i>Tổng cộng: &#8363 ' .$total. '000</span>

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