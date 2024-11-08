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
    public function cadastrarUsuario($pdo){

        $sql = "INSERT INTO usuarios(email,senha) VALUES(:email, :senha)";
        $prepare = $pdo->prepare($sql);
        $prepare->execute([
            ":email" => $this->email,
            ":senha" => $this->senha,
        ]);
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

    public function login($pdo)
    {
    try {
        $sql = "SELECT * FROM usuarios";
        $prepare = $pdo->query($sql);
        return $prepare->fetchAll(\PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        echo "Erro ao buscar usuários: " . $e->getMessage();
        return [];
    }}
}