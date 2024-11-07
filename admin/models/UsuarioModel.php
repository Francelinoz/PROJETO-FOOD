<?php
include_once 'PROJETO-FOOD/php/db.php';

class UsuarioModel {

    public function getUsuarios($pdo) {
        try {
            $sql = "SELECT id, email, senha FROM usuarios";
<<<<<<< Updated upstream
            $result = $pdo->query($sql);   
            return $result->fetchAll(PDO::FETCH_ASSOC);
=======
            $result = $pdo->query($sql);
            return $result->fetchAll(\PDO::FETCH_ASSOC);
>>>>>>> Stashed changes
            
        } catch (PDOException $e) {

            echo "Erro ao buscar usuários: " . $e->getMessage();
            return [];
        }
    }


    public function editUsuarios(){
        
        return "Dados do usuarios";
    }
}