<!DOCTYPE html> <!--hiển thị đúng thông tin trước khi sửa (gồm sửa và bỏ hình)-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Product 3979 Toys</title>
        <link rel="stylesheet" href="../../index.css" type="text/css">
        <link rel="stylesheet" href="../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="../chitiet.css" type="text/css" >
        <link rel="stylesheet" href="adminelements.css" type="text/css">
        <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
        <style>
            button.ti-settings{
                padding: 2px 3px;
                font-size: larger;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <?php include "headerAdmin.php" ;
            include "../connection.php" ; 
            $name = $_GET['productName'] ;
            $sql = "SELECT * FROM product WHERE ProductName = '$name'" ;
            $p = mysqli_query($conn,$sql) ;
            while ($row = mysqli_fetch_assoc($p)){
                echo '<div style="display: flex;margin-top: 40px;">
                <div class="img-product">
                    <div><img id="delete" class="img-chitiet" src="../../' .$row['ImageUrl']. '"></div>
                    <div class="add-img">
                        <div id="img-delete" class="element delete">
                            <img id="need-delete" src="../../' .$row['ImageUrl']. '" style="display: block;">
                            <a id="nothing" class="nothing" href="adminProcess.php?deleteImageProduct=delete&productName=' .$name. '"></a>
                            <a id="trash" class="ti-trash" href="adminProcess.php?deleteImageProduct=delete&productName=' .$name. '"></a>
                            
                        </div>
                        <div id="img-add" class="element add" onclick="">
                            <div class="bgadd"></div>
                            <div class="ti-plus"></div>
                            <input id="images1" type="file" accept="images/*" style="display: none;">
                        </div>
                        <div class="element add" onclick="">
                            <div class="bgadd"></div>
                            <div class="ti-plus"></div>
                            <input id="images2" type="file" accept="images/*" style="display: none;">
                        </div>
                    </div>
                </div>
                <div>
                  <div style="max-width: fit-content;">
                      <div class="product-name"><b>' .$row['ProductName']. '</b><i class="ti-pencil"></i></div>
                      <div class="product-price"><b>' .$row['Price']. ' VNĐ</b></div>
                  </div>
                  <div style="line-height: 30px;"> <!--Describe-->
                  <p><b>Mô Tả Sản Phẩm</b><br/>
                    ' .$row['Describe']. '</p>
                </div>
                  <div style="float: right;margin: 20px 30px;"><a href="deleteproduct.php"><button style="font-size: 17px;"><i class="ti-arrow-left"></i>Quay lại</button></a></div>
                </div>
                </div>' ;
            }
            mysqli_close($conn) ;
        ?>
        <div style="display: block;margin-top: auto;">
            <?php include "footerAdmin.php" ; ?>
        </div>
    </body>
</html>