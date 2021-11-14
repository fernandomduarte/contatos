<?php
namespace src\handlers;

use \src\models\Usuario;

class LoginHandler {

    public static function checkLogin() {
        if (!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $data = Usuario::select()->where('token', $token)->one();
            if (count($data) > 0) {
                $loggedUser = new Usuario();
                $loggedUser->id = $data['id'];
                $loggedUser->usuario = $data['nome'];
                $loggedUser->email = $data['email'];

                return $loggedUser;
            }
        }
        return false;
    }

    public static function verificarLogin($email, $senha) {
        $u = Usuario::select()->where('email', $email)->one();

        if ($u) {
            if (password_verify($senha, $u['senha'])) {
                $token = md5(time().rand(0,9999).time());

                Usuario::update()
                    ->set('token', $token)
                    ->where('email', $email)
                ->execute();

                return $token;
            }
        }
        return false;
    }

    public static function existirEmail($email) {
        $u = Usuario::select()->where('email', $email)->one();

        if ($u) {
            return true;
        } else {
            return false;
        }  
    }

    public static function cadastrarUsuario($nome, $email, $senha) {
        $nome = ucwords($nome);
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        $token = md5(time().rand(0,9999).time());

        Usuario::insert([
            'nome' => $nome,
            'email' => $email,
            'senha' => $hash,
            'token' => $token
        ])->execute();

        return $token;
    }
}