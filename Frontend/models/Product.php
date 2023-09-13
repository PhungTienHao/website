<?php
require_once 'models/Model.php';
require_once 'controllers/ProductController.php';

class Product extends Model {

  public function getProductInHomePage($params = []) {
    $str_filter = '';
   if (isset($params['category'])) {
      $str_category = $params['category'];
      $str_filter .= "AND $str_category";
   }
   if (isset($params['price'])) {
      $str_price = $params['price'];
      $str_filter .= "AND $str_price";
   }
    $sql_select = "SELECT products.*, categories.name 
          AS category_name FROM products
          INNER JOIN categories ON products.category_id = categories.id
          WHERE products.status = 1 $str_filter";


    $obj_select = $this->connection->prepare($sql_select);
    $obj_select->execute();

    $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
    return $products;

  }
  public function getspnb($params = []) {
    $str_filter = '';
    if (isset($params['category'])) {
      $str_category = $params['category'];
      $str_filter .= " AND categories.id IN $str_category";
    }
    if (isset($params['price'])) {
      $str_price = $params['price'];
      $str_filter .= " AND $str_price";
    }
    $sql_select = "SELECT products.*, categories.name 
          AS category_name FROM products
          INNER JOIN categories ON products.category_id = categories.id
          WHERE products.status = 1 $str_filter AND products.is_feature =1";
var_dump($sql_select);
    $obj_select = $this->connection->prepare($sql_select);
    $obj_select->execute();

    $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
    return $products;

  }

    public function countTotal()
    {
        $obj_select = $this->connection->prepare("SELECT COUNT(id) FROM products WHERE TRUE $this->str_search");
        $obj_select->execute();
        return $obj_select->fetchColumn();
    }
  public function getById($id)
  {
    $obj_select = $this->connection
      ->prepare("SELECT products.*, categories.name AS category_name FROM products
          INNER JOIN categories ON products.category_id = categories.id WHERE products.id = $id");

    $obj_select->execute();
    $product =  $obj_select->fetch(PDO::FETCH_ASSOC);
    return $product;
  }
    public function searchProducts($keyword) {

        $stmt = $this->connection->prepare("SELECT * FROM products WHERE `title` LIKE :keyword");
        $keyword = "%" . $keyword . "%"; // Thêm dấu % cho tìm kiếm một phần từ khóa
        $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);

        $stmt->execute();

        $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $searchResults;
    }

}

?>

