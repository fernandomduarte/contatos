<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Contato;
use \src\handlers\LoginHandler;

class ContatosController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->loggedUser = LoginHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function add() {
        $this->render('add');
    }

    public function addAction() {
        $name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $phone = filter_input(INPUT_POST, 'telefone');

        if ($name && $email) {
            $data = Contato::select()->where('email', $email)->execute();

            if (count($data) == 0) {
                Contato::insert([
                    'nome' => ucwords($name),
                    'email' => strtolower($email),
                    'telefone' => $phone
                ])->execute();

                $this->redirect('/');
            }

        }
        $this->redirect('/novo');
    }

    public function edit($args) {
        $contato = Contato::select()->find($args['id']);

        $this->render('edit', [
            'contato' => $contato
        ]);
    }

    public function editAction($args) {
        $name = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'telefone');

        if ($name && $email) {
            Contato::update()
                ->set('nome', ucwords($name))
                ->set('email', strtolower($email))
                ->set('telefone', $phone)
                ->where('id', $args['id'])
            ->execute();

            $this->redirect('/');
        }
        $this->redirect('/contato'.$args['id'].'/editar');
    }

    public function delete($args) {
        Contato::delete()
            ->where('id', $args['id'])
        ->execute();

        $this->redirect('/');
    }
   
}