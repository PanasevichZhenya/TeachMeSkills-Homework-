<?php
//$sql = "SELECT * FROM categories_products";
//$res = mysqli_query($connection, $sql);
//$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);


$sql = "SELECT * FROM categories_products where 1";
$stmt = mysqli_prepare($connection, $sql);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);


?>

<a href="/admin/?action=add_category" class="btn btn-sm btn-success">Добавить категорию</a>
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
            <td><?=$page['category_name']?></td>
            <td>
                <a href="/admin/?action=delete_category&id=<?=$page['id']?>">Удалить</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>



