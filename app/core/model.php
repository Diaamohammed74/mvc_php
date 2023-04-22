<?php
//بهندل جواه الداتابيز
namespace MVC\core;
//MVC\core\controller
use Dcblogdev\PdoWrapper\Database;
class model{
    static function db(){
        $options = [
            //required
            'username' => 'root',
            'database' => 'crud',
            //optional
            'password' => '',
            'port' => '3306'
        ];
        
        return $db = new Database($options);
    }
}
?>