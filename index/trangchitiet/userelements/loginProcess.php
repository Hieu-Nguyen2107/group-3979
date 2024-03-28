<?php
    include "../connection.php" ;
    session_start();
    $_SESSION['error']="";

    if (!isset($_COOKIE["user"])){
        $cookie_name = "user" ;
        $cookie_value = $_POST['username'] ;
        $cookie_pass = $_POST['pass'] ;
        $sql = "SELECT * FROM customer WHERE Name = '$cookie_value' AND Password = '$cookie_pass'; " ;
        $result = mysqli_query($conn,$sql) ;
        if (mysqli_num_rows($result) == 0)
        {
            $_SESSION['error']="Đăng nhập không thành công";
            header ("Location: login.php") ;
            exit;
        }
        else{
            $row = mysqli_fetch_assoc($result) ;
            setcookie($cookie_name,$row['NameAccount'],time() + (86400 * 30), "/") ;
        }
        header ("Location:../../index.php") ;
        exit ;
    }else{
        setcookie("user", "", time() - 3600, "/") ;
        unset($_COOKIE["user"]) ;
        header ("Location:../../index.php") ;
    }
?>