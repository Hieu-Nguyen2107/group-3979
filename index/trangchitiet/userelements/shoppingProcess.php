<?php 

    if (!isset($_COOKIE["user"])){
        header("Location: login.php") ;
        exit ;
    }else{
        session_start() ;
        $pName = $_GET["pName"] ;
        $amount = (int) $_POST["amount"] ;
        if(!isset($_SESSION["products"])){
            $_SESSION["products"] = [] ;
        }

        $pIndex = array_search($pName, array_column($_SESSION["products"],0)) ;
        if ($pIndex !== false){
            if (isset($_POST["plusCart"])){
                $_SESSION["products"][$pIndex][1] = $_POST["plusCart"] ;
            }else{
                $_SESSION["products"][$pIndex][1] += $amount ;
            }
        }else{
            $product = [$pName,$amount] ;
            $_SESSION["products"][] = $product ;
        }
        header ("Location: shoppingCart.php") ;
        exit ;
    }

?>