<?php
$id = $_GET['id'];
$sql = "SELECT * FROM pages where id = " . $id;

$res = mysqli_query($connection, $sql);
if (mysqli_num_rows($res) === 1):

    $article = mysqli_fetch_assoc($res);

    require_once __DIR__ . '/headers/' . $name . '_header.php';

    ?>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <?= $article['content'] ?>
                </div>
            </div>
        </div>
    </article>

    <hr>
<?php
endif;