<?php
require_once 'models/UsuarioModel.php';
class UsuarioController
{

    public $obj;

    public function __construct()
    {
        $this->obj = new Usuario();
    }
    public function cadastrarUsuario($pdo)
    {

        if (isset($_POST['cadastrar'])) {
            $usuario = new Usuario($_POST['nome'], $_POST['telefone'], 0, $_POST['email'], $_POST['senha']);
            echo $usuario->cadastrarUsuario($pdo);
            header('Location: /GitHub/PROJETO-FOOD/');
            exit;
        }

        include_once 'views/cadastro.php';
    }

    public function login($pdo)
    {

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $usuarioModel = new Usuario(null, null, null, $email, $senha,null);
            $usuario = $usuarioModel->login($pdo);
            if ($usuario) {
                session_start();
                $_SESSION['user_id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['numero'] = $usuario['numero'];
                $_SESSION['saldo'] = $usuario['saldo'];
                $_SESSION['email'] = $usuario['email'];
                header("Location: /GitHub/PROJETO-FOOD/");
            } else {
                header("Location: /GitHub/PROJETO-FOOD/admin/login");
                exit;
            }
        }
        include_once 'views/login.php';
    }

    public function perfil($pdo)
    {
        session_start();
        $usu = new Usuario('', '', '', '', '', $_SESSION['user_id']);
        $dados = $usu->getId($pdo);
        extract($dados);

        if (isset($_POST['logout'])) {
            session_start();
            session_destroy();
            header('Location: /GitHub/PROJETO-FOOD/');
        }

        if (isset($_POST['salvar'])) {
            session_start();
            $usuario = new Usuario(
                $_POST['nome'],
                $_POST['telefone'],
                $_POST['saldo'],
                $_POST['email'],
                $_POST['senha'],
                $_POST['id']
            );
            $_SESSION['nome'] = $_POST['nome'];
            echo $usuario->editarUsuario($pdo);

            header('Location: /GitHub/PROJETO-FOOD/');
            exit;
        }

        if (isset($_POST['excluir'])) {
            $usu = new Usuario('', '', '', '', '', $_POST['id']);
            $usu->excluirUsuarios($pdo);
            session_start();
            session_destroy();
            header('Location: /GitHub/PROJETO-FOOD/');
            exit;
        }
        include_once 'views/perfil.php';
    }
}
