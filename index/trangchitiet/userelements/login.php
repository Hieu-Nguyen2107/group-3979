<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Đăng Nhập 3979 Toys</title>
    <link rel="stylesheet" href="../../index.css" type="text/css" />
    <link
      rel="stylesheet"
      href="../../themify-icons-font/themify-icons/themify-icons.css"
    />
    <link rel="stylesheet" href="login.css" />
    <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
  </head>
  <body>
    <?php include "../headerChitiet.php"; ?>

    <div class="inform">
      <form action= "loginProcess.php" method="POST">
        <div class="inner-inform">
          <input
            type="text"
            id="username"
            name="username"
            placeholder=" Tên tài khoản"
          /><br />
          <input
            type="password"
            id="pass"
            name="pass"
            placeholder=" Mật khẩu"
          /><br /><?php
          session_start();
          if(isset($_SESSION['error']))
          echo'<div class="login-failed">'.$_SESSION['error'].'</div>
          ';
          unset($_SESSION['error']) ;
          ?>
          <input type="submit" value="Đăng Nhập" onclick="Login()" />
        </div>
      </form>
    </div>

  <?php include "../footerChitiet.php"; ?>  
  </body>
</html>
