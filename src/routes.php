<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/novo', 'ContatosController@add');
$router->post('/novo', 'ContatosController@addAction');

$router->get('/contato/{id}/editar', 'ContatosController@edit');
$router->post('/contato/{id}/editar', 'ContatosController@editAction');

$router->get('/contato/{id}/excluir', 'ContatosController@delete');
