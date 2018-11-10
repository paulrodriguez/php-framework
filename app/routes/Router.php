<?php
namespace Routes;

class Router {
  private static $_routes = array();
  private static $_request;




  public static function run() {
    self::$_request = new \Model\Request();
    $request = self::$_request;


    $request_uri = $request->getRequestUri();

    foreach(self::$_routes as $route=>$method) {
      if($route==$request_uri) {
        call_user_func_array($method, array($request));
        break;
      }
    }
  }

  public static function get($path,$callback) {
    $path = rtrim(trim($path),'/');
    if($path == '') {
      $path = '/';
    }

    self::$_routes[$path] = $callback;
  }

  public static function post($path,$callback) {

  }

  public static function delete($path,$callback) {

  }

  public static function put($path,$callback) {

  }


}
