<?php

require __DIR__ . "/vendor/autoload.php";

$router = new \Bramus\Router\Router();

$router->get('/', function() {
    require "server/main.php";
});

$router->run();
