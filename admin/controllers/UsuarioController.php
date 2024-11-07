<?php
require_once 'models/UsuarioModel.php';
class UsuarioController {
    public $obj;
    public function __construct(){
        $this->obj = new UsuarioModel();
    }

    public function listaUsuarios(){
        $dados = $this->obj->getUsuarios();
        include_once 'views/usuarios.php';
    }

    public function editarUsuarios(){
        $dados = $this->obj->editUsuarios();        
        include_once 'views/usuarios_editar.php';
    }

}