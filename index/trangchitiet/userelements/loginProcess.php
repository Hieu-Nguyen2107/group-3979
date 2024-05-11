<?php
    include "../connection.php" ;
    session_start();
    $_SESSION['error']="";

    if (!isset($_COOKIE["user"])){
        $cookie_name = "user" ;
        $cookie_value = $_POST['username'] ;
        $cookie_pass = $_POST['pass'] ;
        $sql = "SELECT * FROM customer WHERE NameAccount = '$cookie_value' AND customer.Password = '$cookie_pass'; " ;
        $result = mysqli_query($conn,$sql) ;
        if (mysqli_num_rows($result) == 0)
        {
            $_SESSION['error']="Thông tin đăng nhập không hợp lệ";
            header ("Location: login.php") ;
            exit;
        }
        else{
            
            $row = mysqli_fetch_assoc($result) ;
            if ($row['Status'] == 0){
                $_SESSION['error']="Tài khoản của bạn đã bị khóa";
                header ("Location: login.php") ;
                exit;
            }else{
                setcookie($cookie_name,$row['Name'],time() + (86400 * 30), "/") ;
                setcookie("account",$row['NameAccount'],time() + (86400 * 30), "/") ;
            }
        }
        header ("Location:../../index.php") ;
        exit ;
    }else{
        setcookie("user", "", time() - 3600, "/") ;
        unset($_COOKIE["user"]) ;
        setcookie("account", "", time() - 3600, "/") ;
        unset($_COOKIE["account"]) ;
        session_unset() ;
        header ("Location:../../index.php") ;
    }
?>