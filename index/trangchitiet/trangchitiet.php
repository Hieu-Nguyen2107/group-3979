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
        <?php include "headerTrangCT.php";
        
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
                      <form action="userelements/shoppingProcess.php?pName=' .$row['ProductName']. '" method="POST">
                          <input name="amount" class="amount" type="number" value="1" min="1">
                          <input type="submit" value="Mua Ngay" class="button"/>
                          <input type="submit" value="Thêm Vào Giỏ Hàng" class="button"/>
                      </form>
                  </div>
                  <div style="line-height: 30px;"> <!--Describe-->
                  <p><b>Mô Tả Sản Phẩm</b><br/>
                    ' .$row['Describe']. '</p>
                </div>
                  <div style="float: right;margin: 20px 30px;"><a href="../index.php"><button style="font-size: 17px;"><i class="ti-arrow-left"></i>Quay lại</button></a></div>
                </div>
                </div>' ;
            }
            mysqli_close($conn) ;
        ?>
        <div style="display: block;margin-top: auto;">
            <?php include "footerTrangCT.php"; ?>
        </div>
    </body>
</html>