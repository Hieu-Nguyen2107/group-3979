<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add User 3979 Toys</title>
        <link rel="stylesheet" href="../../index.css" type="text/css">
        <link rel="stylesheet" href="../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="adminelements.css" type="text/css">
        <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
    </head>
    <body>
      <?php include "headerAdmin.php" ; ?>
      <div style="display: flex;flex-direction: column;align-items: center;margin-top: 30px;">
        <h1 style="margin: 20px 0px;">Thêm Tài Khoản</h1>
        <form action="adminProcess.php" method = "POST" enctype = "multipart/form-data" class="add-user" onsubmit="return checkUser();">
          <div style="margin-left: 50px;">
            <!-- Họ tên user -->
            <label for="name"><b>Họ và tên</b></label><br/>
            <input type="text" id="name" name="name" placeholder="Username"><br/>
            <!-- Email user -->
            <label for="useremail"><b>Email</b></label><br/>
            <input type="text" id="useremail" name="useremail" placeholder="Email"><br/>
            <!-- Địa chỉ -->
            <label for="address"><b>Địa chỉ</b></label><br/>
            <input type="text" id="address" name="address" placeholder="Address"><br/>
            <!-- Tên tài khoản user -->
            <label for="username"><b>Tên tài khoản</b></label><br/>
            <input type="text" id="username" name="username" placeholder="Email"><br/>
            <!-- Password user -->
            <label for="userpass"><b>Password</b></label><br/>
            <input type="text" id="userpass" name="userpass" placeholder="Password"><br/>
            <!-- Avatar user -->
            <label for="avatar"><b>Hình ảnh</b></label><br/>
            <input type="file" id="avatar" name="avatar" accept="img/png, img/jpeg"><br/>
            <div class="button-adduser">
              <input name = "submitAddU" id="submit" type="submit" value="Thêm">
              <input id="reset" type="reset" value="Reset" onclick="document.getElementById('user-result-frame').style.display = 'none';">
              <a href="../../indexadmin.php" style="margin-right: 5px;"><button type="button" style="padding: 5px 10px;cursor: pointer;"><i class="ti-home"></i></button></a>
            </div>
          </div>
            
            <!-- <script>
              window.onload = function(){
                var target = document.getElementById('user-result-frame');
                target.style.display = "none";
              }
              function checkUser(){
                let name = document.getElementById('username').value;
                let age = document.getElementById('userage').value;
                let email = document.getElementById('useremail').value;
                if ( name == "" || age == "" || email == "")
                {
                  alert("Vui lòng nhập đẩy đủ thông tin tài khoản !!!");
                  return false;
                }else{
                  alert("Thêm tài khoản thành công !!!");
                  var target = document.getElementById('user-result-frame');
                  target.style.display = "block";
                  document.getElementById("username-result").innerText = name;
                  document.getElementById("userage-result").innerText = age;
                  document.getElementById("useremail-result").innerText = email;
                  return false;
                }
              }
            </script> -->
            <div id="user-result-frame" class="user-result-frame">
              <div class="user-result"> 
                <span>Thêm thành công tài khoản !!!</span>  <br/>
                Tên tài khoản: <span id="username-result"></span>  <br/>
                Năm sinh: <span id="userage-result"></span> <br/>
                Email: <span id="useremail-result"></span> <br/>
              </div>
            </div>
        </form>
      </div>
      <?php include "footerAdmin.php" ; ?>
    </body>
</html>