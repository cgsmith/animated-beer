<?php
// A start towards refactoring
require 'classes/router.php';
require 'classes/request.php';

// First step is to configure current routes
$routes = [
  '/' => 'home.php',
  '/index.php' => 'home.php',
  '/buyit.php' => 'buyit.php'
];

$request = new request($_REQUEST,$_SERVER);
$router = new router($routes, $request);

/**
 * If your router does not match the old route - run through your application
 * otherwise load up the requires again ;)
 */
if (!$router->match()) {
  $app = new application();
  $app->run();
}else {
  require $router->getOldRoute();
}
