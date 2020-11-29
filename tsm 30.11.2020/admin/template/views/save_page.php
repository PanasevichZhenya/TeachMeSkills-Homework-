<?php
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
$category = $_POST['category'];
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

$query = "INSERT INTO pages (`title`, `content`, `author`, `category`, `img`)
VALUES (?, ?, ?, ?, ?)
";
$sql = mysqli_prepare($connection, $query);
mysqli_stmt_bind_param($sql, 'sssss', $title, $content, $author, $category, $img);
$res = mysqli_stmt_execute($sql);
$res = mysqli_stmt_get_result($sql);
?>

<div class="row">

        <h1>Статья добавлена!</h1>
        <a href="/admin/?action=list_page" class="btn btn-sm btn-success">Вернуться назад</a>




</div>
