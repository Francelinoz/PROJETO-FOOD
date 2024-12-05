<?php
include_once '../php/db.php';

class Vendas
{
    private $id;
    private $id_lanche;
    private $id_usuario;

    public function __construct($id_lanche = null, $id_usuario = null, $id = null)
    {
        $this->id_lanche = $id_lanche;
        $this->id_usuario = $id_usuario;
        $this->id = $id;
    }
    public function cadastrarUsuario($pdo)
    {
        try {
            $sql = "INSERT INTO vendas (id_lanche, id_usuario) VALUES (:id_lanche, :id_usuario)";
            $prepare = $pdo->prepare($sql);

            $result = $prepare->execute([
                ':id_lanche' => $this->id_lanche,
                ':id_usuario' => $this->id_usuario
            ]);
            
            if ($result) {
                return "Pedido realizado com sucesso!";
            } else {
                return "Erro ao realizar pedido.";
            }
        } catch (PDOException $e) {
            return "Erro: " . $e->getMessage();
        }
    }
    
}