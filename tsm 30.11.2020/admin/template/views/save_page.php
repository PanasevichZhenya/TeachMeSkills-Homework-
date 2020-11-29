<?php
if (!empty($_POST)){
    if($_FILES['img']['size'] > 0) {
        $imgUrl = '/images/' .$_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'],
            BASE_PATH.'/../images/' .$_FILES['img']['name']);
    }else{
        $imgUrl = "";
    }
}

$sql = "
INSERT INTO pages (`title`, `content`, `author`, `category`, `img`)
VALUES ('{$_POST['title']}','{$_POST['content']}', '{$_POST['author']}', '{$_POST['category']}', '{$imgUrl}')
";
mysqli_query($connection, $sql);
?>

<div class="row">

        <h1>Статья добавлена!</h1>
        <a href="/admin/?action=list_page" class="btn btn-sm btn-success">Вернуться назад</a>




</div>
