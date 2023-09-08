<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/Seach.php';

class SearchController extends Controller{
public function show(){
    if(isset($_REQUEST['seach'])){
        $search = addslashes($_GET['seach']);
        if(empty($search)){
            echo"yc nhập sản phầm cần tìm";
        }else{
        $search_model = new Search();
        $search = $search_model->search();
        $this->content = $this->render('views/layouts/header.php', [
            'search' => $search,]);}
        require_once 'views/layouts/main.php';
}
}
