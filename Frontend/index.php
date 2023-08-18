<?php
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller = ucfirst($controller); //Book
$controller .= "Controller";
$path_controller = "controllers/$controller.php";



if (file_exists($path_controller) == false) {
  die('Trang bạn tìm không tồn tại');
}

require_once "$path_controller";

$object = new $controller(); //$object = new BookController()

if (method_exists($object, $action) == false) {
  die("Không tồn tại phương thức $action của class $controller");
}
//index.php?controller=book&action=create
$object->$action();
?>