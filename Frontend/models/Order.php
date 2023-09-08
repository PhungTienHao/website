<?php
require_once 'models/Model.php';
class Order extends Model {
  public $id;
  public $fullname;
  public $address;
  public $mobile;
  public $email;
  public $note;
  public $price_total;
  public $payment_status;
  public function insertOrder() {
    $sql_insert = "INSERT INTO orders(fullname, address, mobile, email, note, price_total, payment_status)
    VALUES (:fullname, :address, :mobile, :email, :note, :price_total, :payment_status)";
    $obj_insert = $this->connection->prepare($sql_insert);
    $arr_insert = [
        ':fullname' => $this->fullname,
        ':address' => $this->address,
        ':mobile' => $this->mobile,
        ':email' => $this->email,
        ':note' => $this->note,
        ':price_total' => $this->price_total,
        ':payment_status' => $this->payment_status,
    ];
    $obj_insert->execute($arr_insert);
    $order_id = $this->connection->lastInsertId();

    return $order_id;
  }
    public function online() {
        if (isset($_POST['submit'])) {
            require_once 'libraries/vnpay_php/vnpay_create_payment.php';
        }
        $view_vnpay = $this->render('libraries/vnpay_php/vnpay_pay.php');
        echo $view_vnpay;
    }

  public function getOrder($id) {
    $sql_select = "SELECT * FROM orders WHERE `id` = $id";
    $obj_select = $this->connection->prepare($sql_select);
    $obj_select->execute();

    return $obj_select->fetch(PDO::FETCH_ASSOC);
  }
    public function updatePaymentStatus($id, $payment_status) {
        $sql_update = "UPDATE orders SET payment_status=:payment_status WHERE id=:id";

        $obj_update = $this->connection->prepare($sql_update);
        $updates = [
            ':payment_status' => $payment_status, // 0 - Chưa thanh toán, 1 = Đã thanh toán
            ':id' => $id
        ];
        return $obj_update->execute($updates);
    }
}