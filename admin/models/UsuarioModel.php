<?php
include_once '../../php/db.php';

class UsuarioModel {

    public function getUsuarios() {
        try {
            $sql = "SELECT id, email, senha FROM burguerbliss";
            $result = $this->pdo->query($sql);
            
   
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