<?php

use App\Helpers\Debugger;
use App\Router;

?>
<div class="container-fluid">
    <form method="post" action="<?= isset($category->id) ?
        '/admin/category/edit' . $category->id : '/admin/category/save' ?>">
        <div class="form-group">
            <label>Название категории</label>
            <input type="text" class="form-control" placeholder="" name="name"
                   value="<?= $category->name ?? '' ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit Button</button>
        <button type="reset" class="btn btn-secondary">Reset Button</button>
    </form>

</div>
