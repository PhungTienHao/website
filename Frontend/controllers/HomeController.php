<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/News.php';

class HomeController extends Controller {
  public function index() {
    $product_model = new Product();
    $products = $product_model->getspnb();
      $category_model = new Category();
      $categories = $category_model->getAll();
      $news_model = new News();
      $news = $news_model->getAlll();

     $this->content = $this->render('views/homes/index.php', [
      'products' => $products,
        'categories' => $categories,
         'news'=>$news,
    ]);
    require_once 'views/layouts/main.php';
  }

}