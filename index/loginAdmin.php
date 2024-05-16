<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Đăng Nhập 3979 Toys</title>
    <link rel="stylesheet" href="index.css" type="text/css" />
    <link
      rel="stylesheet"
      href="themify-icons-font/themify-icons/themify-icons.css"
    />
    <link rel="stylesheet" href="trangchitiet/userelements/login.css" />
  </head>
  <body>
    <?php include "headerLoginAdmin.php"; ?>

    <div class="inform">
      <form id="login" action= "trangchitiet/userelements/loginProcess.php" method="POST">
        <div class="inner-inform">
          <input
            type="text"
            id="username"
            name="admin"
            placeholder=" Tên tài khoản"
          /><br />
          <input
            type="password"
            id="pass"
            name="passAdmin"
            placeholder=" Mật khẩu"
          /><br /><?php
          session_start();
          if(isset($_SESSION['error']))
          echo'<div class="login-failed">'.$_SESSION['error'].'</div>
          ';
          unset($_SESSION['error']) ;
          ?>
          <input name="loginAdmin" type="submit" value="Đăng Nhập" />
        </div>
      </form>
    </div>

  <?php include "footerIndexAdmin.php"; ?>  
  </body>
</html>
