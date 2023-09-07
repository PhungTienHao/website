<?php
require_once 'models/Model.php';
require_once 'controllers/SpnbController.php';


class Spnb extends Model
{
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
            $this->str_search .= " AND products.title LIKE '%{$_GET['title']}%'";
        }
        if (isset($_GET['category_id']) && !empty($_GET['category_id'])) {
            $this->str_search .= " AND products.category_id = {$_GET['category_id']}";
        }
    }
    public function getAll()
    {
        $obj_select = $this->connection
            ->prepare("SELECT products.*, categories.name AS category_name FROM products
                        INNER JOIN categories ON categories.id = products.category_id
                        WHERE TRUE $this->str_search
                        ORDER BY products.created_at DESC
                        ");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }
    public function getspnb()
    {
        $obj_select = $this->connection
            ->prepare("SELECT spnb.*, categories.name AS category_name FROM spnb
                        INNER JOIN categories ON categories.id = spnb.category_id
                        WHERE TRUE $this->str_search
                        ORDER BY spnb.created_at DESC
                        ");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $spnb = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $spnb;
    }

    public function getAllPagination($arr_params)
    {
        $limit = $arr_params['limit'];
        $page = $arr_params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection
            ->prepare("SELECT products.*, categories.name AS category_name FROM products 
                        INNER JOIN categories ON categories.id = spnb.category_id
                        WHERE TRUE $this->str_search
                        ORDER BY products.updated_at DESC, products.created_at DESC
                        LIMIT $start, $limit
                        ");

        $arr_select = [];
        $obj_select->execute($arr_select);
        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }

    /**
     * Tính tổng số bản ghi đang có trong bảng spnb
     * @return mixed
     */
    public function countTotal()
    {
        $obj_select = $this->connection->prepare("SELECT COUNT(id) FROM products WHERE TRUE $this->str_search");
        $obj_select->execute();

        return $obj_select->fetchColumn();
    }

    public function insert($id)
    {
        $obj_insert = $this->connection
            ->prepare("INSERT INTO spnb 
SELECT * FROM products where id = $id ");
          return $obj_insert;
    }


    public function delete($id)
    {
        $obj_delete = $this->connection
            ->prepare("DELETE FROM spnb WHERE id = $id");
        return $obj_delete->execute();
    }


}