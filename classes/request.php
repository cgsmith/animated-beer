<?php

class request {
  protected $request = [];
  protected $server = [];
  public function __construct(array $request = array(), array $server = array()) {
    $this->request = $request;
    $this->server = $server;
  }

  public function getURI() {
    return $this->server['REQUEST_URI'];
  }
}
