<?php
require_once 'controllers/UsuarioController.php';


if (isset($_GET['url'])){
    if($_GET['url'] == 'cadastrar-usuario'){
        $usu = new UsuarioController();
        $usu->cadastrarUsuario($pdo);
    }
    if($_GET['url'] == 'login'){
        $usu = new UsuarioController();
        $usu->login($pdo);
    }
    if($_GET['url'] == 'perfil'){
        $usu = new UsuarioController();
        $usu->perfil($pdo);
    }
}else{
    header('Location: /GitHub/PROJETO-FOOD/');
    exit;
}

?>
