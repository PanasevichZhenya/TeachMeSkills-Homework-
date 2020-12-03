<?php
if (!empty($_POST)) {
    $sql = "SELECT * FROM users where username = '{$_POST['name']}' limit 1";
    $res = mysqli_query($connection, $sql);
    $user = mysqli_fetch_assoc($res);
   // var_dump($user);

    if ($user) {
        if ($user['password'] == md5($_POST['password'])) {
            $_SESSION['user'] = $user;
            header("Location: http://homestead.test/admin/");
        }
    }
}

?>

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
            <div class="panel-heading">Log in</div>
            <div class="panel-body">
                <form method="post" action="#">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="name" type="text" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                        <button class="btn btn-primary">Войти</button>
                        <a href="/admin/template/users/sign_up.php" class="btn btn-sm btn-success">Зарегистрироваться</a>                    </fieldset>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

</body>

</html>

