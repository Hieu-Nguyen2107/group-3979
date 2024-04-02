<!-- Add product -->
<?php
    include "../connection.php" ;

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
        $target_file = $target_dir . basename($_FILES['pimage']['name']) ;
        $uploadOk = 1 ;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION) ;

        if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $target_file))
            echo basename( $_FILES["pimage"]["name"] ) ."was uploaded" ;
        else
            echo "Error" ;

        //  ket thuc add file
        $img = basename( $_FILES["pimage"]["name"], ".jpg" ) ;
        $des = $_POST['pdescribe'] ;

        $sql = "INSERT INTO product VALUES('$type','$name','$price','$img','$des') " ;

        mysqli_query($conn,$sql) ;

        $sql = "INSERT INTO producttype VALUES ('$type')" ;

        mysqli_query($conn,$sql) ;
        }
        header ("Location: addProduct.php") ;
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

    mysqli_close($conn) ;
?>