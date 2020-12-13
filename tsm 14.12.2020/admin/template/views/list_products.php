<?php
//$sql = "SELECT * FROM products";
//$res = mysqli_query($connection, $sql);
//$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);


$sql = "SELECT * FROM products where 1";
$stmt = mysqli_prepare($connection, $sql);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);


?>

<a href="/admin/?action=add_product" class="btn btn-sm btn-success">Добавить товар</a>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Название</th>
        <th scope="col">Действие</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($pages as $page):?>
        <tr>
            <td><?=$page['products_name']?></td>
            <td>
                <a href="/admin/?action=edit_product&id=<?=$page['id']?>">Редактировать</a>
                <a href="/admin/?action=delete_product&id=<?=$page['id']?>">Удалить</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>



