<div class="container-fluid">
    <div class="row">
        <h1>Товары <a href="/admin/product/add" class="btn-success btn-sm">Добавить товар</a></h1>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">id товара</th>
                <th scope="col">Название товара</th>
                <th scope="col">Категория товара</th>
                <th scope="col">Действия</th>

            </tr>
            </thead>
            <tbody>

            <?php foreach ($products as $product): ?>

                <tr>
                    <td><?= $product->id ?></td>
                    <td><?= $product->name ?></td>
                    <td><?= ($categories[$product->category])->name ?></td>

                    <td><a href="/admin/product/show/<?=$product->id?>" class="btn-info btn-sm">Редактировать</a></td>
                    <td><a href="/admin/product/delete/<?=$product->id?>" class="btn-danger btn-sm">Удалить</a></td>

                </tr>

            <?php endforeach; ?>

            </tbody>
        </table>

        <?php if ( $pages > 1 ) : ?>

        <nav aria-label="Page navigation example">
            <ul class="pagination">

                <?php for ( $i = 1; $i <= $pages; $i++): ?>

                <li class="page-item"><a class="page-link" href="?page=<?=$i?>"><?=$i?></a></li>

                <?php endfor; ?>

            </ul>
        </nav>

        <?php endif; ?>

    </div>


</div>
