<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User's Receipt 3979 Toys</title>
        <link rel="stylesheet" href="../../index.css" type="text/css">
        <link rel="stylesheet" href="../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="adminelements.css" type="text/css">
        <link rel="stylesheet" href="../chitiet.css" type="text/css">
        <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
        <script>
          function check(receipt,status) {
            if(!!sessionStorage)
            {
              let parent = document.getElementById(receipt);
              var target;
              if ( status == 'processed'){
                parent.querySelector('#processed').style.textDecoration = "underline";
                parent.querySelector('#notprocessed').style.textDecoration = "none";
              }else{
                parent.querySelector('#processed').style.textDecoration = "none";
                parent.querySelector('#notprocessed').style.textDecoration = "underline";
              }
              sessionStorage.setItem(receipt,status);
            }
          }
        </script>
    </head>
    <body>
      <?php include "headerCoSearch.php" ; ?>
      <div class="body-manageuserreceipt">
        <h1 style="text-align: center;margin-top: 20px;margin-bottom: 25px;">Quản Lý Đơn Hàng</h1>
        <form name="frm" onsubmit="showbody();return false;">
          <span style="margin-left: 10px;"><b>Khoảng thời gian: </b></span>
          <input type="number" id="time" name="time" min="1" placeholder="1" style="width: 50px;">
          <select name="slt">
            <option value="" selected disabled hidden>Ngày , Tháng , Năm</option>
            <option value="Ngày">Ngày</option>
            <option value="Tháng">Tháng</option>
            <option value="Năm">Năm</option>
          </select>
          <button class="ti-search" style="padding: 5px;"></button>
        </form>
        <script>
          function showbody(){
            document.getElementById("frame-userreceipt").style.display = "block";
          }
        </script>
        <div id="frame-userreceipt">
          <div class="frame-userreceipt">
            <div id="receipt1" class="receipt">
              <span id="code">MÃ ĐƠN HÀNG #001
                <a href="../receipt/receipt1.php">Xem thông tin đơn hàng</a>
              </span>

              <span id="status">     
                <span id="receipt-inform">     
                  Tên: Lê Đức Anh    <br/>
                  SĐT: 0909090909  <br/>
                  Địa chỉ: 333 Võ Văn Kiệt, Quận 5, Thành phố Hồ Chí Minh<br/>
                </span>
                <span id="receipt-status">Trạng thái đơn hàng: <span id="processed" onclick="check('receipt1','processed')">Đã xử lý</span> / <span id="notprocessed" onclick="check('receipt1','notprocessed')">Chưa xử lý</span></span>
              </span>
            </div>

            <div id="receipt2" class="receipt">
              <span id="code">MÃ ĐƠN HÀNG #002
                <a href="../receipt/receipt2.php">Xem thông tin đơn hàng</a>
              </span>

              <span id="status">     
                <span id="receipt-inform">     
                  Tên: Nguyễn Thành Việt    <br/>
                    SĐT: 0937898989  <br/>
                    Địa chỉ: 898 Linh Đông, Thành phố Thủ Đức <br/>
                </span>
                <span id="receipt-status">Trạng thái đơn hàng: <span id="processed" onclick="check('receipt2','processed')">Đã xử lý</span> / <span id="notprocessed" onclick="check('receipt2','notprocessed')">Chưa xử lý</span></span>
              </span>
            </div>

            <div id="receipt3" class="receipt">
              <span id="code">MÃ ĐƠN HÀNG #003
                <a href="../receipt/receipt3.php">Xem thông tin đơn hàng</a>
              </span>

              <span id="status">     
                <span id="receipt-inform">     
                  Tên: Trần Minh Quân   <br/>
                  SĐT: 0956789101  <br/>
                  Địa chỉ: 345 Tên Lửa, Quận Bình Tân, Thành phố Hồ Chí Minh <br/>
                </span>
                <span id="receipt-status">Trạng thái đơn hàng: <span id="processed" onclick="check('receipt3','processed')">Đã xử lý</span> / <span id="notprocessed" onclick="check('receipt3','notprocessed')">Chưa xử lý</span></span>
              </span>
            </div>

            <div id="receipt4" class="receipt">
              <span id="code">MÃ ĐƠN HÀNG #004
                <a href="../receipt/receipt4.php">Xem thông tin đơn hàng</a>
              </span>

              <span id="status">     
                <span id="receipt-inform">     
                  Tên: Trương Lê Gia Hưng    <br/>
                  SĐT: 0911311322  <br/>
                  Địa chỉ: 666 Đồng Nai, Quận 10, Thành phố Hồ Chí Minh <br/>
                </span>
                <span id="receipt-status">Trạng thái đơn hàng: <span id="processed" onclick="check('receipt4','processed')">Đã xử lý</span> / <span id="notprocessed" onclick="check('receipt4','notprocessed')">Chưa xử lý</span></span>
              </span>
            </div>

            <div id="receipt5" class="receipt">
              <span id="code">MÃ ĐƠN HÀNG #005
                <a href="../receipt/receipt5.php">Xem thông tin đơn hàng</a>
              </span>

              <span id="status">     
                <span id="receipt-inform">     
                  Tên: Phạm Ngọc Triều  <br/>
                  SĐT: 0916665668   <br/>
                  Địa chỉ: 545 Hậu Giang, Quận 6, Thành phố Hồ Chí Minh <br/>
                </span>
                <span id="receipt-status">Trạng thái đơn hàng: <span id="processed" onclick="check('receipt5','processed')">Đã xử lý</span> / <span id="notprocessed" onclick="check('receipt5','notprocessed')">Chưa xử lý</span></span>
              </span>
            </div>
          </div>
        </div>
        <a href="../../indexadmin.php" style="margin-left: auto;margin-right: 15px;margin-top: 10px;"><button style="padding: 5px 15px;cursor: pointer;"><i class="ti-home" style="margin-right: 5px;"></i>Quay lại trang chủ</button></a>
      </div>
      <div style="display: block;margin-top: auto;">
        <?php include "footerAdmin.php" ?>
      </div>
    </body>
</html>