<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/spnb.php';
require_once 'models/Category.php';

class HomeController extends Controller {
  public function index() {
//    $product_model = new Product();
//    $products = $product_model->getProductInHomePage();

      $spnb_model = new spnb();
      $spnbs = $spnb_model->getspnb();
      $category_model = new Category();
      $categories = $category_model->getAll();
     $this->content = $this->render('views/homes/index.php', [
      'spnbs' => $spnbs,
        'categories' => $categories,
    ]);
    require_once 'views/layouts/main.php';
  }
}