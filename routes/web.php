<?php

$router->get('/', function () use ($router) {
    return "Up and running!";
});

$router->post('items/', ['uses' => 'ItemsController@showByCategory']);
$router->post('items/new', ['uses' => 'ItemsController@create']);
$router->delete('items/{id}', ['uses' => 'ItemsController@delete']);