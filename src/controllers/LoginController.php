<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class LoginController extends Controller {

    public function login() {
        $flash = '';

        if (!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('login', [
            'flash' => $flash
        ]);
    }

    public function loginAction() {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha');

        if ($email && $senha) {
            $token = LoginHandler::verificarLogin($email, $senha);

            if ($token) {
                $_SESSION['token'] = $token;
                $this->redirect('/');
            } else {
                $_SESSION['flash'] = 'E-mail e/ou senha incorretos.';
                $this->redirect('/login');
            }
        } else {
            $this->redirect('/login');
        }
        
    }

    public function cadastro() {
        $flash = '';

        if (!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('cadastro', [
            'flash' => $flash
        ]);
    }

    public function cadastroAction() {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = filter_input(INPUT_POST, 'senha');

        if ($nome && $email && $senha) {
            if (LoginHandler::existirEmail($email) === false) {
                $token = LoginHandler::cadastrarUsuario($nome, $email, $senha);
                $_SESSION['token'] = $token;

                $this->redirect('/');
            } else {
                $_SESSION['flash'] = 'E-mail já cadastrado';
                $this->redirect('/cadastro');
            }
        }
    }

    public function sair() {
        unset($_SESSION['token']);
        $this->redirect('/login');
    }
}