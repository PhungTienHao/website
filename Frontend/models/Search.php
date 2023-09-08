<?php
require_once 'models/Model.php';
class Search extends Model
public function search(){
    $search = addslashes($_GET['search']);
    $sql_select = "select * from products where title like'%$search%'";
    $obj_select = $this->connection->prepare($sql_select);
    $obj_select->execute();

    $search = $obj_select->fetchAll(PDO::FETCH_ASSOC);
    return $search;
}
?>

