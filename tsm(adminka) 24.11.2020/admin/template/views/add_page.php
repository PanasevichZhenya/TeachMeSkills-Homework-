    <div class="row">
        <form role="form" method="post" action="/admin/?action=save_page" enctype="multipart/form-data">

            <div class="form-group">
                <label>Заголовок:</label>
                <input type="text" class="form-control" placeholder="Placeholder" name="title">
            </div>

            <div class="form-group">
                <label>Добавьте картинку:</label>
                <input type="file"  name="img">
            </div>

            <div class="form-group">
                <label>Добавьте статью:</label>
                <textarea class="form-control" rows="3" name="content"></textarea>
                <p class="help-block">Example block-level help text here.</p>
            </div>

            <div class="form-group">
                <label>Имя автора(необязательно):</label>
                <input type="text" class="form-control" name="author">
            </div>

            <div class="form-group">
                <label>Категория статьи:</label>
                <input type="text" class="form-control" name="category">
            </div>
            <button type="submit" class="btn btn-primary">Submit Button</button>
            <button type="reset" class="btn btn-default">Reset Button</button>
        </form>
    </div>

