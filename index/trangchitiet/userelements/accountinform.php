<!DOCTYPE html>
<!--Phai co phan trang va phan loai san pham-->
<html>
  <head>
    <meta charset="UTF-8" />
    <title>3979 Toys</title>
    <link rel="stylesheet" href="../../index.css" type="text/css" />
    <link
      rel="stylesheet"
      href="../../themify-icons-font/themify-icons/themify-icons.css"
    />
    <link rel="stylesheet" href="accountinform.css" type="text/css" />
    <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
  </head>
  <body>
    <?php include "../headerChitiet.php" ; ?>
    <?php 
    include "../connection.php" ;
    $sql = "SELECT * FROM customer WHERE NameAccount = '" .$_COOKIE["account"]. "'" ;
    $result = mysqli_query($conn,$sql) ;
    $cus = mysqli_fetch_assoc($result) ;
    echo '<div class="body-account">
    <div class="inform">
        <div>
            <span><b>Thông tin cá nhân</b></span>
            <span>Tên: ' .$cus["Name"]. '</span>
            <span>Địa chỉ: ' .$cus["Address"]. '</span>    
            <span>Email: ' .$cus["Email"]. '</span>
        </div>
    </div>
    <div class="receipt-history" style="margin-bottom: 40px">

        <h3 style="margin-bottom: 20px;">Lịch sử đơn hàng</h3>

        <table>

            <tr>
                <td><b>Mã Đơn Hàng</b></td>
                <td><b>Ngày đặt hàng</b></td>
                <td><b>Phương thức</b></td>
                <td><b>Trạng thái đơn hàng</b></td>
                <td></td>
            </tr>' ;

            $sql = "SELECT * FROM receipt WHERE NameAccount = '" .$cus["NameAccount"]. "'" ;
            $result = mysqli_query($conn,$sql) ;
            while ($row = mysqli_fetch_assoc($result) )
            {
              echo '<tr>
                <td>#' .$row["ReceiptID"]. '</td>
                <td>' .$row["DateReceipt"]. '</td>';
              if ($row["Method"] == 0)
                echo '<td>Tiền mặt</td>' ;
              if ($row["Method"] == 1)
                echo '<td>Chuyển khoản</td>' ;
              if ($row["Status"] == 0)
                echo '<td>Đang vận chuyển</td>' ;  
              if ($row["Status"] == 1)
                echo '<td>Đã giao</td>' ;  
              if ($row["Status"] == 2)
                echo '<td>Đã hủy</td>' ;  
              echo'  <td><a href="../receiptdetail.php?history=true&receiptid=' .$row["ReceiptID"]. '">Xem chi tiết đơn hàng</a></td>
              </tr>' ;
            }

      echo  '</table>
      </div>
      </div>' ;
    ?>

    <?php include "../footerChitiet.php" ; ?>
  </body>
</html>
