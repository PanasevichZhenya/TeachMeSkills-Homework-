<?php

//if(isset($_GET['id']) && !empty($_GET['id']) && $_GET['action'] == 'delete_product'){
//    $sql = "DELETE from products WHERE id = ". $_GET['id'];
//    $res = mysqli_query($connection, $sql);
//}

//$sql = "DELETE from products WHERE id = '{$_GET['id']}' ";
//$result = mysqli_query($connection, $sql);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$id = $_GET['id'];
$sql = mysqli_prepare($connection, 'DELETE FROM products WHERE id = ?');
mysqli_stmt_bind_param($sql, "d", $id);
mysqli_stmt_execute($sql);
$res = mysqli_stmt_get_result($sql);

?>
<div class="row">
    <form action="/admin/?action=list_products" enctype="multipart/form-data" method="post">
        <h1>Товар удален!</h1>
        <a href="/admin/?action=list_products" class="btn btn-sm btn-success">Вернуться назад</a>
    </form>
</div>
