<?php
    $cookie_name = "user" ;
    $cookie_value = $_POST['username'] ;
    setcookie($cookie_name,$cookie_value) ;
    alert ("Đăng nhập thành công!!!") ;
    window.location.href "../../index.php" ;
?>