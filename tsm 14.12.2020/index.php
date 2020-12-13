<?php
session_start();

require_once './core/db.php';
if ($_SERVER['REQUEST_URI'] == "/" || isset($_GET['page_type'])){
    require_once './template/layout.php';
}if (isset($_GET['action'])){
    require_once './actions/'.$_GET['action'].'.php';
}








