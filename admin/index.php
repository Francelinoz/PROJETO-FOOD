<?php
require_once 'controllers/UsuarioController.php';


if (isset($_GET['url'])){
    if($_GET['url'] == 'cadastro-usuario'){
        $usu = new UsuarioController();
        $usu->listaUsuarios();
    }
    if($_GET['url'] == 'editar-usuario'){
        $usu = new UsuarioController();
        $usu->editarUsuarios();
    }
    if($_GET['url'] == 'y'){
        echo "página Y";
    }

}else{
    header('Location: login');
}

?>