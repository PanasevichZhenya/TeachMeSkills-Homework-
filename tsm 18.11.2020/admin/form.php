

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="Header">
        <div class="text"><h1>Start Bootstrap</h1>
            <p>Features</p>
            <p>About</p>
            <p>Pricing</p>
            <p>Reviews</p>
        </div>
    </div>
    <div class="article_form">

        <?php require_once '../db.php';?>

        <h2>Заполните форму:</h2>
        <form action="" method="post">
            <input type="text" name="title" placeholder="Название статьи"/>
            <br>
            <input type="text" name="img" placeholder="Ссылка на картинку"/>
            <br>
            <textarea name="content" id="" cols="30" rows="10" placeholder="Введите текст"></textarea>
            <br>
            <input type="text" name="author" placeholder="Автор"/>
            <br>
            <input type="text" name="category" placeholder="Категория статьи"/>
            <br>
            <button type="submit">Отправить</button>
        </form>

        <?php
    if (!empty($_POST)){
        $sql = "INSERT INTO `pages` (`title`, `img`, `content`, `author`, `category`)
        VALUES ('{$_POST['title']}', '{$_POST['img']}', '{$_POST['content']}', '{$_POST['author']}',
        '{$_POST['category']}')
        ";
    mysqli_query($connection, $sql);
    }
        ?>


    </div>
    <footer>


        <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>

    </footer>

</div>
</body>
</html>
