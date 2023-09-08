<?php
require_once 'models/Model.php';

class Assess extends Model
{

    public $id;
    public $name;
    public $email;
    public $assess;
    public $created_at;

    public function getAll()
    {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM assess
                        ORDER BY assess.created_at DESC
                        ");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $assess = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $assess;
    }


    public function getAllPagination($params = [])
    {
        $limit = $params['limit'];
        $page = $params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection
            ->prepare("SELECT * FROM products LIMIT $start, $limit");
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
        return $obj_select->fetch(PDO::FETCH_ASSOC);
    }


    public function delete($id)
    {
        $obj_delete = $this->connection
            ->prepare("DELETE FROM products WHERE id = $id");
        return $obj_delete->execute();
    }
}
