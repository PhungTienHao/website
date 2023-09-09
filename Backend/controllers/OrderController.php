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
}
