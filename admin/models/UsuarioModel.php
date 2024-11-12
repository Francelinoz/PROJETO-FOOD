<?php
include_once '../php/db.php';

class Usuario
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

    public function cadastrarUsuario($pdo) {
        $sql = "SELECT * FROM usuarios WHERE email = :email LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();

        if ($stmt->fetch()) {
            return "E-mail já cadastrado. Tente outro.";
        } else {
            $sql = "INSERT INTO usuarios (email, senha) VALUES (:email, :senha)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':senha', $this->senha);
            if ($stmt->execute()) {
                return "Usuário cadastrado com sucesso!";
            } else {
                return "Erro ao cadastrar usuário.";
            }
        }
    }

    public function listarUsuarios($pdo)
    {
    try {
        $sql = "SELECT * FROM usuarios";
        $prepare = $pdo->query($sql);
        return $prepare->fetchAll(\PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        echo "Erro ao buscar usuários: " . $e->getMessage();
        return [];
    }}
    
    public function excluirLocatario($pdo){
        $prepare = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        $prepare->execute([$this -> id]);
    }

    public function editUsuarios(){
        
        return "Dados do usuarios";
    }

    public function login($pdo) {
        $sql = "SELECT * FROM usuarios WHERE email = :email LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($this->senha, $usuario['senha'])) {
            return $usuario; 
        }
        return false;
    }
}