<?php
require_once 'models/UsuarioModel.php';
class UsuarioController {
    public $obj;
    public function __construct(){
        $this->obj = new Usuario();
    }
    public function cadastrarUsuario($pdo){
        //$dados = $this->obj->listarUsuarios($pdo);
        if(isset($_POST['submit'])){ 
            $objUsuario = new Usuario(
            $email = $_POST['email'],
            $senha = $_POST['senha']);
            
            $objUsuario -> cadastrarUsuario($pdo);
            echo "Usuario Cadastrado";
        }
        include_once 'views/cadastro.php';
    }
    public function listaUsuarios($pdo){
        $dados = $this->obj->listarUsuarios($pdo);
        include_once 'views/usuarios.php';
    }

    public function editarUsuarios(){
        $dados = $this->obj->editUsuarios();        
        include_once 'views/usuarios_editar.php';
    }

    public function login($pdo){
        //$dados = $this->obj->listarUsuarios($pdo);
        if(isset($_POST['submit'])){ 
            $objUsuario = new Usuario(
            $email = $_POST['email'],
            $senha = $_POST['senha']);
            
            $objUsuario -> login($pdo);
            echo "Usuario Cadastrado";
        }
        include_once 'views/login.php';
    }

}   