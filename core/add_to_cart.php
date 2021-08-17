<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $cart = $_SESSION['cart'] ?? [];
    $id = $_POST['id'];
    $count = $_POST['count'];
    if (isset($cart[$id])){
        $cart[$id] += $count;
    }else {
        $cart[$id] = $count;
    }
    $_SESSION['cart'] = $cart;
}




