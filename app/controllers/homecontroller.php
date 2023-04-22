<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\models\products;
use MVC\models\users;
use MVC\models\categories;
use GUMP;

class homecontroller extends controller{
    // كل فنكشن ليها موديل وفيو 
    public function index(){
        $products=new products();
        $data=$products->getalldata();
        $title='home index';
        $this->view("home/index",['title'=>$title,'data'=>$data]);
    }
    public function users(){
        $users=new users();
        $data=$users->getalldata();
        $title="Users";
        $this->view("home/users",['title'=>$title,'data'=>$data]);
    }
    public function categories(){
        $categories=new categories();
        $data=$categories->getalldata();
        $title="Categories";
        $this->view("home/categories",['title'=>$title,'data'=>$data]);
    }
    public function login(){
        $title='Home';
        $this->view("home/login",['title'=>$title]);
    }
    public function LoginRequest(){
        $v=GUMP::is_valid($_POST,[
            'email'=>'required',
            'password'=> 'required|between_len,4;100'
        ]);
        echo"<pre>";
        print_r($v);
    }
}