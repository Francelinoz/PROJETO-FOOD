<?php
include_once '../php/db.php';

class Lanche
{
    private $id;
    private $lanche;
    private $valor;

    public function __construct($lanche = null, $valor = null, $id = null)
    {
        $this->lanche = $lanche;
        $this->valor = $valor;
        $this->id = $id;
    }
}