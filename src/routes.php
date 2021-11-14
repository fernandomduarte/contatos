<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'LoginController@login');
$router->post('/login', 'LoginController@loginAction');

$router->get('/cadastro', 'LoginController@cadastro');
$router->post('/cadastro', 'LoginController@cadastroAction');

$router->get('/sair', 'LoginController@sair');

$router->get('/novo', 'ContatosController@add');
$router->post('/novo', 'ContatosController@addAction');

$router->get('/contato/{id}/editar', 'ContatosController@edit');
$router->post('/contato/{id}/editar', 'ContatosController@editAction');

$router->get('/contato/{id}/excluir', 'ContatosController@delete');
