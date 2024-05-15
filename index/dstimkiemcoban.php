<link rel="stylesheet" href="index.css" type="text/css">
<?php include "headerIndex.php"; ?>
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
}
</style>
<?php
include "trangchitiet/connection.php";

$noidung = isset($_GET['noidung']) ? $_GET['noidung'] : '';

if (!empty($noidung)) {
    $sql = "SELECT * FROM product WHERE ProductName LIKE '%$noidung%' AND product.Status = 1";
    $result = mysqli_query($conn, $sql);

    $totalProducts = mysqli_num_rows($result);
    $productsPerPage = 4;
    $totalPages = ceil($totalProducts / $productsPerPage);

    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($currentPage - 1) * $productsPerPage;

    $sql .= " LIMIT $start, $productsPerPage";
    $result = mysqli_query($conn, $sql);

    echo '<div class="product-row">'; // Bắt đầu một hàng mới
    echo '<h2>Kết quả tìm kiếm: </h2>';
    $foundProducts = false; // Biến kiểm tra có kết quả tìm kiếm hay không
    while ($row = mysqli_fetch_array($result)) {
        $foundProducts = true; // Đánh dấu có kết quả tìm kiếm
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
echo '<a href="?noidung=' . $noidung . '&page=' . $i . '">' . $i . '</a>';
            }
        }
    }
    echo '</div>';
} else {
    echo '<h2 style="text-align: center; margin: 40px;">Vui lòng nhập tên sản phẩm để tìm kiếm.</h2>';
}

include "footerIndex.php";
?>