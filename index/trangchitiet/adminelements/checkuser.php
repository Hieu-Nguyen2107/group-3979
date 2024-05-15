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
            input#submit{
                text-transform: uppercase ;
            }
        </style>
    </head>
    <body>
        <?php include "headerAdmin.php" ; ?>
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
                <div id="ava-delete">
                    <img src="' ;
                    if (empty($row['AvatarUrl']))
                        echo 'empty5.jpg' ;
                    else
                        echo $row['AvatarUrl'] ;
                echo     '">' ;

                if (empty($row['AvatarUrl']))
                        echo '<form id="addAva" action="adminProcess.php?addAvatar=add" method="POST" enctype = "multipart/form-data">
                        <input type="button" value="Them" onclick="uploadFile();"/>
                        <script>
                        function uploadFile(){
                            file = document.getElementById("avatarUpload") ;
                            file.click() ;
                        }
                        </script>
                        <input type="hidden" name="acc" value="' .$row['NameAccount']. '" />
                        <input value="Go" id="avatarUpload" onchange="this.form.submit();" name="avatarUpload" type="file" style="display:none" />
                        </form>' ;
                    else
                        echo '<a href="adminProcess.php?deleteAvatar=delete&NameAccount=' .$row['NameAccount']. '" class="ti-trash"></a>' ;
                echo '</div>
                    <div class="information-user">
                        <form action="adminProcess.php?modifyUser=a&oldAcc=' .$row['NameAccount']. '" method="POST">
                            <lable for="nameAcc">- Tên tài khoản: </lable>
                            <input type="text" name="nameAcc" value="' .$row['NameAccount']. '">
                            <input id="submit" type="submit" name="changeNameAcc" value="save" >
                        </form>
                        <form action="adminProcess.php?modifyUser=a&name=' .$row['NameAccount']. '" method="POST">
                            <lable for="username">- Họ và tên: </lable>
                            <input type="text" name="username" value="' .$row['Name']. '">
                            <input id="submit" type="submit" name="changeUsername" value="save" >
                        </form>
                        <form action="adminProcess.php?modifyUser=a&name=' .$row['NameAccount']. '" method="POST">
                            <lable for="address">- Địa chỉ: </lable>
                            <input style="width:250px;" type="text" name="address" value="' .$row['Address']. '">
                            <input id="submit" type="submit" name="changeAddress" value="save" >
                        </form>
                        <form action="adminProcess.php?modifyUser=a&name=' .$row['NameAccount']. '" method="POST">
                            <lable for="email">- Email: </lable>
                            <input type="text" name="email" value="' .$row['Email']. '">
                            <input id="submit" type="submit" name="changeEmail" value="save" >
                        </form>
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
        <?php include "footerAdmin.php" ; ?>
    </body>
</html>