<?php
require_once 'models/UsuarioModel.php';
class UsuarioController {

    public $obj;

    public function __construct(){
        $this->obj = new Usuario();
    }
    public function cadastrarUsuario($pdo){

        if (isset($_POST['submit'])) { 
            
            $usuario = new Usuario(
            $nome = $_POST['nome'],
            $numero = $_POST['numero'],
            $email = $_POST['email'],
            $senha = $_POST['senha']);
            $usuario-> cadastrarUsuario($pdo);
            
        include_once 'views/cadastro.php';
        }
       

    }
    public function listaUsuarios($pdo){
        $dados = $this->obj->listarUsuarios($pdo);
        include_once 'views/usuarios.php';
    }

    public function editarUsuarios(){
        $dados = $this->obj->editUsuarios();        
        include_once 'views/usuarios_editar.php';
    }

    public function login($pdo) {

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $usuarioModel = new Usuario($email, $senha);
            $usuario = $usuarioModel->login($pdo);


            if ($usuario) {
                session_start();
                $_SESSION['user_id'] = $usuario['id'];
                $_SESSION['email'] = $usuario['email'];
                header("Location:"); 
            } else {
                header("Location:PROJETO-FOOD/index.html");
            }
        }
        include_once 'views/login.php';
    }
}   