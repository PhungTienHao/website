<?php
require_once 'models/Model.php';
require_once 'configs/Database.php';
require_once 'views/users/login.php';
require_once 'views/users/register.php';


class User extends Model {

    public $id;
    public $username;
    public $password;
    public $name;
    public $phone;
    public $address;
    public $str_search;
    public $page;

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
            ->prepare("INSERT INTO user (name, user, pas, sdt, address)
VALUES(:name,:username, :password, :phone, :address)");
        $arr_insert = [
            ':username' => $this->username,
            ':password' => $this->password,
            ':name' => $this->name,
            ':phone' => $this->phone,
            ':address' => $this->address

        ];
        return $obj_insert->execute($arr_insert);
    }
    public function update($id)
    {
        $obj_update = $this->connection
            ->prepare("UPDATE user SET name=:name,  phone=:phone, 
            address=:address
             WHERE id = $id");
        $arr_update = [

            ':name' => $this->name,
            ':phone' => $this->phone,
            ':address' => $this->address
        ];
        $obj_update->execute($arr_update);

        return $obj_update->execute($arr_update);
    }

    public function getUser($username){
        $sql_select_one ="select * from user where user=:username";
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
            ->prepare("SELECT * FROM user WHERE id = $id");
        $obj_select->execute();
        return $obj_select->fetch(PDO::FETCH_ASSOC);
    }
    public function getTotal(){
        $obj_select = $this->connection
            ->prepare("SELECT COUNT(id) FROM user WHERE TRUE $this->str_search");
        $obj_select->execute();
        return $obj_select->fetchColumn();

    }
    public function getAllPagination($params = [])
    {
        $limit = $params['limit'];
        $page = $params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection
            ->prepare("SELECT * FROM user WHERE TRUE $this->str_search
              ORDER BY id DESC
              LIMIT $start, $limit");
        $obj_select->execute();
        $users = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
}
?>