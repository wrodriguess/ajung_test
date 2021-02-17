<?php

class Companies {
    private $pdo;
    private $contato;
    private $email;
    private $telefone;
    private $empresa;
    private $cnpj;
    private $cep;
    private $logradouro;
    private $bairro;
    private $numero;
    private $cidade;
    private $estado;
    
    function __construct() {
        try{
          $this->pdo = new PDO("mysql:dbname=ajung_test;host=localhost", "root", "");
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    
    function create($contato, $email, $telefone, $empresa, $cnpj, $cep, $logradouro, $bairro, $numero, $cidade, $estado){
        $sql = "INSERT INTO companies SET contato = :contato, email = :email, telefone = :telefone, empresa = :empresa, cnpj = :cnpj, cep = :cep, logradouro = :logradouro, bairro = :bairro, numero = :numero, cidade = :cidade, estado = :estado, data_registro = NOW()";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":contato", $contato);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":telefone", $telefone);
        $sql->bindValue(":empresa", $empresa);
        $sql->bindValue(":cnpj", $cnpj);
        $sql->bindValue(":cep", $cep);
        $sql->bindValue(":logradouro", $logradouro);
        $sql->bindValue(":bairro", $bairro);
        $sql->bindValue(":numero", $numero);
        $sql->bindValue(":cidade", $cidade);
        $sql->bindValue(":estado", $estado);
        $sql->execute();
    }
    
    function getAll(){
        $sql = "SELECT * FROM companies";
        $sql = $this->pdo->query($sql);
        $sql = $sql->fetchAll();
        return $sql;
    }
    
    function delete($id){
        $sql = "DELETE FROM companies WHERE id = :id LIMIT 1";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        if($sql->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    
    function getCompany($id){
        $sql = "SELECT * FROM companies WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        $sql = $sql->fetch();
        return $sql;
    }
    
    function update($id, $contato, $email, $telefone, $empresa, $cnpj, $cep, $logradouro, $bairro, $numero, $cidade, $estado){
        $sql = "UPDATE companies SET contato = :contato, email = :email, telefone = :telefone, empresa = :empresa, cnpj = :cnpj, cep = :cep, logradouro = :logradouro, bairro = :bairro, numero = :numero, cidade = :cidade, estado = :estado WHERE id = :id LIMIT 1";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->bindValue(":contato", $contato);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":telefone", $telefone);
        $sql->bindValue(":empresa", $empresa);
        $sql->bindValue(":cnpj", $cnpj);
        $sql->bindValue(":cep", $cep);
        $sql->bindValue(":logradouro", $logradouro);
        $sql->bindValue(":bairro", $bairro);
        $sql->bindValue(":numero", $numero);
        $sql->bindValue(":cidade", $cidade);
        $sql->bindValue(":estado", $estado);
        $sql->execute();
    }
    
    function search($buscar){
        $sql = "SELECT * FROM companies WHERE contato LIKE '%$buscar%' OR empresa LIKE '%$buscar%'";
        $sql = $this->pdo->query($sql);
        $sql = $sql->fetchAll();
        return $sql;
    }
    
    function getCompanyById($id){
        $sql = "SELECT * FROM companies WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", addslashes($id));
        $sql->execute();
        $sql = $sql->fetch();
        return $sql;
    }
}
