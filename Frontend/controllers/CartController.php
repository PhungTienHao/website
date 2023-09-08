<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';

class CartController extends Controller
{
  public function add()
  {
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
      $_SESSION['error'] = 'ID sản phẩm ko hợp lệ';
      header('Location: index.php');
      exit();
    }
      $id = $_GET['id'];
      $product_model = new Product();
      $product = $product_model->getById($id);
      $cart_item = [
          'name' => $product['title'],
          'price' => $product['price'],
          'avatar' => $product['avatar'],
          'quantity' => 1
      ];

      if (!isset($_SESSION['cart'])) {
          $_SESSION['cart'][$id] = $cart_item;
      } else {
          // Sp thêm đã tồn tại trong giỏ
          if (isset($_SESSION['cart'][$id])) {
              $_SESSION['cart'][$id]['quantity']++;
          } else {
              // Sp thêm chưa tồn tại
              $_SESSION['cart'][$id] = $cart_item;
          }
      }
//      echo '<pre>';
//      print_r($_SESSION['cart']);
//      echo '</pre>';
  }

  public function index()
  {
      if (isset($_POST['submit'])) {
          foreach ($_SESSION['cart'] AS $id => $cart_item) {
              $_SESSION['cart'][$id]['quantity'] = $_POST[$id];
          }
          $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
      }
      $this->page_title = 'Giỏ hàng của bạn';
      $this->content =
          $this->render('views/carts/index.php');
      require_once 'views/layouts/main.php';
  }


  public function delete()
  {
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
      $_SESSION['error'] = 'Không tồn tại id';
      $url_redirect = $_SERVER['SCRIPT_NAME'] . '/gio-hang-cua-ban.html';
      header("Location: $url_redirect");
      exit();
    }

    $product_id = $_GET['id'];
    unset($_SESSION['cart'][$product_id]);

    if (empty($_SESSION['cart'])) {
      unset($_SESSION['cart']);
    }

    $_SESSION['success'] = 'Xóa sản phẩm khỏi giỏ hàng thành công';

    $url_redirect = $_SERVER['SCRIPT_NAME'] . '/gio-hang-cua-ban.html';
    header("Location: $url_redirect");
    exit();
  }
}