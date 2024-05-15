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
    <link rel="stylesheet" href="advancedsearch.css" />
  </head>
  <body>
    <?php include "../headerChitiet.php"; ?>
    <div class="inform">
  <form id="advance" action="../../timkiemnangcao.php">
    <div class="inner-inform">
      <label for="pname">Tên Sản Phẩm</label><br />
      <input
        type="text"
        id="pname"
        name="pname"
        placeholder="Nhập tên sản phẩm"
      /><br />
      <label for="ptype">Loại Sản Phẩm</label><br />
      <select name="ptype">
        <option value="ROBOT">ROBOT</option>
        <option value="DOLL">DOLL</option>
        <option value="ĐỒ CHƠI LẮP GHÉP">LEGO</option>
        <option value="ĐỒ CHƠI VẬN ĐỘNG">ĐỒ CHƠI VẬN ĐỘNG</option>
      </select>
      <br />
      <br />
      <label for="price">Khoảng Giá</label><br />
      <input type="number" id="min" name="min" min="0" placeholder="Từ" />
      <span>-</span>
      <input type="number" id="max" name="max" min="0" placeholder="Đến" />
      <br />
      <br />
      <input
        type="submit"
        value="Tìm kiếm"
      />
      <span> &nbsp; </span>
      <input type="reset" value="Reset" />
    </div>
  </form>
</div>
    <div style="display: block;margin-top: auto;">
      <?php include "../footerChitiet.php" ; ?>
    </div>
  </body>
</html>