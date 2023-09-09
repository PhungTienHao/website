<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/Search.php';

class SearchController extends Controller{
public function show(){
    if(isset($_REQUEST['seach'])){
        $search = addslashes($_GET['seach']);
        if(empty($search)){
            echo"yc nhập sản phầm cần tìm";
        }else{
        $search_model = new Search();
        $search = $search_model->search();
        $this->content = $this->render('views/products/sk.php', [
            'search' => $search,]);}
        require_once 'views/layouts/main.php';
}}
    public function detail() {

        $id = $_GET['id'];
        $product_model = new Product();
        $product = $product_model->getById($id);

        $this->content = $this->render('views/products/detail.php', [
            'product' => $product
        ]);
        require_once 'views/layouts/main.php';
    }

    public function search() {
        $search_model = new Search();

        // Lấy từ khóa tìm kiếm từ yêu cầu GET
        $searchs = isset($_GET['search']) ? $_GET['search']:'' ;

        // Gọi phương thức tìm kiếm trong model
        $results = $search_model->search($searchs);

        // Truyền kết quả tìm kiếm tới view
        require_once 'views/search/search.php';
    }


}
