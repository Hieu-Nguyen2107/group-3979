<link rel="stylesheet" href="index.css" type="text/css">
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
        echo "<div class='list-header'><b>" .$show['TypeName']. "</b></div> 
            <div  class = 'product-list'>" ;
        $type = $show['TypeName'] ;
        $sql = "SELECT TypeName,ProductName,Price FROM product WHERE TypeName = '$type' "  ;
        $resP = mysqli_query($conn,$sql) ;
        $count = 1 ;
        while ($showP = mysqli_fetch_assoc($resP))
        {
            echo '<a class="product" href="trangchitiet/' .$show['TypeName']. '/' .$show['TypeName'].$count. '.php">    <!--DONE-->
                    <img src="productImage/' .$show['TypeName']. '/' .$show['TypeName'].$count. '.jpg">
                    <div class="product-detail">
                        <div class="name">' .$showP['ProductName']. '</div>
                        <div class="price">' .$showP['Price']. ' VNĐ</div>
                    </div>
                </a>' ;
        }
        echo "</div>" ;
    }

    mysqli_close($conn) ;
?>