<?php
session_start();
//session_destroy();
$action = $_GET['action'] ?? 'dashboard';

define('BASE_PATH', __DIR__);

$fullPath = BASE_PATH . '/template/views/' .$action.'.php';

require_once BASE_PATH.'/../core/db.php';
//$_SESSION['user'] = [
//    'name' => 'Евгений',
//    'lastName' => 'Панасевич',
//    'role' => 'admin'
//];
//var_dump($_SESSION);

if(!isset($_SESSION['user']) && empty($_SESSION['user'])) {

        require_once BASE_PATH . '/template/login.php';

    } else {

        require_once BASE_PATH . '/template/admin_layout.php';

}







//if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'moderator'){
//    $menuFile = 'admin.php';
//}else{
//    $menuFile = 'splite_menu.php';
//}



//if (isset($_GET['action']) && !empty($_GET['action'])){
//    $action = $_GET['action'];
//}else{
//    $action = 'dashboard';
//}
//
//var_dump($action);


//if(!isset($_GET['action'])){
//    $page = 'dashboard';
//}else if ($_GET['action'] == 'addpage'){
//    $page = 'add_page';
//}
