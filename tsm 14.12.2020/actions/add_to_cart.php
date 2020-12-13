<?php
if (isset($_POST['id'])){
    $cart = $_SESSION['cart'] ?? [];
    if(!in_array($_POST['id'], $cart)){
        $_SESSION['cart'][] = $_POST['id'];
    }
}
