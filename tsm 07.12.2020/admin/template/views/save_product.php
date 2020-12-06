<?php
$products_name = $_POST['products_name'];
$category = $_POST['category'];
$price = $_POST['price'];
$imgUrl = $_FILES['img']['name'];



if (!empty($_POST)){
    if($_FILES['img']['size'] > 0) {
        $imgUrl = '/images/' .$_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'],
            BASE_PATH.'/../images/' .$_FILES['img']['name']);
    }else{
        $imgUrl = "";
    }
}

$query = "INSERT INTO products (`products_name`, `category`, `price`, `img`)
VALUES (?, ?, ?, ?)
";
$sql = mysqli_prepare($connection, $query);
mysqli_stmt_bind_param($sql, 'ssds', $products_name, $category, $price , $imgUrl);
$res = mysqli_stmt_execute($sql);
$res = mysqli_stmt_get_result($sql);
?>

<div class="row">

    <h1>Товар добавлен!</h1>
    <a href="/admin/?action=list_products" class="btn btn-sm btn-success">Вернуться назад</a>




</div>
