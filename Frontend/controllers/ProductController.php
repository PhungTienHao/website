<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/Pagination.php';
require_once 'models/Search.php';
class ProductController extends Controller {
  public function showAll() {
      $params = [];
    if (isset($_POST['filter'])) {
        if (isset($_POST['category'])) {
            $str_category = '';
            foreach ($_POST['category'] AS $category) {
                if ($category == 6) {
                    $str_category .= " OR categories.id = 6 ";
                }
                if ($category == 7) {
                    $str_category .= " OR categories.id = 7";
                }
                if ($category == 8) {
                    $str_category .= " OR categories.id = 8";
                }
                if ($category == 9) {
                    $str_category .= " OR categories.id = 9";
                }
            }

            $str_category = substr($str_category,3);
            $str_category = "($category)";
            $params['category'] = $str_category;
        }
      if (isset($_POST['price'])) {
        $str_price = '';
        foreach ($_POST['price'] AS $price) {
          if ($price == 1) {
            $str_price .= " OR products.price < 1000000";
          }
          if ($price == 2) {
            $str_price .= " OR (products.price >= 1000000 AND products.price < 3000000)";
          }
          if ($price == 3) {
            $str_price .= " OR (products.price >= 3000000 AND products.price < 6000000)";
          }
          if ($price == 4) {
            $str_price .= " OR products.price >= 6000000";
          }
        }

        $str_price = substr($str_price, 3);
        $str_price = "($str_price)";
        $params['price'] = $str_price;
      }
    }
      $params_pagination = [
          'total' => 5,
          'limit' => 1,
          'full_mode' => FALSE,
      ];

    $pagination_model = new Pagination($params_pagination);
    $pagination = $pagination_model->getPagination();

    $product_model = new Product();
    $products = $product_model->getProductInHomePage();

    $category_model = new Category();
    $categories = $category_model->getAll();

    $this->content = $this->render('views/products/show_all.php', [
      'products' => $products,
      'categories' => $categories,
      'paginations' => $pagination,

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
    $product_model = new Product();
    $product = $product_model->getById($id);

    $this->content = $this->render('views/products/detail.php', [
        'product' => $product
    ]);
    require_once 'views/layouts/main.php';
  }
    public function search() {
        // Lấy tham số tìm kiếm từ URL
        $searchKeyword = isset($_GET['timkiem']) ? $_GET['timkiem'] : '';

        // Tạo thể hiện của model Product
        $productModel = new Product();

        // Gọi hàm tìm kiếm sản phẩm dựa trên $searchKeyword
        $searchResults = $productModel->searchProducts($searchKeyword);

        // Trả về kết quả tìm kiếm cho view hiển thị
        require_once 'views/products/show-all.php';
    }



}