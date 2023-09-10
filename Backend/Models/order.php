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

    public function getAll(){
        $obj_select = $this->connection
            ->prepare("SELECT * FROM orders JOIN order_details ");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $order = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $order;
    }
    public function getdetail(){
        $obj_select = $this->connection
            ->prepare("SELECT * FROM order_details ");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $detail = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $detail;
    }
}
