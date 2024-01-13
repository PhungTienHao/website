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

        $product_id = $_GET['id'];

        $product_model = new Product();
        $product = $product_model->getById($product_id);
        $product_cart = [
            'name' => $product['title'],
            'price' => $product['price'],
            'avatar' => $product['avatar'],
            'quantity' => 1,
        ];

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'][$product_id] = $product_cart;
        } //trường hợp tồn tại giỏ hàng r thì lại xảy ra 2 trường hợp
        else {
            //nếu sản phẩm thêm vào chưa tồn tại trong giỏ hàng, thì chỉ việc add mới vào
            //việc check xem sản phẩm đã tồn tại trong giỏ hàng hay chưa sẽ dựa vào key - hay chính là product id - của giỏ hàng, nếu tồn tại key
//      thì nghĩa là sản phẩm đã tồn tại trong giỏ hàng, ngược lại là chưa
            $is_exist_product = array_key_exists($product_id, $_SESSION['cart']);
            //nếu chưa tồn tại thì thêm mới vào giỏ hàng
            if (!$is_exist_product) {
                $_SESSION['cart'][$product_id] = $product_cart;
            } else {
                //nếu đã tồn tại thì chỉ update số lượng của sản phẩm đó dựa theo key
                $_SESSION['cart'][$product_id]['quantity']++;
            }
        }

        echo TRUE;


    }

    public function index()
    {
        //nếu user update form giỏ hàng
        if (isset($_POST['ok'])) {
            //lặp mảng giỏ hàng để tiến hành update lại số lượng cho giỏ hàng
            foreach ($_SESSION['cart'] AS $product_id => $cart) {
                $_SESSION['cart'][$product_id]['quantity'] = $_POST[$product_id];
            }
            $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
        }

        $this->content = $this->render('views/carts/index.php');
        require_once 'views/layouts/main.php';
    }


    public function delete()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'Không tồn tại id';
            //sau khi xử lý xong giỏ hàng thì chuyển hướng về trang danh sách giỏ hàng
            //do đang sử dụng rewwrite url nên các url khi chuyển hướng cần có cả đường dẫn ứng dụng
            $url_redirect = $_SERVER['SCRIPT_NAME'] . '/gio-hang-cua-ban.html';
            header("Location: $url_redirect");
            exit();
        }

        $product_id = $_GET['id'];
        unset($_SESSION['cart'][$product_id]);
        //nếu sau khi xóa sản phẩm hiện tại, nếu giỏ hàng trống thì xóa session cart này đi
        if (empty($_SESSION['cart'])) {
            unset($_SESSION['cart']);
        }

        $_SESSION['success'] = 'Xóa sản phẩm khỏi giỏ hàng thành công';

        //chuyển hướng về trang giỏ hàng
        //sau khi xử lý xong giỏ hàng thì chuyển hướng về trang danh sách giỏ hàng
        //do đang sử dụng rewwrite url nên các url khi chuyển hướng cần có cả đường dẫn ứng dụng
        $url_redirect = $_SERVER['SCRIPT_NAME'] . '/gio-hang-cua-ban.html';
        header("Location: $url_redirect");
        exit();
    }
}