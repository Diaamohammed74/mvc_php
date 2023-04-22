<?php
namespace MVC\models;
use MVC\core\model;
class users extends model{
    public function getalldata(){
        $data=model::db()->run("SELECT * FROM `users` order by `created_at` asc")->fetchAll();
        return $data;
    }
}
?>