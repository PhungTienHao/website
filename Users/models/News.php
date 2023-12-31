<?php
require_once 'models/Model.php';
require_once 'controllers/HomeController.php';

class News extends Model {
    public $id;
    public $name;
    public $summary;
    public $avatar;
    public $content;
    public $is_home;
    public $created_at;

    public function getAlll(){
        $sql_select = "SELECT * FROM news WHERE news.is_home = 1";
        $obj_select = $this->connection->prepare($sql_select);
        $obj_select->execute();

        $news = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }

public function Allnews(){
    $sql_select = "SELECT * FROM news ORDER BY news.created_at DESC ";
    $obj_select = $this->connection->prepare($sql_select);
    $obj_select->execute();
    $news = $obj_select->fetchAll(PDO::FETCH_ASSOC);
    return $news;

}
public function getById($id){
    $sql_select = "SELECT * FROM news where news.id = $id";
    $obj_select = $this->connection->prepare($sql_select);
    $obj_select->execute();
    $news = $obj_select->fetchAll(PDO::FETCH_ASSOC);
    return $news;
}
}