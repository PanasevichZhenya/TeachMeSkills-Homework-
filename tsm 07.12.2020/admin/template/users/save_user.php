<?php
require_once '../../../core/db.php';

if (isset($_POST['username'])){
    $username = $_POST['username'];
    if ($username == ''){
        unset($username);
    }
}
if (isset($_POST['password'])){
    $password = md5($_POST['password']);
    if ($username == ''){
        unset($password);
    }
}
if (isset($_POST['firstname'])){
    $firstname = $_POST['firstname'];
    if ($firstname == ''){
        unset($firstname);
    }
}
if (isset($_POST['lastname'])){
    $lastname = $_POST['lastname'];
    if ($lastname == ''){
        unset($lastname);
    }
}
if (isset($_POST['birthday'])){
    $birthday = $_POST['birthday'];
    if ($birthday == ''){
        unset($birthday);
    }
}
if (empty($username) or empty($password) or empty($firstname) or empty($lastname) or empty($birthday)){
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
$res = mysqli_query($connection, "SELECT id FROM users WHERE username = '{$username}'");
$myrow = mysqli_fetch_assoc($res);
if (!empty($myrow['id'])){
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}
$res2 = mysqli_query($connection, "INSERT INTO users (username, password, firstname, lastname, birthday)
VALUES ('{$username}', '{$password}', '{$firstname}', '{$lastname}', '{$birthday}')
");
if ($res2 == TRUE){
    echo "Вы успешно зарегистрированы! Пожалуйста, вернитесь обратно и введите ваш логин и пароль.<a href='../login.php' class>Вернуться назад</a>";

} else {
    echo "Ошибка! Вы не зарегистрированы.";
}
