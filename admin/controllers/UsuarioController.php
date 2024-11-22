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

    public function editarUsuario($pdo)
{
    if (isset($_GET['id'])) {
        session_start();
        $usuario = new Usuario($_GET['nome'], $_GET['numero'], 0, $_GET['saldo'], $_GET['email'], $_GET['senha'], $_GET['id']);
        echo $usuario->editarUsuario($pdo);
        header('Location: /GitHub/PROJETO-FOOD/');
        exit;
    } else {
        echo "ID do usuário não encontrado.";
    }
    //include_once 'views/login.php'; 
}
    
public function excluirUsuarios($pdo)
{
    if (isset($_GET['id'])) {
        $usu = new Usuario('', '', '', '', '', $_GET['id']); 
        $usu->excluirUsuarios($pdo); 
        header("Location: /GitHub/PROJETO-FOOD/");
        exit;
    } else {
        echo "ID do usuário não encontrado.";
    }
}

    public function login($pdo)
    {

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $usuarioModel = new Usuario(null, null,null, $email, $senha);
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
    public function logout($pdo)
    {
        if (isset($_POST['submit'])){
            session_start();
            session_destroy();
            header('Location: /GitHub/PROJETO-FOOD/');
        }
        include_once 'views/logout.php';
    }    
}
