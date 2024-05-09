<link rel="stylesheet" href="index.css" type="text/css">
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
</style>

<?php
include "trangchitiet/connection.php";

$noidung = isset($_POST['noidung']) ? $_POST['noidung'] : '';

if (!empty($noidung)) {
    $sql = "SELECT * FROM product WHERE ProductName LIKE '%$noidung%'";
    $result = mysqli_query($conn, $sql);

    echo '<div class="product-row">'; // Bắt đầu một hàng mới
    while ($row = mysqli_fetch_array($result)) {
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
} else {
    echo 'Vui lòng nhập tên sản phẩm để tìm kiếm.';
}
?>