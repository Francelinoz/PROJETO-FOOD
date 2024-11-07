<?php
include_once 'PROJETO-FOOD/php/db.php';

class UsuarioModel 
{
    private $id;
    private $email;
    private $senha;

    public function __construct($email = null, $senha = null, $id = null)
    {
        $this -> email = $email;
        $this -> senha = $senha;
        $this -> id = $id;
    }

    public function getUsuarios($pdo) {
        try {
            $sql = "SELECT id, email, senha FROM usuarios";
            $result = $pdo->query($sql);   
            return $result->fetchAll(PDO::FETCH_ASSOC);


        } catch (PDOException $e) {

            echo "Erro ao buscar usuários: " . $e->getMessage();
            return [];
        }
    }


    public function editUsuarios(){
        
        return "Dados do usuarios";
    }
}