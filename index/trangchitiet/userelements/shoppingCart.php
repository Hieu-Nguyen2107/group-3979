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
        if (isset($_SESSION["products"])){
        $acc = $_COOKIE["account"] ;
        $sql = "SELECT * FROM customer WHERE NameAccount = '$acc'" ;
        $result = mysqli_query($conn,$sql) ;
        $cus = mysqli_fetch_assoc($result) ;
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
              <td>' .(int)$row["Price"] * $i[1]. '000&nbspVNĐ</td>
            </tr>
          ' ;
          $total += (int)$row["Price"] * $i[1] ;
      }
      echo '</table><div class="total-price">
            <table>
              <tr>
                <td>Tổng Cộng</td>
                <td>' .$total. '000 VNĐ</td>
              </tr>
            </table>
          </div>
          <form action="../receiptdetail.php?acc=' .$cus["NameAccount"]. '" method="POST">
          <div class="location">
            <p><b>Chọn địa chỉ giao hàng</b></p>
            <br>
            <input type="checkbox" name="address" value="' .$cus["Address"]. '" /> ' .$cus["Address"]. '  <br />
            <br />
            <input type="text" name="txtTena" plceholder="Nhập địa chỉ giao hàng" /> <br />
            <br />
            <input
              name="submitCart"
              type="submit"
              value="Thanh toán"
            />
            
            <br />
            <br />
          </div>
          </form>
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
          <form action="login.php" method="POST">
          <div class="location">
            <p><b>Chọn địa chỉ giao hàng</b></p>
            <br>
            <input type="checkbox" name="vehicle1" value="" /> Địa chỉ có sẵn <br />
            <br />
            <input type="text" name="txtTen" placeholder="Nhập địa chỉ giao hàng" /> <br />
            <br />
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
            <input type="checkbox" name="vehicle1" value="" /> Địa chỉ có sẵn <br />
            <br />
            <input type="text" name="txtTen" placeholder="Nhập địa chỉ giao hàng" /> <br />
            <br />
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
    <!-- <div class="small-container cart-page">
      <table>
        <tr>
          <th>Sản Phẩm</th>
          <th>Số Lượng</th>
          <th>Tổng</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img
                class="img-chitiet"
                src="../../productImage/robot/robot1.jpg"
              />
              <div>
              <p>Robot chú chó tinh nghịch</p>
              <small>Giá: 649,000 VNĐ</small>
              <br />
              <a href="../../trangchitiet/robot/robot1.php">Chi tiết</a>
              <br> <br>
              <i class="ti-trash" onclick="confirm('Bạn có chắc chắn muốn xóa không !!!')" style="color: red;"></i>
            </div>
          </td>
          <td><input type="number" value="1" min="1"/></td>
          <td>649,000 VNĐ</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img
                class="img-chitiet"
                src="../../productImage/doll/doll2.jpg"
              />
              <div>
                <p>Bánh Mì Barber Bread</p>
                <small>Giá: 72,000 VNĐ</small>
                <br />
                <a href="../../trangchitiet/doll/doll2.php">Chi tiết</a>
                <br> <br>
                <i class="ti-trash" onclick="confirm('Bạn có chắc chắn muốn xóa không !!!')" style="color: red;"></i>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" min="1"/></td>
          <td>72,000 VNĐ</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img
                class="img-chitiet"
                src="../../productImage/doll/doll3.jpg"
              />
              <div>
                <p>MLP Quả trứng kỳ diệu</p>
                <small>Giá: 69,000 VNĐ</small>
                <br />
                <a href="../../trangchitiet/doll/doll3.php">Chi tiết</a>
                <br> <br>
                <i class="ti-trash" onclick="confirm('Bạn có chắc chắn muốn xóa không !!!')" style="color: red;"></i>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" min="1"/></td>
          <td>69,000 VNĐ</td>
        </tr>
      </table>

      <div class="total-price">
        <table>
          <tr>
            <td>Tổng</td>
            <td>790,000 VNĐ</td>
          </tr>
          <tr>
            <td>Thuế</td>
            <td>50,000 VNĐ</td>
          </tr>
          <tr>
            <td>Tổng Cộng</td>
            <td>840,000 VNĐ</td>
          </tr>
        </table>
      </div>
      <form action="../../index.php" onsubmit="return check();">
      <div class="location">
        <p><b>Chọn địa chỉ giao hàng</b></p>
        <br>
        <input type="checkbox" name="vehicle1" value="Địa chỉ" /> 56D/57, P.Trung Mỹ Tây, Q.12  <br />
        <br />
        <input type="text" name="txtTen" placeholder="Nhập địa chỉ giao hàng" /> <br />
        <br />
        <input
          type="submit"
          value="Thanh toán"
          onclick=""
        />
        
        <br />
        <br />
      </div>
      </form>
    </div> -->
    <div style="display: block;margin-top: auto;">
      <?php include "../footerChitiet.php" ; ?>
    </div>
  </body>
</html>
