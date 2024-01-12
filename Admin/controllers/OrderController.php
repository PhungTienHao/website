<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/order.php';
require_once 'models/Pagination.php';

class OrderController extends Controller
{
    public function index(){
        $order_model = new Order();
        $order = $order_model->getAll();
        $this->content = $this->render('views/order/index.php',[
            'order'=>$order,
        ]);
        require_once 'views/layouts/main.php';
    }
    public function detail(){
        $detail_model = new Order();
        $detail = $detail_model->getdetail();
        $order_model = new Order();
        $order = $order_model->getAll();
        $this->content = $this->render('views/order/detail.php',[
            'detail'=>$detail,
            'order'=>$order,
        ]);
        require_once 'views/layouts/main.php';
    }
}
