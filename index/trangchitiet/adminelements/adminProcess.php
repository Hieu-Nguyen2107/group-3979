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
        $target_file = $target_dir . basename($_FILES["pimage"]["name"]) ;
        $uploadOk = 1 ;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION) ;
        
        if (!empty($_FILES["pimage"]["name"]))
            $img = "productImage/" . $type . "/" . $_FILES["pimage"]["name"] ;
        else
            $img = "" ;
        $des = $_POST['pdescribe'] ;

        $sql = "INSERT INTO product VALUES('$type','$name','$price','$img','$des',1) " ;

        if (mysqli_query($conn,$sql)) {
            if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $target_file))
                echo basename( $target_file ) ."was uploaded" ;
            else
                echo "Error" ;
        }
        else{
            echo "Error" ;
        }
        mysqli_close($conn) ;
        header ("Location: addProduct.php") ;
        exit ;
        }
    }

    //  an san pham
    if (isset($_GET['deleteP'])){
    
        $name = $_GET['productName'] ;
        $stat = $_GET['status'] ;
        if ($stat)
            $sql = "UPDATE product SET product.Status = 0 WHERE ProductName = '$name' " ;
        else
            $sql = "UPDATE product SET product.Status = 1 WHERE ProductName = '$name' " ;
        mysqli_query($conn,$sql) ;
        mysqli_close($conn) ;
        header ("Location: deleteproduct.php") ;
        exit ;

    }

    //  xoa hinh san pham
    if (isset($_GET['deleteImageProduct'])){
        $name = $_GET['productName'] ;
        $sql = "UPDATE product SET ImageUrl='' WHERE ProductName='$name'" ;
        mysqli_query($conn,$sql) ;
        mysqli_close($conn) ;
        header ("Location: updateproduct.php?productName=$name") ;
        exit ;
    }
    //  them hinh san pham
    if (isset($_POST['addImageProduct'])){
        $name = $_POST["pName"] ;
        $sql = "SELECT * FROM product WHERE ProductName='$name'" ;
        $result = mysqli_query($conn,$sql) ;
        $row = mysqli_fetch_assoc($result) ; 
        $type = $row["TypeName"] ;
        $target_dir = "../../productImage/" .$type. "/" ; 
        $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]) ;
        $uploadOk = 1 ;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION) ;
        
        if (!empty($_FILES["fileUpload"]["name"]))
            $img = "productImage/" . $type . "/" . $_FILES["fileUpload"]["name"] ;
        else
            $img = "" ;

        $sql = "UPDATE product SET ImageUrl='$img' WHERE ProductName='$name' " ;

        if (mysqli_query($conn,$sql)) {
            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file))
                echo basename( $target_file ) ."was uploaded" ;
            else
                echo "Error" ;
        }
        else{
            echo "Error" ;
        }
        mysqli_close($conn) ;
        header ("Location: updateproduct.php?productName=$name") ;
        exit ;
    }

    //  sua thong tin san pham
    if (isset($_GET['modifyProduct'])){
        $name = $_GET['name'] ;
        if (isset($_POST['changeName'])){
            $pname = $_POST['pname'] ;
            $oname = $_GET['oldName'] ;
            $sql = "UPDATE product SET ProductName='$pname' WHERE ProductName='$oname' " ;
            mysqli_query($conn,$sql) ;
            mysqli_close($conn) ;
            header ("Location: updateproduct.php?productName=$pname") ;
            exit ;
        }
        if (isset($_POST['changePrice'])){
            $pprice = $_POST['pprice'] ;
            $sql = "UPDATE product SET Price='$pprice' WHERE ProductName='$name' " ;
            mysqli_query($conn,$sql) ;
            mysqli_close($conn) ;
        }
        if (isset($_POST['changeDescribe'])){
            $pdescribe = $_POST['pdescribe'] ;
            $sql = "UPDATE product SET product.Describe='$pdescribe' WHERE ProductName='$name' " ;
            mysqli_query($conn,$sql) ;
            mysqli_close($conn) ;
        }
        header ("Location: updateproduct.php?productName=$name") ;
        exit ;
    }

    //  them nguoi dung
    if (isset($_POST['submitAddU'])){
        $name = $_POST['name'] ;
        $email = $_POST['useremail'] ;
        $account = $_POST['username'] ;
        $password = $_POST['userpass'] ;
        //  add file image
        $target_dir = "avauser/" ;
        $target_file = $target_dir . $username .'.jpg' ;
        $uploadOk = 1 ;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION) ;

        if (!empty($_FILES["avatar"]["tmp_name"]))
            $avatar = "avauser/" . $username . '.jpg' ;
        else
            $avatar = "" ;
        $sql = "INSERT INTO customer VALUES('$email','$account','$name','$password','$avatar',1)" ;

        if (mysqli_query($conn,$sql)) {
            if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file))
                echo basename( $target_file ) ."was uploaded" ;
            else
                echo "Error" ;
        }
        else{
            echo "Error" ;
        }
        mysqli_close($conn) ;
        header ("Location: adduser.php") ;
        exit ;

    }

    //  xoa avatar nguoi dung
    if (isset($_GET['deleteAvatar'])){
        $name = $_GET['NameAccount'] ;
        $sql = "UPDATE customer SET AvatarUrl='' WHERE NameAccount='$name'" ;
        mysqli_query($conn,$sql) ;
        mysqli_close($conn) ;
        header ("Location: checkuser.php") ;
        exit ;
    }


    //  them avatar nguoi dung
    if (isset($_GET['addAvatar'])){
        $name = $_POST["acc"] ;
        $sql = "SELECT * FROM customer WHERE NameAccount='$name'" ;
        $result = mysqli_query($conn,$sql) ;
        $row = mysqli_fetch_assoc($result) ; 

        $target_dir = "avauser/" ;
        $target_file = $target_dir . $name .'.jpg' ;
        $uploadOk = 1 ;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION) ;

        if (!empty($_FILES["avatarUpload"]["tmp_name"]))
            $avatar = "avauser/" . $name . '.jpg' ;
        else
            $avatar = "" ;
        $sql = "UPDATE customer SET AvatarUrl='$avatar' WHERE NameAccount='$name' " ;

        if (mysqli_query($conn,$sql)) {
            if (move_uploaded_file($_FILES["avatarUpload"]["tmp_name"], $target_file))
                echo basename( $target_file ) ."was uploaded" ;
            else
                echo "Error" ;
        }
        else{
            echo "Error" ;
        }
        mysqli_close($conn) ;
        header ("Location: checkuser.php") ;
        exit ;
    }

    //  khoa nguoi dung
    if (isset($_GET['lockUser'])){
        $acc = $_GET['acc'] ;
        $sql = "SELECT * FROM customer WHERE NameAccount='$acc' " ;
        $result = mysqli_query($conn,$sql) ;
        $row = mysqli_fetch_assoc($result) ;
        if ($row['Status'] == 1){
            $sql = "UPDATE customer SET customer.Status = 0 WHERE NameAccount = '$acc'" ;
            mysqli_query($conn,$sql) ;
        }else{
            $sql = "UPDATE customer SET customer.Status = 1 WHERE NameAccount = '$acc'" ;
            mysqli_query($conn,$sql) ;
        }
        header ("Location: checkUser.php") ;
        exit ;
    }

    //  sua thong tin nguoi dung
    if (isset($_GET['modifyUser'])){
        $name = $_GET['name'] ;
        if (isset($_POST['changeNameAcc'])){
            $namea = $_POST['nameAcc'] ;
            $oname = $_GET['oldAcc'] ;
            $sql = "UPDATE customer SET NameAccount='$namea' WHERE NameAccount='$oname' " ;
            mysqli_query($conn,$sql) ;
            mysqli_close($conn) ;
        }
        if (isset($_POST['changeUsername'])){
            $username = $_POST['username'] ;
            $sql = "UPDATE customer SET customer.Name='$username' WHERE NameAccount='$name' " ;
            mysqli_query($conn,$sql) ;
            mysqli_close($conn) ;
        }
        if (isset($_POST['changeAddress'])){
            $address = $_POST['address'] ;
            $sql = "UPDATE customer SET customer.Address='$address' WHERE NameAccount='$name' " ;
            mysqli_query($conn,$sql) ;
            mysqli_close($conn) ;
        }
        if (isset($_POST['changeEmail'])){
            $email = $_POST['email'] ;
            $sql = "UPDATE customer SET customer.Email='$email' WHERE NameAccount='$name' " ;
            mysqli_query($conn,$sql) ;
            mysqli_close($conn) ;
        }
        header ("Location: checkuser.php") ;
        exit ;
    }
?>