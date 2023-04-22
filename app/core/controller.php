<?php
namespace MVC\core;
//MVC\core\controller
use Dcblogdev\PdoWrapper\Database;
class controller{
    public function view($path,$param){
        extract($param);
         // بتفك كل كي وفاليو بتخلي الكي فاريبال والفاليو فاليو للفاريبال
        require_once (VIEW.$path.".php");
    }

}
?>