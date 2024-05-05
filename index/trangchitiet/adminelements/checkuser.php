<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Users 3979 Toys</title>
        <link rel="stylesheet" href="../../index.css" type="text/css">
        <link rel="stylesheet" href="../../themify-icons-font/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="adminelements.css" type="text/css">
        <link rel="shortcut icon" type="image/png" href="../../logo.jpg">
        <style>
            i.ti-lock{
                font-size: 35px;
                color: red;
            }
            i.ti-unlock{
                font-size: 35px;
                color: rgb(37, 207, 37);
            }
            a.locknunlock{
                cursor: pointer;
                width: fit-content;
                background-color: white;
                padding: 5px 3px;
                border-radius: 4px;
                margin-top: auto;
                margin-left: auto;
                margin-right: 10px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <?php include "headerCoSearch.php" ; ?>
        <?php 
            echo '<h1 style="margin: 15px 20px;text-align: center;">Thông Tin Người Dùng</h1>' ;
            echo '<div class="body-user"> ' ;

            include "../connection.php" ;
            $sql = "SELECT * FROM customer" ;
            $result = mysqli_query($conn,$sql) ;
            $i = 3 ;
            while ($row = mysqli_fetch_assoc($result)){
                if ($i == 0)
                    $i = 3 ;
                if ($i == 3){
                    echo '<div class="user-row">' ;
                }
                echo '<div class="user">
                    <img src="' .$row['AvatarUrl']. '">
                    <div class="information-user">
                        <span class="nameAcc">- Tên tài khoản: ' .$row['NameAccount']. '</span>
                        <span class="name">- Tên: ' .$row['Name']. '</span>
                        <span class="address">- Địa chỉ: ' .$row['Address']. '</span>
                        <span class="email">- Email: ' .$row['Email']. '</span>
                        <span class="statusAcc">- Trạng thái tài khoản: ';
                        if ($row['Status'] == 1)
                            echo 'Mở khóa' ;
                        else
                            echo 'Khóa' ;
                echo        '</span>
                    </div>
                    <a class="locknunlock" href="adminProcess.php?lockUser=l&acc=' .$row['NameAccount']. '"><i id = "icon3" class="';
                    if ($row['Status'] == 1)
                        echo "ti-unlock" ;
                    else
                        echo "ti-lock" ;
                echo '"></i></a>
                    </div>' ;
                if ($i == 1){
                    echo '</div>' ;
                }
                $i-- ;
            }

            echo '</div>' ;
        ?>
        <!-- <h1 style="margin: 15px 20px;text-align: center;">Thông Tin Người Dùng</h1>
        <div class="body-user">

            <div class="user-row">  
                <div class="user">
                    <img src="avauser/anh.jpg ">
                    <div class="information-user">
                        <span class="name">- Tên: Lê Đức Anh</span>
                        <span class="age">- Tuổi: 23</span>
                        <span class="email">- Email: fuckboiz@gmail.com</span>
                        <span class="status">- Trạng thái tài khoản: Mở khoá</span>
                    </div>
                </div>
                <div class="user">
                    <img src="avauser/viet+.jpg">
                    <div class="information-user">
                        <span class="name"> - Tên: Nguyễn Thành Việt</span>
                        <span class="age"> - Tuổi: 19</span>
                        <span class="email">- Email: vietplus369@gmail.com</span>
                        <span class="status">- Trạng thái tài khoản: Mở khoá</span>
                    </div>
                </div>
                <div class="user">
                    <img src="avauser/ronaldovn.jpg">
                    <div class="information-user">
                        <span class="name"> - Tên: Nguyễn Thành Đạt </span>
                        <span class="age"> - Tuổi: 20</span>
                        <span class="email"> - Email: jj2803@gmail.com</span>
                        <span class="status"> - Trạng thái tài khoản: Mở khoá</span>
                    </div>
                </div>
            </div>

            <div class="user-row">  
                <div class="user">
                    <img src="avauser/moi.jpg">
                    <div class="information-user">
                        <span class="name">- Tên: Trương Lê Gia Hưng</span>
                        <span class="age">- Tuổi: 15</span>
                        <span class="email">- Email: trlgh@gmail.com</span>
                        <span class="status">- Trạng thái tài khoản: Khoá</span>
                    </div>
                </div>
                <div class="user">
                    <img src="avauser/quan.jpg">
                    <div class="information-user">
                        <span class="name">- Tên: Trần Minh Quân</span>
                        <span class="age">- Tuổi: 18</span>
                        <span class="email">- Email: pongpink0802@gmail.com</span>
                        <span class="status">- Trạng thái tài khoản: Khoá</span>
                    </div>
                </div>
                <div class="user">
                    <img src="avauser/trieu.jpg">
                    <div class="information-user">
                        <span class="name">- Tên: Phạm Ngọc Triều</span>
                        <span class="age">- Tuổi: 30</span>
                        <span class="email">- Email: trieutrieu@gmail.com</span>
                        <span class="status">- Trạng thái tài khoản: Khoá</span>
                    </div>
                </div>
            </div>

            <a href="../../indexadmin.php" style="float: right;margin-right: 45px;margin-top: 20px;"><button style="padding: 5px 15px;cursor: pointer;"><i class="ti-home" style="margin-right: 5px;"></i>Quay lại trang chủ</button></a>
        </div> -->
        <?php include "footerAdmin.php" ; ?>
    </body>
</html>