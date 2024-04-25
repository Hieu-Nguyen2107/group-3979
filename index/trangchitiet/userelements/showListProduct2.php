<?php 
    $severname = "localhost" ;
    $username = "root" ;
    $password = "" ;
    $dbname = "mydb" ;
    
    $conn = new mysqli($severname, $username, $password, $dbname) ;
    
    if ($conn->connect_error){
        die("Connection error: " .$conn->connect_error) ;
    }

    $sql = "SELECT * FROM producttype WHERE TypeName = 'dochoivandong' OR TypeName = 'lego'" ;
    $res = mysqli_query($conn,$sql) ;
    while ($show = mysqli_fetch_assoc($res)){
        echo "<div class='list-header'><b>" .$show['ValueType']. "</b></div> 
            <div  class = 'product-list'>" ;
        $type = $show['TypeName'] ;
        $sql = "SELECT * FROM product WHERE TypeName = '$type' "  ;
        $resP = mysqli_query($conn,$sql) ;
        $count = 1 ;
        while ($row = mysqli_fetch_assoc($resP))
        {
            echo '<a class="product" href="trangchitiet/' .$row['TypeName']. '/' .$show['TypeName'].$count. '.php">    <!--DONE-->
                    <img src="../../' .$row['ImageUrl'] .'">
                    <div class="product-detail">
                        <div class="name">' .$row['ProductName']. '</div>
                        <div class="price">' .$row['Price']. ' VNĐ</div>
                    </div>
                </a>' ;
            $count++ ;
        }
        echo "</div>" ;
    }

    mysqli_close($conn) ;
?>