<?php
require_once 'models/Model.php';

class Order extends Model
{
    public $id;
    public $fullname;
    public $address;
    public $mobile;
    public $email;
    public $note;
    public $price_total;
    public $payment_status;
    public $created_at;
    public $product_id;
    public $price;
    public $Title;

    public function getAll(){
        $obj_select = $this->connection
            ->prepare("SELECT orders.*, order_details.order_id, order_details.product_id FROM orders
                        INNER JOIN order_details ON orders.id = order_details.order_id
                        ORDER BY orders.created_at DESC
                        ");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $order = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $order;
    }
    public function getdetail(){
        $obj_select = $this->connection
            ->prepare("SELECT * FROM orders JOIN order_details JOIN products");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $detail = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $detail;
    }
}
