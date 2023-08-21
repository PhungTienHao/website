<?php
require_once 'models/Model.php';
require_once 'configs/Database.php';


class User extends Model {

    public $id;
    public $username;
    public $password;
    public $name;
    public $phone;
    public $address;
    public $email;
    public $avatar;
    public $created_at;
    public $str_search;

    public function __construct()
    {
        parent::__construct();
        if (isset($_GET['username']) && !empty($_GET['username'])) {
            $username = addslashes($_GET['username']);
            $this->str_search .= " AND users.username LIKE '%$username%'";
        }
    }
    public function registerUser(){
        $obj_insert = $this->connection
            ->prepare("INSERT INTO users (username, password, name, phone, address, email, avatar)
VALUES(:username, :password,:name, :phone, :address, :email, :avatar)");
        $arr_insert = [
            ':username' => $this->username,
            ':password' => $this->password,
            ':name' => $this->name,
            ':phone' => $this->phone,
            ':address' => $this->address,
            ':email' => $this->email,
            ':avatar' => $this->avatar

        ];
        return $obj_insert->execute($arr_insert);
    }
    public function getUser($username){
        $sql_select_one ="select * from users where username=:username";
        $obj_select_one = $this->connection->prepare($sql_select_one);
        $selects=[
            ':username'=>$username
        ];
        $obj_select_one->execute($selects);
        $user=$obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public function getAdmin($username){
        $sql_select_one ="select * from admin where username=:username";
        $obj_select_one = $this->connection->prepare($sql_select_one);
        $selects=[
            ':username'=>$username
        ];
        $obj_select_one->execute($selects);
        $user=$obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public function getById($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM users WHERE id = $id");
        $obj_select->execute();
        return $obj_select->fetch(PDO::FETCH_ASSOC);
    }
}