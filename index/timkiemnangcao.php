<link rel="stylesheet" href="index.css" type="text/css">
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Lấy các giá trị được gửi từ form
    $pname = $_GET['pname'];
    $ptype = $_GET['ptype'];
    $min = $_GET['min'];
    $max = $_GET['max'];

    // Xử lý tìm kiếm nâng cao dựa trên các giá trị nhận được

    // Kết nối đến cơ sở dữ liệu và thực hiện truy vấn
    include "trangchitiet/connection.php";

    $sql = "SELECT * FROM product WHERE 1=1";

    // Thêm điều kiện tìm kiếm cho Tên sản phẩm
    if (!empty($pname)) {
        // Tạo mẫu tìm kiếm tên sản phẩm từng chữ
        $pattern = implode('%', str_split($pname));
        $pattern = '%' . $pattern . '%';
        $sql .= " AND ProductName LIKE '$pname'";
    }

    // Thêm điều kiện tìm kiếm cho Loại sản phẩm
    if (!empty($ptype)) {
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
    
    // Kiểm tra xem có bản ghi phù hợp hay không
    if (mysqli_num_rows($result) > 0) {
        // Hiển thị kết quả tìm kiếm
        while ($row = mysqli_fetch_array($result)) {
            // Xử lý và hiển thị thông tin sản phẩm
            echo '<a class="product" href="trangchitiet/trangchitiet.php?productName=' .$row['ProductName']. '">    <!--DONE-->
                    <div class="img">';
                    if (!empty($row['ImageUrl']))
                        echo '<img src="' .$row['ImageUrl'] .'">' ;
                    else
                        echo '<img src="trangchitiet/adminelements/empty5.jpg">' ;
            echo'        </div>
                    <div class="product-detail">
                        <div class="name">' .$row['ProductName']. '</div>
                        <div class="price">' .$row['Price']. ' VNĐ</div>
                    </div>
                </a>' ;
        }
    } else {
        echo "Không tìm thấy sản phẩm phù hợp.";
    }

    // Đóng kết nối
    mysqli_close($conn);
}
?>