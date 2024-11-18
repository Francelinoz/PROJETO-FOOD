<?php
include_once '../php/db.php';

class Usuario
{
    private $id;
    private $nome;
    private $numero;
    private $email;
    private $senha;

    public function __construct($nome = null, $numero = null, $email = null, $senha = null, $id = null)
    {
        $this->nome = $nome;
        $this->numero = $numero;
        $this->email = $email;
        $this->senha = $senha;
        $this->id = $id;
    }

    public function cadastrarUsuario($pdo)
    {
        try {
            $sql = "INSERT INTO usuarios (nome, numero, email, senha) VALUES (:nome, :numero, :email, :senha)";
            $prepare = $pdo->prepare($sql);

            $result = $prepare->execute([
                ':nome' => $this->nome,
                ':numero' => $this->numero,
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
    public function listarUsuarios($pdo)
    {
        try {
            $sql = "SELECT * FROM usuarios";
            $prepare = $pdo->query($sql);
            return $prepare->fetchAll(\PDO::FETCH_ASSOC);
        } catch (PDOException $e) {

            echo "Erro ao buscar usuários: " . $e->getMessage();
            return [];
        }
    }

    public function excluirUsuarios($pdo)
    {
        $prepare = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        $prepare->execute([$this->id]);
    }

    public function editUsuarios()
    {

        return "Dados do usuarios";
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
}
