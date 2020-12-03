<?php
if(isset($_GET['id']) && !empty($_GET['id']) && $_GET['action'] == 'edit_page'){
//    $sql = "SELECT * from pages where id = ". $_GET['id'];
//    $res = mysqli_query($connection, $sql);
//    $page = mysqli_fetch_assoc($res);
    $id = $_GET['id'];
    $sql = "SELECT * from pages where id = ?";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, 'd', $id);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $page = mysqli_fetch_assoc($res);
}

$sql = "SELECT * from category";
$res = mysqli_query($connection, $sql);
$categories = mysqli_fetch_all($res, MYSQLI_ASSOC);
var_dump($categories);



/*$url = isset($page['id']) ? '/admin/?action=update_page&id=' . $page['id'] : '/admin/?action=save_page';
*/
if(isset($page['id'])){
    $url = '/admin/?action=update_page&id=' . $page['id'];
}else{
    $url = '/admin/?action=save_page';
}
?>

    <div class="row">
        <form role="form" method="post" action="<?=$url?>" enctype="multipart/form-data">

            <div class="form-group">
                <label>Заголовок:</label>
                <input type="text" class="form-control" placeholder="Placeholder" name="title" value="<?=$page['title'] ?? ''?>">
            </div>

            <div class="form-group">
                <label>Добавьте картинку:</label>
                <input type="file"  name="img">
            </div>

            <div class="form-group">
                <label>Добавьте статью:</label>
                <textarea class="form-control" rows="3" name="content"><?=$page['content'] ?? ''?></textarea>
                <p class="help-block">Example block-level help text here.</p>
            </div>

            <div class="form-group">
                <label>Имя автора(необязательно):</label>
                <input type="text" class="form-control" name="author" value="<?=$page['author'] ?? ''?>">
            </div>

            <div class="form-group">
                <label>Категория статьи:</label>
                <select name="category" class="form-control">
                    <?php foreach ($categories as $category):
                        $selected = '';
                        if(isset($page['category']) && $page['category'] == $category['id']){
                            $selected = 'selected';
                        }?>
                    <option value="<?=$category['id']?>" <?=$selected?>><?=$category['category_name']?></option>
                    <?php endforeach; ?>
                </select>


            </div>
            <button type="submit" class="btn btn-primary">Submit Button</button>
            <button type="reset" class="btn btn-default">Reset Button</button>
        </form>
    </div>

