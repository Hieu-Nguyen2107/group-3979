<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Đăng Ký 3979 Toys</title>
    <link rel="stylesheet" href="../../index.css" type="text/css" />
    <link
      rel="stylesheet"
      href="../../themify-icons-font/themify-icons/themify-icons.css"
    />
    <link rel="stylesheet" href="register.css" />
    <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
  </head>
  <?php include "../headerChitiet.php" ; ?>
  <body>
    <div class="inform">
      <div class="inner-inform">
          <form action="registerProcess.php" method="POST">
          <input
            type="text"
            id="email"
            name="email"
            placeholder=" Email"
          /><br />
          <input type="text" id="name" name="name" placeholder="Họ và tên" /> <br/>
          <input type="text" id="address" name="address" placeholder="Địa chỉ" /> <br/>
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
            placeholder=" Nhập mật khẩu"
          /><br />
          <input
            type="password"
            id="pass"
            name="pass"
            placeholder=" Nhập lại mật khẩu"
          /><br />
          <input
            type="submit"
            value="Đăng Ký"
            name="sub" 
            onclick="alert('Bạn đã đăng ký thành công !!!')"
          />
        </form>
        </div>
    </div>
    <div style="display: block;margin-top: auto;">
      <?php include "../footerChitiet.php" ; ?>
    </div>
  </body>
</html>
