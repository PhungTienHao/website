<?php
require_once 'models/Model.php';
class Search extends Model{
public function search(){
    $search = addslashes($_GET['search']);
    $sql_select = "select * from products where title like'%$search%'";
    $obj_select = $this->connection->prepare($sql_select);
    $obj_select->execute();
    $search = $obj_select->fetchAll(PDO::FETCH_ASSOC);
    return $search;
}

public function getById($id)
  {
    $obj_select = $this->connection
      ->prepare("SELECT products.*, categories.name AS category_name FROM products
          INNER JOIN categories ON products.category_id = categories.id WHERE products.id = $id");

    $obj_select->execute();
    $product =  $obj_select->fetch(PDO::FETCH_ASSOC);
    return $product;
  }}
?>

