<?php
namespace Model;

class Request {
  private $_request;
  public function __construct() {
    $this->bootstrap();
  }

  public function bootstrap() {
    foreach($_SERVER as $key=>$val) {
      $this->_request[$this->toCamelCase($key)] = $val;
    }

    return $this;
  }

  public function toCamelCase($value) {
    $tmp = strtolower($value);
    preg_match_all('/_[a-z0-9]/',$tmp,$matches);


    foreach($matches[0] as $match) {
      $m = str_replace('_','',strtoupper($match));
      $tmp = str_replace($match,$m,$tmp);
    }

    return ucfirst($tmp);
  }

  public function __call($name,$args) {
    if(strpos($name,'get')!==FALSE) {
      return $this->_request[str_replace('get','',$name)];
    }
  }
}
