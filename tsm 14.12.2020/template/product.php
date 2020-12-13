<?php
require_once __DIR__ . '/headers/main_header.php';

$sql = "SELECT * FROM products
LEFT JOIN categories_products on products.category = categories_products.id
LEFT JOIN brands on products.brand_id = brands.id
where products.id=".$_GET['product_id'];


$res = mysqli_query($connection, $sql);
$product = mysqli_fetch_assoc($res);
//var_dump($product);

?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="https://static.service-centers.ru/img/categories/main/431.jpg" alt=""  style="max-width: 100%">
            <button class="add_to_cart" style="width: 70%" data-id="<?=$_GET['product_id']?>">Добавить в корзину</button>
        </div>
        <div class="col-md-8" style="">
            <h1><?=$product['products_name']?></h1>
            <p>discription</p>
            <table class="table">
                <tbody>
                <tr>
                    <td>Бренд:</td>
                    <td><?=$product['brand_name']?></td>
                </tr>
                <tr>
                    <td>Категория:</td>
                    <td><?=$product['category_name']?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".add_to_cart").on('click', function (event) {
            let id = $(event.target).data('id');
            $.ajax({
                url: '/?action=add_to_cart',
                method: 'post',
                data: {id: id},
                success: function(data){
                    // заменить содержимое контейнера товаров
                },
                error: function (data) {

                },
                done: function (data) {
                    alert(34534534);
                }
            });

        })

    });
</script>
