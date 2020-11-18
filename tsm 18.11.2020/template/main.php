<?php
$sql = "SELECT * FROM pages;";
$result = mysqli_query($connection, $sql);

$articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
require_once __DIR__ . '/headers/' . $name . '_header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php foreach ($articles as $article): ?>
                <div class="post-preview">
                    <a href="/?page_type=article&id=<?=$article['id']?>">
                        <h2 class="post-title">
                            <?= $article['title'] ?>
                        </h2>

                    </a>
                    <img src="<?=$article['img']?>" alt="">
                    <h3 class="post-subtitle">
                        <?= substr($article['content'], 0, 100) ?>...
                    </h3>
                    <p class="post-meta">Posted by
                        <a href="#"><?= $article['author'] ?></a>
                        in <?= $article['category'] ?>
                    </p>
                </div>
                <hr>
            <?php endforeach; ?>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>
