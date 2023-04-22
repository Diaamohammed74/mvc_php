<?php
namespace MVC\models;
use MVC\core\model;
class categories extends model{
    public function getalldata(){
        $data=model::db()->run("SELECT * FROM `categories`")->fetchAll();
        return $data;
    }
}
?>