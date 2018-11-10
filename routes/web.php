<?php
use \Routes\Router as Router;

Router::get('/',function($request) {
  echo 'this is homepage';
});

Router::get('/home',function($request) {
  $controller = new \Controller\IndexController();
  $controller->home();
});
