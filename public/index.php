<?php
 
require '../vendor/autoload.php';
  

$kernel = new Cadret\Kernel(new Cadret\Router);
$router = $kernel->getRouter();
$router->run(include dirname(__DIR__).'/app/routes.php');
 