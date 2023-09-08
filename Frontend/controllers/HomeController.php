<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';

require_once 'models/Category.php';


class HomeController extends Controller {
  public function index() {
    $product_model = new Product();
    $products = $product_model->getspnb();
//      $spnb_model = new spnb();
//      $spnbs = $spnb_model->getspnb();
      $category_model = new Category();
      $categories = $category_model->getAll();
     $this->content = $this->render('views/homes/index.php', [
      'products' => $products,
//         'spnbs' => $spnbs,
        'categories' => $categories,
    ]);
    require_once 'views/layouts/main.php';
  }
    public function detail() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID ko hợp lệ';
            $url_redirect = $_SERVER['SCRIPT_NAME'] . '/';
            header("Location: $url_redirect");
            exit();
        }

        $id = $_GET['id'];
        $new_model = new news();
        $news = $new_model->getById($id);

        $this->content = $this->render('views/news/detail.php', [
            'news' => $news
        ]);
        require_once 'views/layouts/main.php';
    }
}