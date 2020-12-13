<?php
require_once __DIR__ . '/headers/main_header.php';


$cart = $_SESSION['cart'] ?? [];
$sql = "SELECT * FROM products where id in (".implode(', ', $cart).")";
$res = mysqli_query($connection, $sql);
$products = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>


<div class="container">
    <h1>корзина товаров</h1>
    <?php foreach ($products as $product): ?>
    <li><?=$product['products_name']?></li>
    <?php endforeach; ?>
</div>
