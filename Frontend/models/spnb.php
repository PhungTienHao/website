<?php
require_once 'models/Model.php';
require_once 'controllers/SpnbController.php';
require_once 'models/Product.php';

class spnb extends Model {
    public $spnb;
    public $id;
    public $category_id;
    public $title;
    public $avatar;
    public $price;
    public $amount;
    public $summary;
    public $content;
    public $seo_title;
    public $seo_description;
    public $seo_keywords;
    public $status;
    public $created_at;
    public $updated_at;
    public $str_search = '';

    public function __construct()
    {
        parent::__construct();
        if (isset($_GET['title']) && !empty($_GET['title'])) {
            $this->str_search .= " AND spnb.title LIKE '%{$_GET['title']}%'";
        }
        if (isset($_GET['category_id']) && !empty($_GET['category_id'])) {
            $this->str_search .= " AND spnb.category_id = {$_GET['category_id']}";
        }
    }
    public function getAll()
    {
        $obj_select = $this->connection
            ->prepare("SELECT products.*, categories.name AS category_name FROM products 
                        INNER JOIN categories ON categories.id = sproducts.category_id
                        WHERE TRUE $this->str_search
                        ORDER BY products.created_at DESC
                        ");
        $arr_select = [];
        $obj_select->execute($arr_select);
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
        $sql_select = "SELECT spnb.*, categories.name 
          AS category_name FROM spnb
          INNER JOIN categories ON spnb.category_id = categories.id
          WHERE spnb.status = 1 $str_filter";

        $obj_select = $this->connection->prepare($sql_select);
        $obj_select->execute();
        $spnbs = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $spnbs;
    }
}