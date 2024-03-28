<?php
    if (!isset($_COOKIE["user"])){
        $cookie_name = "user" ;
        $cookie_value = $_POST['username'] ;
        setcookie($cookie_name,$cookie_value,time() + (86400 * 30), "/") ;
        header ("Location:../../index.php") ;
        exit ;
    }else{
        setcookie("user", "", time() - 3600, "/") ;
        unset($_COOKIE["user"]) ;
        header ("Location:../../index.php") ;
    }
?>