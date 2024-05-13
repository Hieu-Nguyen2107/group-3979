<!DOCTYPE html> <!--hiển thị đúng thông tin trước khi sửa (gồm sửa và bỏ hình)-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Product 3979 Toys</title>
        <link rel="stylesheet" href="../../index.css" type="text/css">
        <link rel="stylesheet" href="../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="../chitiet.css" type="text/css" >
        <link rel="stylesheet" href="adminelements.css" type="text/css">
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
                    <div class="add-img">' ;
                        if (!empty($row["ImageUrl"]))
                        echo'        <div id="img-delete" class="element delete">
                                    <img id="need-delete" src="../../' .$row['ImageUrl']. '" style="display: block;">
                                    <a id="trash" class="ti-trash" href="adminProcess.php?deleteImageProduct=delete&productName=' .$name. '"></a>
                            
                                    </div>' ;
                        else
                        echo '                    <div id="img-add" class="element">
                            <div class="bgadd"></div>
                        </div>' ;

                echo '    </div>' ;

                if (empty($row["ImageUrl"]))
                    echo'<form action="adminProcess.php" method="POST" enctype = "multipart/form-data">
                    <input type="file" id="fileUpload" name="fileUpload" accept="img/png, img/jpeg">
                        <input name="pName" type="hidden" value="' .$row['ProductName']. '" />
                        <input name="addImageProduct" type="submit" value="Upload"/>
                    </form>' ;

                echo'
                </div>
                <div>
                  <div style="max-width: fit-content;">
                      <div class="product-name"><b>' .$row['ProductName']. '</b></div>
                      <form action="adminProcess.php?modifyProduct=m&oldName='.$row['ProductName'].'" method="POST"><lable for="pname">Tên sản phẩm:</lable><input style="text-transform:uppercase" type="text" name="pname" class="pname" value='.$row['ProductName'].'>&nbsp<input name="changeName" type="submit" value="Change"></form>
                      <div class="product-price"><b>' .$row['Price']. '&nbspVNĐ</b></div>
                      <form action="adminProcess.php?modifyProduct=m&name='.$row['ProductName'].'" method="POST"><lable for="pprice">Giá sản phẩm:</lable><input type="number" name="pprice" class="pprice" value='.$row['Price'].'>&nbsp<input name="changePrice" type="submit" value="Change"></form>
                  </div>
                  <div style="line-height: 30px;"> <!--Describe-->
                  <b>Mô Tả Sản Phẩm</b>
                    <form action="adminProcess.php?modifyProduct=m&name='.$row['ProductName'].'" method="POST">
                        <textarea type="text" id="pdescribe" name="pdescribe" rows="25" cols="130">'.$row['Describe'].'</textarea><br/>
                        <input name="changeDescribe" type="submit" value="Change">
                    </form>
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