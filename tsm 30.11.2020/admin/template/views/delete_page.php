<?php

if(isset($_GET['id']) && !empty($_GET['id']) && $_GET['action'] == 'delete_page'){
    $sql = "DELETE from pages WHERE id = ". $_GET['id'];
    $res = mysqli_query($connection, $sql);
}

//$sql = "DELETE from pages WHERE id = '{$_GET['id']}' ";
//$result = mysqli_query($connection, $sql);
?>
 <div class="row">
        <form action="/admin/?action=list_page" enctype="multipart/form-data" method="post">
                <h1>Статья удалена!</h1>
                <a href="/admin/?action=list_page" class="btn btn-sm btn-success">Вернуться назад</a>
        </form>
 </div>
