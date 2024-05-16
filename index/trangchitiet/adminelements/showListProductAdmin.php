<?php 
    $severname = "localhost" ;
    $username = "root" ;
    $password = "" ;
    $dbname = "mydb" ;
    
    $conn = new mysqli($severname, $username, $password, $dbname) ;
    
    if ($conn->connect_error){
        die("Connection error: " .$conn->connect_error) ;
    }

    $sql = "SELECT * FROM producttype" ;
    $res = mysqli_query($conn,$sql) ;
    while ($show = mysqli_fetch_assoc($res)){
        echo "<div class='list-header'><b>" .$show['ValueType']. "</b></div> 
            <div  class = 'product-list'>" ;
        $type = $show['TypeName'] ;
        $sql = "SELECT * FROM product WHERE TypeName = '$type' "  ;
        $resP = mysqli_query($conn,$sql) ;
        while ($row = mysqli_fetch_assoc($resP))
        {
            echo '<div class="product">    <!--DONE-->
                    <div class="img">' ;
                    if (!empty($row['ImageUrl']))
                        echo '<img src="../../' .$row['ImageUrl'] .'">' ;
                    else
                        echo '<img src="empty5.jpg">' ;
            echo'        </div>
                    <div class="product-detail">
                        <div class="name">' .$row['ProductName']. '</div>
                        <div class="price">' .$row['Price']. ' VNĐ</div>
                        <div class="status">Trạng thái:' ;
                if ($row["Status"])
                    echo 'Hiện' ;
                else
                    echo 'Ẩn' ;            
            echo'</div>
                        <div class="icon">
                            <a class="ti-trash" href="adminProcess.php?deleteP=delete&productName='.$row['ProductName'].'&status=' .$row["Status"]. '"></a>
                            <a class="ti-settings" href="updateproduct.php?productName=' .$row['ProductName']. '"></a></div>
                    </div>
                </div>' ;
        }
        echo "</div>" ;
    }

    mysqli_close($conn) ;
?>