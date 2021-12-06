<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Produto;

class ProdutosController extends Controller {

    public function add() {
        $this->render('produto_add');
    }
}