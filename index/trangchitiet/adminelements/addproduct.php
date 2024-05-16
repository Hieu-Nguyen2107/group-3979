<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Product 3979 Toys</title>
        <link rel="stylesheet" href="../../index.css" type="text/css">
        <link rel="stylesheet" href="../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="adminelements.css" type="text/css">
        <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
    </head>
    <body>
      <?php include "headerAdmin.php" ; ?>
        <h1 style="margin: 15px 20px;text-align: center;">Thêm Sản Phẩm</h1>
        <form action="adminProcess.php" method = "POST" enctype = "multipart/form-data" style="line-height: 25px;margin: 20px 40px;">
            <label for="producttype">Loại sản phẩm:</label><br/>
            <select name = "ptype">
              <option value="robot">Robot</option>
              <option value="doll">Búp bê</option>
              <option value="lego">Đồ chơi lắp ghép</option>
              <option value="dochoivandong">Đồ chơi vận động</option>
            </select>
            <br/>
            <label for="productname">Tên sản phẩm:</label><br/>
            <input type="text" id="pname" name="pname" placeholder="Tên sản phẩm"><br/>
            <label for="productprice">Giá tiền sản phẩm:</label><br/>
            <input type="text" id="pprice" name="pprice" placeholder="&#8363 Giá tiền sản phẩm"><br/>
            <label for="productimage">Hình ảnh sản phẩm:</label><br/>
            <input type="file" id="pimage" name="pimage" accept="img/png, img/jpeg" onchange = "displayImg(this)"><br/>
            <img src="" id="previewImage" style ="width : 10%"> <br>
            <label for="productdescribe">Mô tả sản phẩm:</label><br/>
            <textarea type="text" id="pdescribe" name="pdescribe" rows="25" cols="150" placeholder="Mô tả sản phẩm"></textarea><br/>
            <input name = "submitAddP" class="submit" type="submit" value="Thêm">
        </form>
        <div style="display: block;margin-top: auto;">
          <?php include "footerAdmin.php" ; ?>
        </div>
    </body>
    <script>
      function displayImg(input){
        var file = input.files[0];
        if(file){
          var reader = new FileReader();
          reader.onload = function (e){
            document.getElementById("previewImage").src = e.target.result;
          };
          reader.readAsDataURL(file);
        }
      }
    </script>
</html>