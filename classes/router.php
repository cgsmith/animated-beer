<?php

class router {
  protected $routes = [];
  protected $request;

  public function __construct(array $routes = array(), request $request) {
    $this->routes = $routes;
    $this->request = $request;
  }

  public function match() {
    return array_key_exists($this->request->getURI(),$this->routes);
  }

  public function getOldRoute() {
    return $this->routes[$this->request->getURI()];
  }

}
