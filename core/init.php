<?php 

session_start();
ob_start();

define('__LOADFILE__', dirname(dirname(__FILE__)));

require_once __LOADFILE__ . '/vendor/autoload.php';
require_once __LOADFILE__ . '/configs/config.php';

$router = new \Bramus\Router\Router();

spl_autoload_register(function ($class) {
  $split = explode("\\", $class);
  $slice = array_slice($split, 0, count($split) - 1);
  $dir = strtolower(implode("\\", $slice));

  require_once __LOADFILE__ . "/" . $dir . '\\' . $split[count($split) - 1] . '.php';
});

require_once __LOADFILE__ . '/router/router.php';
require_once 'function.php';
require_once 'control.php';