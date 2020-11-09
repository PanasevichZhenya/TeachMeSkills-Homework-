<?php
foreach ($data as $page):
    if ($page['id'] == $_GET['id']):?>
        <div class="container">
            <h1><?= $page['title']?></h1>
            <p><?= $page['content'] ?></p>
        </div>
    <?php
    endif;
endforeach;
?>

