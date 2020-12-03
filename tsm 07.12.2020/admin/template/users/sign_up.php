<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forms</title>

    <link href="/admin_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin_assets/css/datepicker3.css" rel="stylesheet">
    <link href="/admin_assets/css/styles.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="/admin_assets/js/html5shiv.js"></script>
    <script src="/admin_assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Регистрация</div>
            <div class="panel-body">
                <div class="panel-body">
                    <form method="post" action="save_user.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Придумайте логин" name="username" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Придумайте пароль" name="password" type="password" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Ваше имя" name="firstname" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Ваша фамилия" name="lastname" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Дата рождения" name="birthday" type="date" value="">
                            </div>
                            <button class="btn btn-primary">Отправить данные</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

</body>

</html>
