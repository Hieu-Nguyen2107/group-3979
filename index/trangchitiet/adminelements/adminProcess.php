<!-- Add product -->
<?php
    include "../connection.php" ;

    //  them san pham
    if (isset($_POST['submitAddP'])){
        if ( empty($_POST['pname']) || empty($_POST['pprice']) ){
            header ("Location: addProduct.php") ;
            exit ;
        }else{
        $type = $_POST['ptype'] ;
        $name = $_POST['pname'] ;
        $price = $_POST['pprice'] ;
        //  add file image
        $target_dir = "../../productImage/" .$type. "/" ;
        $sql = "SELECT COUNT(*) as c FROM product WHERE TypeName = '$type' " ;
        $count = mysqli_query($conn,$sql) ;
        $row = mysqli_fetch_assoc($count) ; 
        $target_file = $target_dir . $type. $row['c']+1 . '.jpg' ;
        $uploadOk = 1 ;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION) ;

        $img = "productImage/" .$type. "/" . $type. $row['c']+1 . '.jpg' ;
        $des = $_POST['pdescribe'] ;

        $sql = "INSERT INTO product VALUES('$type','$name','$price','$img','$des') " ;

        if (mysqli_query($conn,$sql)) {
            if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $target_file))
                echo basename( $target_file ) ."was uploaded" ;
            else
                echo "Error" ;
        }
        else
            echo "Error" ;
        }
        mysqli_close($conn) ;
        header ("Location: addProduct.php") ;
        exit ;
    }

    //  xoa san pham
    if (isset($_GET['deleteP'])){
    
        $name = $_GET['productName'] ;
        $sql = "DELETE FROM product WHERE ProductName = '$name' " ;
        mysqli_query($conn,$sql) ;
        mysqli_close($conn) ;
        header ("Location: deleteproduct.php") ;
        exit ;

    }

    //  sua san pham
    if (isset($_GET['deleteImageProduct'])){
        $name = $_GET['productName'] ;
        $sql = "UPDATE product SET ImageUrl='' WHERE ProductName='$name'" ;
        mysqli_query($conn,$sql) ;
        mysqli_close($conn) ;
        header ("Location: updateproduct.php?productName=$name") ;
        exit ;
    }

    if (isset($_POST['submitAddU'])){
        $name = $_POST['name'] ;
        $email = $_POST['useremail'] ;
        $account = $_POST['username'] ;
        $password = $_POST['userpass'] ;
        //  add file image
        $target_dir = "avauser/" ;
        $target_file = $target_dir . basename($_FILES['avatar']['name']) ;
        $uploadOk = 1 ;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION) ;

        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file))
            echo basename( $_FILES["avatar"]["name"] ) ."was uploaded" ;
        else
            echo "Error" ;

        //  ket thuc add file

        $avatar = basename( $_FILES["avatar"]["name"], ".jpg" ) ;   //  file name

        $sql = "INSERT INTO customer VALUES('$email','$account','$name','$password','$avatar',1)" ;

        mysqli_query($conn,$sql) ;
    }

?>