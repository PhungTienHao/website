<?php
require_once 'models/Model.php';
require_once 'controllers/AssessController.php';

class Assess extends Model
{

    public $id;
    public $name;
    public $email;
    public $assess;
    public $created_at;

    public function insert()
    {
        $obj_insert = $this->connection
            ->prepare("INSERT INTO assess(name, email, assess) 
                                VALUES (:name, :email, :assess)");
        $arr_insert = [
            ':name' => $this->name,
            ':email' => $this->email,
            ':assess' => $this->assess,
        ];
        return $obj_insert->execute($arr_insert);
    }


}
