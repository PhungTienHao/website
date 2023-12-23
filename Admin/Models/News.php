<?php
require_once 'models/Model.php';
require_once 'controllers/NewController.php';

class News extends Model {
    public $id;
    public $name;
    public $summary;
    public $avatar;
    public $content;
    public $is_home;
    public $created_at;

    public function getAll(){
        $sql_select = "SELECT * FROM news";
        $obj_select = $this->connection->prepare($sql_select);
        $obj_select->execute();

        $news = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }
    public function insert()
    {
        $obj_insert = $this->connection
            ->prepare("INSERT INTO news( name, avatar, summary, content,is_home) 
                                VALUES ( :name, :avatar, :summary, :content,:is_home)");
        $arr_insert = [
            ':name' => $this->name,
            ':avatar' => $this->avatar,
            ':summary' => $this->summary,
            ':content' => $this->content,
            ':is_home' =>$this->is_home,
        ];
        return $obj_insert->execute($arr_insert);
    }
    public function getById($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM news 
           WHERE news.id = $id");
        $obj_select->execute();
        return $obj_select->fetch(PDO::FETCH_ASSOC);
    }
    public function update($id)
    {
        $obj_update = $this->connection
            ->prepare("UPDATE news SET  name=:name, avatar=:avatar,
            summary=:summary, content=:content , is_home=:is_home WHERE id = $id");
        $arr_update = [
            ':name' => $this->name,
            ':avatar' => $this->avatar,
            ':summary' => $this->summary,
            ':content' => $this->content,
            ':is_home'=>$this->is_home,

        ];
        return $obj_update->execute($arr_update);
    }
    public function delete($id)
    {
        $obj_delete = $this->connection
            ->prepare("DELETE FROM news WHERE id = $id");
        return $obj_delete->execute();
    }


}