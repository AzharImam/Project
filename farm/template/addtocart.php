<?php
    session_start();
    $id = $_GET['product_id'];
    if (in_array($id , $_SESSION['mycart'])) {
        $_SESSION['msg'] = "Product Already Added";
    } else {
        array_push($_SESSION['mycart'] , $id);
        $_SESSION['msg'] = "Product Added";
    }
     
?>