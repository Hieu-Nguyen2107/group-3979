<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User's Receipt 3979 Toys</title>
        <link rel="stylesheet" href="../../index.css" type="text/css">
        <link rel="stylesheet" href="../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="adminelements.css" type="text/css">
        <link rel="stylesheet" href="../chitiet.css" type="text/css">
        <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
        <script>
          function check(receipt,status) {
            if(!!sessionStorage)
            {
              let parent = document.getElementById(receipt);
              var target;
              if ( status == 'processed'){
                parent.querySelector('#processed').style.textDecoration = "underline";
                parent.querySelector('#notprocessed').style.textDecoration = "none";
              }else{
                parent.querySelector('#processed').style.textDecoration = "none";
                parent.querySelector('#notprocessed').style.textDecoration = "underline";
              }
              sessionStorage.setItem(receipt,status);
            }
          }
        </script>
    </head>
    <body>
      <?php include "headerCoSearch.php" ; ?>
      <div class="body-manageuserreceipt">
        <h1 style="text-align: center;margin-top: 20px;margin-bottom: 25px;">Quản Lý Đơn Hàng</h1>
        <form name="frm">
          <span style="margin-left: 10px;"><b>Khoảng thời gian: </b></span>
          <input type="number" id="time" name="time" min="1" placeholder="1" style="width: 50px;">
          <select name="slt">
            <option value="" selected disabled hidden>Ngày , Tháng , Năm</option>
            <option value="Ngày">Ngày</option>
            <option value="Tháng">Tháng</option>
            <option value="Năm">Năm</option>
          </select>
          <button class="ti-search" style="padding: 5px;"></button>
        </form>
        <script>
          function showbody(){
            document.getElementById("frame-userreceipt").style.display = "block";
          }
        </script>
        <?php 
        echo '<div class="frame-userreceipt">' ;

        include "../connection.php" ;
        $sql = "SELECT * FROM receipt" ;
        $result = mysqli_query($conn,$sql) ;
        while ( $row = mysqli_fetch_assoc($result) ){
        $sql = "SELECT * FROM customer WHERE NameAccount = '" .$row["NameAccount"]. "'" ;
        $result2 = mysqli_query($conn,$sql) ;
        $cus = mysqli_fetch_assoc($result2) ;
        echo'
        <div class="receipt">
          <span id="code">MÃ ĐƠN HÀNG #' .$row["ReceiptID"]. '
            <a href="receiptdetailAd.php?manage=true&receiptid=' .$row["ReceiptID"]. '">Xem thông tin đơn hàng</a>
          </span>

          <span id="status">     
            <span id="receipt-inform">     
              Tên: ' .$cus["Name"]. '    <br/>
              Email: ' .$cus["Email"]. '  <br/>
              Địa chỉ: ' .$cus["Address"]. '<br/>
            </span>
            <span id="receipt-status">Trạng thái đơn hàng: <span id="processed">Đang đóng gói</span> / <span id="notprocessed"">Đang vận chuyển</span> / <span id="notprocessed"">Đã giao</span></span>
          </span>
        </div>' ;
        }

        echo '</div>
        <a href="../../indexadmin.php" style="margin-left: auto;margin-right: 15px;margin-top: 10px;"><button style="padding: 5px 15px;cursor: pointer;"><i class="ti-home" style="margin-right: 5px;"></i>Quay lại trang chủ</button></a>
        ' ;
        ?>
      </div>
      <div style="display: block;margin-top: auto;">
        <?php include "footerAdmin.php" ?>
      </div>
    </body>
</html>