<?php
if (!empty($_POST)) {
    $category_name = $_POST['category_name'];
    $query = "INSERT INTO categories_products (`category_name`)
VALUES (?)
";
    $sql = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($sql, 's', $category_name);
    mysqli_stmt_execute($sql);
    var_dump($_POST);
}
?>

<div class="row">

    <h1>Категория добавлена!</h1>
    <a href="/admin/?action=list_categories_products" class="btn btn-sm btn-success">Вернуться назад</a>

</div>
