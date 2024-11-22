<?php
require_once 'controllers/UsuarioController.php';


if (isset($_GET['url'])){
    if($_GET['url'] == 'cadastrar-usuario'){
        $usu = new UsuarioController();
        $usu->cadastrarUsuario($pdo);
    }
    if($_GET['url'] == 'editar-usuario'){
        $usu = new UsuarioController();
        $usu->editarUsuarios();
    }
    if($_GET['url'] == 'excluir-usuario'){
        $usu = new UsuarioController();
        $usu->excluirUsuarios();
    }
    if($_GET['url'] == 'y'){
        echo "página Y";
    }
    if($_GET['url'] == 'login'){
        $usu = new UsuarioController();
        $usu->login($pdo);
    }

}else{
    header('Location: login');
}

?>