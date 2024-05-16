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
    </head>
    <body>
      <?php include "headerAdmin.php" ; ?>
      <div class="body-manageuserreceipt">
        <h1 style="text-align: center;margin-top: 20px;margin-bottom: 25px;">Quản Lý Đơn Hàng</h1>
        <form name="frm" action="" method="POST">
          <span style="margin-left: 10px;"><b>Khoảng thời gian: </b></span>
          <lable for="startDate">Từ</lable>
          <input type="date" name="startDate" />
          <lable for="endDate">Đến</lable>
          <input type="date" name="endDate" />
          <select name="statusReceipt">
          <option value="" selected disabled hidden>Tình trạng đơn hàng</option>
            <option value = "0">Đang vận chuyển</option>
            <option value = "1">Đã giao</option>
            <option value = "2">Đã hủy</option>
          </select>
          <input name="dateSubmit" type="submit" value="Find" />
        </form>
        <?php 
        include "../connection.php" ;
        if (isset($_POST["valuestatus"]) && isset($_POST["id"]))
        {
          $value = $_POST["valuestatus"] ;
          $id = $_POST["id"] ;

          $sql = "UPDATE receipt SET receipt.Status='$value' WHERE ReceiptID='$id'" ;
          mysqli_query($conn,$sql) ;
        }
        echo '<div class="frame-userreceipt">' ;

        

          if (!isset($_POST["startDate"]) || !isset($_POST["endDate"]) || !isset($_POST["statusReceipt"]))
          {
            $sql = "SELECT * FROM receipt " ;
          }else{
        $start = $_POST["startDate"] ;
        $end = $_POST["endDate"] ;
        $status = $_POST["statusReceipt"] ;

        $sql = "SELECT * FROM receipt WHERE receipt.Status='$status' AND (DateReceipt BETWEEN '$start' AND '$end' ) " ;
        }
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
              Địa chỉ: ' .$row["Address"]. '<br/>
            </span>' ;
            if ($row["Status"] == 0){
              echo '
                <span id="receipt-status">Trạng thái đơn hàng: 
                <button id="packaging" onclick="changeStatus('.$row["ReceiptID"].',0)" style="background-color: pink">Đang vận chuyển</button> / 
                <button id="delivering" onclick="changeStatus('.$row["ReceiptID"].',1)" >Đã giao</button> / 
                <button id="delivered" onclick="changeStatus('.$row["ReceiptID"].',2)" >Đã hủy</button></span>
                ' ;
            }
            if ($row["Status"] == 1){
              echo '
                <span id="receipt-status">Trạng thái đơn hàng: 
                <button id="packaging" onclick="changeStatus('.$row["ReceiptID"].',0)" >Đang vận chuyển</button> / 
                <button id="delivering" onclick="changeStatus('.$row["ReceiptID"].',1)" style="background-color: pink">Đã giao</button> / 
                <button id="delivered" onclick="changeStatus('.$row["ReceiptID"].',2)" >Đã hủy</button></span>
                ' ;
            }
            if ($row["Status"] == 2){
              echo '
                <span id="receipt-status">Trạng thái đơn hàng: 
                <button id="packaging" onclick="changeStatus('.$row["ReceiptID"].',0)" >Đang vận chuyển</button> / 
                <button id="delivering" onclick="changeStatus('.$row["ReceiptID"].',1)" >Đã giao</button> / 
                <button id="delivered" onclick="changeStatus('.$row["ReceiptID"].',2)" style="background-color: pink">Đã hủy</button></span>
                ' ;
            }
        echo'  </span>
        </div>' ;
        }
        
        

        echo '</div>
        <a href="../../indexadmin.php" style="margin-left: auto;margin-right: 15px;margin-top: 10px;"><button style="padding: 5px 15px;cursor: pointer;"><i class="ti-home" style="margin-right: 5px;"></i>Quay lại trang chủ</button></a>
        ' ;
        ?>
        <form id="noname" action="" method="POST">
          <input id="id" name="id" type="hidden">
          <input id="valuestatus" name="valuestatus" type="hidden">
        </form>
        <script>
          function changeStatus(hc,bt){
            document.getElementById("id").value = hc ;
            document.getElementById("valuestatus").value = bt ;
            document.getElementById("noname").submit() ;
          }
        </script>
      </div>
      <div style="display: block;margin-top: auto;">
        <?php include "footerAdmin.php" ?>
      </div>
    </body>
</html>