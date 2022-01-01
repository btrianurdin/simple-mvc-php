<?php

date_default_timezone_set($date['time_zone']);

/**
 * ------------------------------
 * Config Manipulatin
 * ------------------------------
 */

define('WEB_TITLE', $site['title']);

/**
 * ------------------------------
 * Directory Manipulation
 * ------------------------------
 */

$parseUrl = parse_url((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . $_SERVER['REQUEST_URI']);
$weburi = $_SERVER['REQUEST_URI'];
if ($_SERVER['SERVER_NAME'] == 'localhost') {
  $ex = explode("/", $parseUrl['path'], 3);
  $weburi = '/' . $ex[2];
}

$filterBaseUrl = (substr($site['url'], -1) === "/") ? substr($site['url'], 0, strlen($site['url']) - 1) : $site['url'];

define("__BASEURL__", $filterBaseUrl);
define("__WEB_URI__", $weburi);
define("__FOLDER_ROOT__", $_SERVER['CONTEXT_DOCUMENT_ROOT']);
define("__ACTUAL_URL__", $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
define("__ASSETS__", __BASEURL__.'/assets');

/**
 * ------------------------------
 * Helper global function
 * ------------------------------
 */

function route(string $url){
  return __BASEURL__ . '/'.$url;
}

function baseurl(string $url = null){
  if ($url === null) return $url;
  return __BASEURL__ . '/'.$url;
}

function assets(string $assetUrl) {
  return __BASEURL__."/assets/$assetUrl";
}

function setSession($sessName, Array $data)
{
  $_SESSION[$sessName] = $data;
}

function sessionExists($sessName)
{
  return isset($_SESSION[$sessName]) ? true : false;
}

function getSession($sessName, $value)
{
  if (!empty($_SESSION[$sessName][$value])) {
    return $_SESSION[$sessName][$value];
  }
  return null;
}

function flash($name = "", $message = "", $class = "success")
{
  if (!empty($name)) {
    if (!empty($name) && !empty($message)) {
      if (!empty($_SESSION[$name])) {
        unset($_SESSION[$name]);
      }
      if (!empty($_SESSION[$name . "_class"])) {
        unset($_SESSION[$name . "_class"]);
      }
      $_SESSION[$name] = $message;
      $_SESSION[$name . "_class"] = $class;
    } else if (empty($message) && !empty($name) && !empty($_SESSION[$name])) {
      // echo '<div class="alert alert-'. $_SESSION[$name . "_class"] .' alert-dismissible show fade">
      //           '. $_SESSION[$name] .'
      //           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      //         </div>';
      echo "<script>Swal.fire({
        title: '" . $_SESSION[$name] . "',
        icon: '" . $_SESSION[$name . "_class"] . "'
      })</script>";
      unset($_SESSION[$name]);
      unset($_SESSION[$name . "_class"]);
    }
  }
}

function view(string $template, array $data = null)
{
  $view = new \Core\Helpers\View();
  return $view->render($template, $data);
}