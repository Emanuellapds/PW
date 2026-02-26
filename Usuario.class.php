<?php 
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha; 

    // Getters e Setters 
    private function getId() {
        return $this->id;
    }
    private function getnome() {
        return $this->nome;
    }
    private function getemail() {
        return $this->email;
    }
    private function getId() {
        return $this->senha;
    }

    public function setemail($email) {
        $this->email = $email;
    }
    public function setemail($senha) {
        $this->senha = $senha;
    }
    public function setemail($id) {
        $this->id = $id;
    }
    public function setemail($nome) {
        $this->nome = $nome;
    }

    public function checkUser(email){
        $sql = "SELECT * FROM usuarios WHERE email = :e";
        $stmt = $this -> pdo ->prepare ($sql);
        $stmt = ->blindValue(":e", $email);
        $stmt = ->blindValue(":e", $senha);
        $stmt = ->execute();

        return $stmt ->rowCount() > 0;
    }
     public function connection(){
        try{
            $dns = "mysql:dbname=login;host=localhost";
            $user = "root";
            $pass = "";

            $this ->pdo = new PDO($dns, $user, $pass);
            return true;
        } catch(PDOExeption $)
            return false;
        }
     }



}