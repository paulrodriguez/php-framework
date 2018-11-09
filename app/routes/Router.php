<?php
namespace Routes;

class Router {
  private $_routes;
  public function __construct() {
      $this->_routes = array();
      $this->get('/',function() {
        echo 'homepage';
      });
  }

  public function run() {
    $request_uri = $_SERVER['REQUEST_URI'];

    foreach($this->_routes as $route=>$method) {
      if($route==$request_uri) {
        call_user_func($method);
        break;
      }
    }
  }

  public function get($path,$callback) {
    $path = trim(trim($path),'/');
    if($path == '') {
      $path = '/';
    }

    $this->_routes[$path] = $callback;
  }

  public function post($path,$callback) {

  }

  public function delete($path,$callback) {

  }

  public function put($path,$callback) {

  }


}
