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
<?php include "headerIndex.php"; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Lấy các giá trị được gửi từ form
    $pname = isset($_GET['pname']) ? $_GET['pname'] : '';
    $ptype = isset($_GET['ptype']) ? $_GET['ptype'] : '';
    $min = isset($_GET['min']) ? $_GET['min'] : '';
    $max = isset($_GET['max']) ? $_GET['max'] : '';

    // Xử lý tìm kiếm nâng cao dựa trên các giá trị nhận được

    // Kết nối đến cơ sở dữ liệu và thực hiện truy vấn
    include "trangchitiet/connection.php";

    $sql = "SELECT * FROM product WHERE 1=1 AND product.Status = 1";

    // Thêm điều kiện tìm kiếm cho Tên sản phẩm
    if (!empty($pname)) {
        // Tạo mẫu tìm kiếm tên sản phẩm từng chữ
        
        $sql .= " AND ProductName LIKE '%$pname%'";
    }

    // Thêm điều kiện tìm kiếm cho Loại sản phẩm
    if (!empty($ptype)) {
        if ($ptype == 'ĐỒ CHƠI VẬN ĐỘNG')
            $ptype = 'dochoivandong';
        if ($ptype == 'ĐỒ CHƠI LẮP GHÉP')
            $ptype = 'lego';
        $sql .= " AND TypeName = '$ptype'";
    }

    // Thêm điều kiện tìm kiếm cho Khoảng giá
    if (!empty($min) && !empty($max)) {
        $sql .= " AND Price BETWEEN $min AND $max";
    }

    // Thực hiện truy vấn
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Lỗi truy vấn: " . mysqli_error($conn));
    }

    $totalProducts = mysqli_num_rows($result);
    $productsPerPage = 4;
    $totalPages = ceil($totalProducts / $productsPerPage);

    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($currentPage - 1) * $productsPerPage;

    $sql .= " LIMIT $start, $productsPerPage";
    $result = mysqli_query($conn, $sql);

    // Kiểm tra xem có bản ghi phù hợp hay không
    echo '<div class="product-row">';
    echo'<h2>Kết quả tìm kiếm: </h2>';

    if (mysqli_num_rows($result) > 0) {
        // Hiển thị kết quả tìm kiếm
        while ($row = mysqli_fetch_array($result)) {
            // Xử lý và hiển thị thông tin sản phẩm
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
    } else {
        echo "Không tìm thấy sản phẩm phù hợp.";
    }
    echo '</div>' ;

    // Hiển thị phân trang
    echo '<div class="pagination">';
    if ($totalPages > 0) {
        for ($i = 1; $i <= $totalPages; $i++) {
            if ($i == $currentPage) {
                echo '<span class="current-page">' . $i . '</span>';
            } else {
                echo '<a href="?pname=' . $pname . '&ptype=' . $ptype . '&min=' . $min . '&max=' . $max . '&page=' . $i . '">' . $i . '</a>';
            }
        }
    }
    echo '</div>';
    // Đóng kết nối
    mysqli_close($conn);
}

include "footerIndex.php"; 
?>