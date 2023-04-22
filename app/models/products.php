<?php
namespace MVC\models;
use MVC\core\model;
class products extends model{
    public function getalldata(){
        $data=model::db()->run("SELECT * FROM products")->fetchAll();
        return $data;
    }
}
?>