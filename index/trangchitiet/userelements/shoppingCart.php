<?php 
  session_start() ;
  function deleteFromCart(){
    $pName = $_GET["pName"] ;
    $pIndex = array_search($pName, array_column($_SESSION["products"],0)) ;
    array_splice($_SESSION["products"],$pIndex,1) ;
  }

  if (isset($_GET["deleteP"])){
    if ($_GET["deleteP"]){
      deleteFromCart() ;
      header ("Location: shoppingCart.php") ;
      exit ;
    }
  }
?>
<!DOCTYPE html>
<!--Phai co phan trang va phan loai san pham-->
<html>
  <head>
    <meta charset="UTF-8" />
    <title>3979 Toys</title>
    <link rel="stylesheet" href="../../index.css" type="text/css" />
    <link
      rel="stylesheet"
      href="../../themify-icons-font/themify-icons/themify-icons.css"
    />
    <link rel="stylesheet" href="shoppingCart.css" />
  </head>
  <body>
  <?php include "../headerChitiet.php" ; ?>
    <?php 
      
      include "../connection.php" ;
      if (isset($_COOKIE["account"])){
        $acc = $_COOKIE["account"] ;
        $sql = "SELECT * FROM customer WHERE NameAccount = '$acc'" ;
        $result = mysqli_query($conn,$sql) ;
        $cus = mysqli_fetch_assoc($result) ;
        if (isset($_SESSION["products"])){
        $cart = $_SESSION["products"] ;
        $total = 0 ;
        echo '<div class="small-container cart-page">
        <table>
          <tr>
            <th>Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Tổng</th>
          </tr>' ;
        foreach ($cart as $i){
          $sql = "SELECT * FROM product WHERE ProductName = '$i[0]'" ;
          $result = mysqli_query($conn,$sql) ;
          $row = mysqli_fetch_assoc($result) ;
          echo '     
            <tr>
              <td>
                <div class="cart-info">
                  <img
                    class="img-chitiet"
                    src="../../' .$row["ImageUrl"]. '"
                  />
                  <div>
                  <p>' .$row["ProductName"]. '</p>
                  <small>Giá: ' .$row["Price"]. ' VNĐ</small>
                  <br />
                  <a href="../trangchitiet.php?productName=' .$row["ProductName"]. '">Chi tiết</a>
                  <br> <br>
                  <form action="shoppingCart.php?deleteP=true&pName=' .$row["ProductName"]. '" method="POST"><input type="button" onclick="this.form.submit()" value="Xóa"></form>
                </div>
              </td>
              <td><form action="shoppingProcess.php?pName='.$row["ProductName"].'" method="POST"><input name="plusCart" type="number" value="' .$i[1]. '" min="1" onchange="this.form.submit()"/></form></td>
              <td>' .(int)$row["Price"] * $i[1]. '&nbspVNĐ</td>
            </tr>
          ' ;
          $total += (int)$row["Price"] * $i[1] ;
      }
      echo '</table><div class="total-price">
            <table>
              <tr>
                <td>Tổng Cộng</td>
                <td>' .$total. ' VNĐ</td>
              </tr>
            </table>
          </div>
          <div class="location">
          <p><b>Chọn địa chỉ giao hàng</b></p><br/>
          <form action="../receiptdetail.php?acc=' .$cus["NameAccount"]. '" method="POST">' ;
          
          if (!empty($cus["Address"]))
            echo '<input type="radio" onclick="show();" name="address" value="' .$cus["Address"]. '" /> ' .$cus["Address"]. '  <br />' ;
          else
            echo '<input type="radio" onclick="show();" name="address" value="" /> Không có địa chỉ mặc định  <br />' ;

          echo ' <br/><input id="newAddress" type="radio" name="address" onclick="show();" /> Địa chỉ mới:
            <script>
            function show(){
              var checkBox = document.getElementById("newAddress") ;
              var text = document.getElementById("txtNewAdd") ;

              if (checkBox.checked == true)
                text.style.display = "block" ;
              else
                text.style.display = "none" ;
            }
            </script>
              <input oninput=setValue(this.value) id="txtNewAdd" type="text" name="txtTena" placeholder="Nhập địa chỉ giao hàng" style="display:none" /> <br />
            <script>
            function setValue(value)
            {
              document.getElementById("newAddress").value = value ;
            }
            </script>
            <br />
            <lable for="method"><b>Phương thức thanh toán:</b></lable><br/><br/>
            <input type="radio" name="method" value="0"/> Tiền mặt <br/><br/>
            <input type="radio" name="method" value="1"/> Chuyển khoản <br/><br/>
            <input
              name="submitCart"
              type="submit"
              value="Thanh toán"
            />
            
            <br />
            <br />
            </form>
          </div>
        </div> ' ;
      }else{
        echo '<div class="small-container cart-page">
        <table>
          <tr>
            <th>Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Tổng</th>
          </tr>
          <tr>
          </tr>
        </table>
        <div class="total-price">
            <table>
              <tr>
                <td>Tổng</td>
                <td>0 VNĐ</td>
              </tr>
              <tr>
                <td>Thuế</td>
                <td>0 VNĐ</td>
              </tr>
              <tr>
                <td>Tổng Cộng</td>
                <td>0 VNĐ</td>
              </tr>
            </table>
          </div>
          <form action="../../index.php" method="POST">
          <div class="location">
            <p><b>Chọn địa chỉ giao hàng</b></p>
            <br>' ;
            if (!empty($cus["Address"]))
            echo '<input type="radio" onclick="show();" name="address" value="' .$cus["Address"]. '" /> ' .$cus["Address"]. '  <br />' ;
          else
            echo '<input type="radio" onclick="show();" name="address" value="" /> Không có địa chỉ mặc định  <br />' ;
            echo '<br/>
            <input id="newAddress" type="radio" name="address" onclick="show();" /> Địa chỉ mới:
            <script>
            function show(){
              var checkBox = document.getElementById("newAddress") ;
              var text = document.getElementById("txtNewAdd") ;

              if (checkBox.checked == true)
                text.style.display = "block" ;
              else
                text.style.display = "none" ;
            }
            </script>
              <input id="txtNewAdd" type="text" name="txtTena" placeholder="Nhập địa chỉ giao hàng" style="display:none" /> <br />
            <br />
            <lable for="method"><b>Phương thức thanh toán:</b></lable><br/><br/>
            <input type="radio" name="method" value="0"/> Tiền mặt <br/><br/>
            <input type="radio" name="method" value="1"/> Chuyển khoản <br/><br/>
            <input
              type="submit"
              value="Thanh toán"
            />
            
            <br />
            <br />
          </div>
          </form>
        </div>' ;
      }
    }else{
      echo '<div class="small-container cart-page">
        <table>
          <tr>
            <th>Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Tổng</th>
          </tr>
          <tr>
          </tr>
        </table>
        <div class="total-price">
            <table>
              <tr>
                <td>Tổng</td>
                <td>0 VNĐ</td>
              </tr>
              <tr>
                <td>Thuế</td>
                <td>0 VNĐ</td>
              </tr>
              <tr>
                <td>Tổng Cộng</td>
                <td>0 VNĐ</td>
              </tr>
            </table>
          </div>
          <form action="login.php" method="POST">
          <div class="location">
            <p><b>Chọn địa chỉ giao hàng</b></p>
            <br>
            <input type="radio" name="address" value="" /> Địa chỉ có sẵn <br /><br/>
            <input id="newAddress" type="radio" name="address" onclick="show();" /> Địa chỉ mới:
            <script>
            function show(){
              var checkBox = document.getElementById("newAddress") ;
              var text = document.getElementById("txtNewAdd") ;

              if (checkBox.checked == true)
                text.style.display = "block" ;
              else
                text.style.display = "none" ;
            }
            </script>
              <input id="txtNewAdd" type="text" name="txtTena" placeholder="Nhập địa chỉ giao hàng" style="display:none" /> <br />
            <br />
            <lable for="method"><b>Phương thức thanh toán:</b></lable><br/><br/>
            <input type="radio" name="method" value="0"/> Tiền mặt <br/><br/>
            <input type="radio" name="method" value="1"/> Chuyển khoản <br/><br/>
            <input
              type="submit"
              value="Thanh toán"
            />
            
            <br />
            <br />
          </div>
          </form>
        </div>' ;
    }

    ?>
    <div style="display: block;margin-top: auto;">
      <?php include "../footerChitiet.php" ; ?>
    </div>
  </body>
</html>
