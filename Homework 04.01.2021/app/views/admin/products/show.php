<?php

use App\Helpers\Debugger;
use App\Router;

?>
<div class="container-fluid">
    <form method="post" action="<?= isset($product->id) ?
        '/admin/category/edit' . $product->id : '/admin/category/save' ?>">
        <div class="form-group">
            <label>Название товара</label>
            <input type="text" class="form-control" placeholder="" name="name"
                   value="<?= $product->name ?? '' ?>">
        </div>

        <div class="form-group">
            <label>Категория товара</label>
            <select name="category_name" id="" class="form-control">
                <option value="" >Выберите категорию</option>
                <?php foreach ($categories as $category): ?>
                <?php $selected = ($product->category ?? false) == $category->id?>
                    <option value="<?= $category->id ?>" <?= $selected?'selected':"" ?>>
                        <?= $category->name ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Бренд товара</label>
            <select name="category_name" id="" class="form-control">
                <option value="" >Выберите бренд</option>

                <?php foreach ($brands as $brand): ?>
                    <?php $selected = ($product->brand_id ?? false) === $brand->id?>
                    <option value="<?= $brand->id ?>" <?= $selected?'selected':"" ?>>
                        <?= $brand->brand_name ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>



        <button type="submit" class="btn btn-primary">Submit Button</button>
        <button type="reset" class="btn btn-secondary">Reset Button</button>
    </form>

</div>

