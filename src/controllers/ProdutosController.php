<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Produto;
use \src\handlers\LoginHandler;

class ProdutosController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->loggedUser = LoginHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function add() {
        $this->render('produto_add');
    }
}