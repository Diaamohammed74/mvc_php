<?php
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__).DS);   // يوقفني على الروت بتاعي
define("APP",ROOT.'app'.DS);
define("CONFIG",APP.'config'.DS);
define("CONTROLLES",APP.'controllers'.DS);
define("CORE",APP.'core'.DS);
define("MODELS",APP.'models'.DS);
define("VIEW",APP.'views'.DS);

// require_once ("../vendor/autoload.php");
require_once realpath(dirname(__DIR__)."/vendor/autoload.php");
$app=new MVC\core\app;






















