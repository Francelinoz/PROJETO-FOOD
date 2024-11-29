<?php
include_once '../php/db.php';

class Usuario
{
    private $id;
    private $nome;
    private $telefone;
    private $saldo;
    private $email;
    private $senha;

    public function __construct($nome = null, $telefone = null, $saldo = null, $email = null,
     $senha = null, $id = null)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->saldo = $saldo;
        $this->email = $email;
        $this->senha = $senha;
        $this->id = $id;
    }

    public function cadastrarUsuario($pdo)
    {
        try {
            $sql = "INSERT INTO usuarios (nome, telefone,saldo, email, senha) VALUES (:nome, :telefone, :saldo, :email, :senha)";
            $prepare = $pdo->prepare($sql);

            $result = $prepare->execute([
                ':nome' => $this->nome,
                ':telefone' => $this->telefone,
                ':saldo'=> $this->saldo,
                ':email' => $this->email,
                ':senha' => $this->senha
            ]);
            
            if ($result) {
                return "Usuário cadastrado com sucesso!";
            } else {
                return "Erro ao cadastrar usuário.";
            }
        } catch (PDOException $e) {
            return "Erro: " . $e->getMessage();
        }
    }

    public function editarUsuario($pdo)
{
    try {
        $sql = "UPDATE usuarios SET nome = :nome, telefone = :telefone, saldo = :saldo, email = :email, senha = :senha WHERE id = :id";
        $prepare = $pdo->prepare($sql);

        $result = $prepare->execute([  
            ':id' => $this->id,
            ':nome' => $this->nome,
            ':telefone' => $this->telefone,
            ':saldo' => $this->saldo,
            ':email' => $this->email,
            ':senha' => $this->senha
        ]);
        
        if ($result) {
            return "Usuário editado com sucesso!";
        } else {
            return "Erro ao editar usuário.";
        }
    } catch (PDOException $e) {
        return "Erro: " . $e->getMessage();
    }
}

    public function excluirUsuarios($pdo)
    {
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function login($pdo)
    {
        $sql = "SELECT * FROM usuarios WHERE email = :email and senha =:senha LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getId($pdo)
    {
        $sql = "SELECT * FROM usuarios WHERE id = :id LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
