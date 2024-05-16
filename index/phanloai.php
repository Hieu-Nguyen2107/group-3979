<!DOCTYPE html>    <!--Phai co phan trang va phan loai san pham-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>3979 Toys</title>
        <link rel="stylesheet" href="index.css" type="text/css">
        <link rel="stylesheet" href="themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="trangchitiet/chitiet.css">
        <style>
    .product-row {
        white-space: nowrap; /* Ngăn các sản phẩm xuống dòng */
    }
    .product {
        display: inline-block; /* Hiển thị các sản phẩm kề bên nhau */
        margin-right: 20px; /* Khoảng cách ngang giữa các sản phẩm */
    }
    .product:last-child {
        margin-right: 0; /* Loại bỏ khoảng cách ngang của sản phẩm cuối cùng */
    }
    .pagination {
  margin-top: 20px;
  text-align: center;
}

.pagination a,
.pagination span {
  display: inline-block;
  padding: 8px 12px;
  margin-right: 6px;
  border: 1px solid #ccc;
  color: #333;
  text-decoration: none;
  transition: background-color 0.3s;
}

.pagination a:hover {
  background-color: #ccc;
}

.pagination .current-page {
  background-color: #555;
  color: #fff;
  margin-bottom: 10px ;
}
</style>
    </head>
    <body>
    <?php include "headerIndex.php"; ?>
    <img class="img-adver" src="adverImange/img1.jpg">
    <?php 
    $severname = "localhost" ;
    $username = "root" ;
    $password = "" ;
    $dbname = "mydb" ;
    
    $conn = new mysqli($severname, $username, $password, $dbname) ;
    
    if ($conn->connect_error){
        die("Connection error: " .$conn->connect_error) ;
    }
    $typeSelect = $_GET["typeSelect"] ;
    $sql = "SELECT * FROM producttype WHERE TypeName = '$typeSelect'" ;
    $res = mysqli_query($conn,$sql) ;
    $show = mysqli_fetch_assoc($res) ;
    echo "<div class='list-header'><b>" .$show['ValueType']. "</b></div> " ;
    $sql = "SELECT * FROM product WHERE TypeName = '$typeSelect'" ;
    $result = mysqli_query($conn, $sql);

    $totalProducts = mysqli_num_rows($result);
    $productsPerPage = 2;
    $totalPages = ceil($totalProducts / $productsPerPage);

    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($currentPage - 1) * $productsPerPage;

    $sql .= " LIMIT $start, $productsPerPage";
    $result = mysqli_query($conn, $sql);

    echo '<div class="product-row">'; // Bắt đầu một hàng mới
    $foundProducts = false; // Biến kiểm tra có kết quả tìm kiếm hay không
    while ($row = mysqli_fetch_array($result)) {
        $foundProducts = true; // Đánh dấu có kết quả tìm kiếm
        if ($row["Status"]){
        echo '<a class="product" href="trangchitiet/trangchitiet.php?productName=' . $row['ProductName'] . '">    <!--DONE-->
                <div class="img">';
        if (!empty($row['ImageUrl']))
            echo '<img src="' . $row['ImageUrl'] . '">';
        else
            echo '<img src="trangchitiet/adminelements/empty5.jpg">';
        echo '</div>
                <div class="product-detail">
                    <div class="name">' . $row['ProductName'] . '</div>
                    <div class="price">' . $row['Price'] . ' VNĐ</div>
                </div>
            </a>';
        }
    }
    echo '</div>'; // Kết thúc hàng

    // Hiển thị thông báo không tìm thấy sản phẩm
    if (!$foundProducts) {
        echo '<h2>Không tìm thấy sản phẩm.</h2>';
    }

    // Hiển thị phân trang
    echo '<div class="pagination">';
    if ($totalPages > 0) {
        for ($i = 1; $i <= $totalPages; $i++) {
            if ($i == $currentPage) {
                echo '<span class="current-page">' . $i . '</span>';
            } else {
echo '<a href="?typeSelect=' . $typeSelect . '&page=' . $i . '">' . $i . '</a>';
            }
        }
    }
    echo '</div>';

    mysqli_close($conn) ;
?>
    <?php include "footerIndex.php"; ?>
    </body>
</html>