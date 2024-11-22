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

        if (isset($_POST['submit'])) {
            $usuario = new Usuario($_POST['nome'], $_POST['numero'], $_POST['email'], $_POST['senha']);
            echo $usuario->cadastrarUsuario($pdo);
            header('Location: /GitHub/PROJETO-FOOD/');
        }

        include_once 'views/cadastro.php';
    }
    public function listaUsuarios($pdo)
    {
        $sql = "SELECT * FROM usuarios";
        $prepare = $pdo->query($sql);
        return $prepare->fetchAll(\PDO::FETCH_ASSOC);

        include_once 'views/usuarios.php';
    }

    public function excluirUsuarios()
    {
        $usu = new UsuarioController('','','','','',$_GET['id']);
        $usu -> excluirUsuarios();
        include_once "Location: /GitHub/PROJETO-FOOD/";
    }

    public function login($pdo)
    {

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $usuarioModel = new Usuario(null, null, $email, $senha);
            $usuario = $usuarioModel->login($pdo);


            if ($usuario) {
                session_start();
                $_SESSION['user_id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['numero'] = $usuario['numero'];
                $_SESSION['email'] = $usuario['email'];
                header("Location: /GitHub/PROJETO-FOOD/");
            } else {
                header("Location: /GitHub/PROJETO-FOOD/admin/login");
            }
        }
        include_once 'views/login.php';
    }
    
}
