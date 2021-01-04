<div class="container-fluid">
    <div class="row">
            <h1>Категория товаров <a href="/admin/category/add" class="btn-success btn-sm">Добавить категорию</a></h1>

        <table class="table">
                <thead>
                <tr>
                    <th scope="col">Название категории</th>
                    <th scope="col">Действия</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($categories as $category): ?>
                <tr>

                    <td><?= $category->name ?></td>
                    <td><a href="/admin/category/show/<?=$category->id?>" class="btn-info btn-sm">Редактировать</a></td>
                    <td><a href="/admin/category/delete/<?=$category->id?>" class="btn-danger btn-sm">Удалить</a></td>

                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>


</div>
