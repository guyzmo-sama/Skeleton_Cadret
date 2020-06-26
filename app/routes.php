<?php
use FastRoute\RouteCollector;
 
return function(RouteCollector $router) {
  
    // route vers Home page
    $router->get('/', 'App\Controller\HomeController::print');

};