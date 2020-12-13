<?php
require_once __DIR__ . '/headers/main_header.php';

$sql = "SELECT * FROM categories_products";
$res = mysqli_query($connection, $sql);
$categories = mysqli_fetch_all($res, MYSQLI_ASSOC);


$sortedCategories = [];

foreach ($categories as $category){
    $sortedCategories[$category['id']] = $category;
}

$sql = "SELECT * FROM brands";
$res = mysqli_query($connection, $sql);
$brands = mysqli_fetch_all($res, MYSQLI_ASSOC);


$sortedBrands = [];

foreach ($brands as $brand){
    $sortedBrands[$brand['id']] = $brand;
}

if(isset($_GET['id'])){
    $sql = "SELECT * FROM products WHERE category = ".$_GET['id'];
}else{
    $sql = "SELECT * FROM products order by id DESC";
}

$res = mysqli_query($connection, $sql);
$products = mysqli_fetch_all($res, MYSQLI_ASSOC);
//var_dump($products);
?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group">
                <?php foreach ($categories as $category): ?>
                    <li class="list-group-item">
                        <a href="/?page_type=catalog&id=<?=$category['id']?>"><?=$category['category_name']?></a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
        <div class="col-md-8">
            <div class="row">
                <?php foreach ($products as $product):?>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://sobitie.com.ua/sites/default/files/styles/full_post/public/field/image/shirokiy_vybor_elektronnoy_tehniki_dlya_doma_i_ofisa.jpg?itok=1aNu0Llk" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?=$product['products_name']?></h5>
                        <p class="card-text">
                            Категория: <?=$sortedCategories[$product['category']]['category_name']?>
                            <hr>
                            Бренд: <?=$sortedBrands[$product['brand_id']]['brand_name']?>
                        </p>
                        <a href="/?page_type=product&product_id=<?=$product['id']?>" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>
