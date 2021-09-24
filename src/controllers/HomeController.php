<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Contato;

class HomeController extends Controller {

    public function index() {
        $contatos = Contato::select()->execute();

        $this->render('home', [
           'contatos' => $contatos
        ]);
    }
    
}