<?php
require_once 'controllers/Controller.php';
require_once 'models/Order.php';
require_once 'models/OrderDetail.php';
require_once 'helpers/Helper.php';

class PaymentController extends Controller
{
    public function index(){
        if(isset($_POST['submit'])){
            $fullname=$_POST['fullname'];
            $mobile=$_POST['mobile'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $note=$_POST['note'];
            if(empty($this->error)){
                $order_model =new Order();

                $payment_status=0;
                foreach ($_SESSION['cart'] AS $cart_item){
                    $price_total +=
                        $cart_item['price']*$cart_item['quantity'];
                }

                $order_id=$order_model->insertOrder($fullname,$address,$mobile,$email,$note,$price_total,$payment_status);
                foreach ($_SESSION['cart']AS $cart_item){
                    $detail_model =new OrderDetail();
                    $is_insert = $detail_model->insert($order_id,$cart_item['name'],$cart_item['price'],$cart_item['quantity']);
                }
                Helper::sendMail($email,'Fuchao Game Store xin chào bạn','bạn đã đặt mua 1 đơn hàng từ website của chúng tôi?');
                if($_POST['method']==0){
                    header('location:index.php?controller=payment&action=online');
                    exit();
                }

            }

        }
        $this->page_title='trang thanh toán';
        $this->content = $this->render('views/payments/index.php');
        require_once 'views/layouts/main.php';

    }
    public function online() {
        if (isset($_POST['submit'])) {
            require_once 'libraries/vnpay_php/vnpay_create_payment.php';
        }
        $view_vnpay = $this->render('libraries/vnpay_php/vnpay_pay.php');
        echo $view_vnpay;
    }


public function thank()
  {
    unset($_SESSION['cart']);
    $this->content = $this->render('views/payments/thank.php');
    require_once 'views/layouts/main.php';
  }

  public function payment()
  {
    $this->content = $this->render('libraries/nganluong/index.php');

    require_once 'views/layouts/main.php';
  }
}