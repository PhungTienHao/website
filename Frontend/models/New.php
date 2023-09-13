<?php
require_once 'models/Model.php';
require_once 'controllers/NewController.php';

class News extends Model {
    public $id;
    public $name;
    public $summary;
    public $avatar;
    public $content;
    public $created_at;

    public function getAll(){
        $sql_select = "SELECT * FROM news";
        $obj_select = $this->connection->prepare($sql_select);
        $obj_select->execute();

        $news = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }


}