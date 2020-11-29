<?php
//$sql = "
//UPDATE pages SET title = 'ololo', author = 'ololo2' WHERE id = 1
//";
//mysqli_query($connection, $sql);
//var_dump($_POST);
//$_POST['content'] = 'new content';

$id = $_GET['id'];


$sql = "UPDATE pages SET ";
foreach ($_POST as $key => $value){
    $sql .= "{$key} = '$value',";
}
$sql = substr($sql, 0, -1);
$sql .= ' where id='.$_GET['id'];
//echo $sql;
//mysqli_query($connection, $sql);
$sql = mysqli_prepare($connection, $sql);
mysqli_stmt_execute($sql);

?>

<div class="row">
    <h1>Статья отредактирована!</h1>
    <a href="/admin/?action=list_page" class="btn btn-sm btn-success">Вернуться назад</a>
</div>

