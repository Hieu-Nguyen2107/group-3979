<?php 
if (isset($_GET["manage"])){
    if ($_GET["manage"])
        setcookie("receiptID",$_GET["receiptid"],time() + (86400 * 30), "/") ;
    header ("Location: receiptdetailAd.php") ;
    exit ;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Product 3979 Toys</title>
        <link rel="stylesheet" href="../../index.css" type="text/css">
        <link rel="stylesheet" href="../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="../receipt/receipt.css" type="text/css">
        <script src="../function.js"></script></head>
        <body>
        <?php include "headerAdmin.php" ; ?>
        <?php 
        include "../connection.php" ;
        echo '<div class="body-receipt">
        <h1 style="text-align: center;margin: 20px 10px;">Thông Tin Đơn Hàng #' .$_COOKIE["receiptID"]. '</h1>' ;
        $sql = "SELECT * FROM receipt WHERE ReceiptID = '" .$_COOKIE["receiptID"]. "'" ;
        $result = mysqli_query($conn,$sql) ;
        $row = mysqli_fetch_assoc($result) ;
        $sql = "SELECT * FROM customer WHERE NameAccount = '" .$row["NameAccount"]. "'" ;
        $result = mysqli_query($conn,$sql) ;
        $cus = mysqli_fetch_assoc($result) ;
        echo '<div class="user-information">
        <div><i class="ti-user"></i><b>Thông tin khách hàng</b></div>
        <div id="information">
            Tên: ' .$cus["Name"]. '    <br/>
            Địa chỉ: ' .$cus["Address"]. '<br/>
        </div>
        </div>' ;

        echo '<div id="receipt-list">' ;

        $total = 0 ;
        $sql = "SELECT * FROM receiptdetail WHERE receiptdetail.ReceiptID = '" .$_COOKIE["receiptID"]. "'" ;
        $result = mysqli_query($conn,$sql) ;
        while($row = mysqli_fetch_assoc($result)){
            $sql = "SELECT * FROM product WHERE ProductName = '" .$row["ProductName"]. "'" ;
            $result2 = mysqli_query($conn,$sql) ;
            $product = mysqli_fetch_assoc($result2) ;
            echo '<div id="product">
            <img src="../../' .$product["ImageUrl"]. '">
            <div id="name">
                ' .$product["ProductName"]. '
            </div>
            <div id="detail">
                <span id="amount">x' .$row["Amount"]. '</span> <br/>
                <span>&#8363 ' .$product["Price"]. ' VNĐ</span> <br/>
                <span id="price-container"><b>Tổng cộng: &#8363 <span id="price">' .(int) $product["Price"] * $row["Amount"]. '000 VNĐ</span></b></span>
            </div>
        </div>' ;
        $total += (int) $product["Price"] * $row["Amount"] ;
        }

        echo '<div id="sum">
            <span id="logo"><b><i class="ti-money"></i>Thành tiền:</b></span>  <br/>
            <span id="total-price">&#8363 ' .$total. '000 VNĐ</span>
        </div>
        </div>
        <a class="back-button" href="manageuserreceipt.php"><button class="ti-arrow-left"><span style="margin-left: 4px;word-spacing: -3px;"><b>Quay lại</b></span></button></a>
        </div>' ;
        ?>
      <div style="display: block;margin-top: auto;">
        <?php include "footerAdmin.php" ; ?>
      </div>
    </body>
</html>