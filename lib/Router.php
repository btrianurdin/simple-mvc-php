<?php

namespace Lib;

use Bramus\Router\Router as BramusRouter;

class Router extends BramusRouter
{
  public function getRequestMethod()
  {
    // Take the method as found in $_SERVER
    $method = $_SERVER['REQUEST_METHOD'];

    // If it's a HEAD request override it to being GET and prevent any output, as per HTTP Specification
    // @url http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html#sec9.4
    if ($_SERVER['REQUEST_METHOD'] == 'HEAD') {
      ob_start();
      $method = 'GET';
    }

    // If it's a POST request, check for a method override header
    elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $headers = $this->getRequestHeaders();
      if (isset($headers['X-HTTP-Method-Override']) && in_array($headers['X-HTTP-Method-Override'], array('PUT', 'DELETE', 'PATCH'))) {
        $method = $headers['X-HTTP-Method-Override'];
      }

      // Request Method HTML Manipulation
      if (isset($_POST['_method']) && !empty($_POST['_method']) && in_array($_POST['_method'], array('PUT', 'DELETE', 'PATCH'))) {
          $method = $_POST['_method'];
      }
    }

    return $method;
  }
}
