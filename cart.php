<?php
    session_start();
    require 'connect.php';
    $id = $_GET['id'];
    $sql = "select * from tbl_sanpham where id_sanpham = $id";
    $result = mysqli_query($conn, $sql);
    $product_cart = array();
    foreach ($result as $value) {
        $product_cart[$value["id_sanpham"]] = $value;
    }
    if (isset($_POST["add-to-cart"])) {
        if (!isset($_SESSION["cart"]) || $_SESSION["cart"] == null) {
            $product_cart[$id]["so_luong"] = 1;
            $_SESSION["cart"][$id] = $product_cart[$id];
        }
        else {
            if (array_key_exists($id, $_SESSION["cart"])){
                $_SESSION["cart"][$id]["so_luong"] += 1;
            } else {
                $product_cart[$id]["so_luong"] = 1;
                $_SESSION["cart"][$id] = $product_cart[$id];
            }
        }
        header("location:shopping.php");
    }
?>