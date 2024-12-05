<?php
require_once 'models/UsuarioModel.php';
class LancheController
{

    public $obj;

    public function __construct()
    {
        $this->obj = new Vendas();
    }
}