<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$id = $_GET['id'];
$sql = mysqli_prepare($connection, 'DELETE FROM categories_products WHERE id = ?');
mysqli_stmt_bind_param($sql, "d", $id);
mysqli_stmt_execute($sql);
$res = mysqli_stmt_get_result($sql);

?>
<div class="row">
    <form action="/admin/?action=list_categories_products" enctype="multipart/form-data" method="post">
        <h1>Категория удалена!</h1>
        <a href="/admin/?action=list_categories_products" class="btn btn-sm btn-success">Вернуться назад</a>
    </form>
</div>
