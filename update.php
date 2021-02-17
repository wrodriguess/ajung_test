<?php
    require_once 'Companies.php';
    $c = new Companies();
    
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = addslashes($_POST['id']);
        $contato = addslashes($_POST['contato']);
        $email = addslashes($_POST['email']);
        $telefone = addslashes($_POST['telefone']);
        $empresa = addslashes($_POST['empresa']);
        $cnpj = addslashes($_POST['cnpj']);
        $cep = addslashes($_POST['cep']);
        $logradouro = addslashes($_POST['logradouro']);
        $bairro = addslashes($_POST['bairro']);
        $numero = addslashes($_POST['numero']);
        $cidade = addslashes($_POST['cidade']);
        $estado = addslashes($_POST['estado']);
                   
        $c->update($id, $contato, $email, $telefone, $empresa, $cnpj, $cep, $logradouro, $bairro, $numero, $cidade, $estado);
    }
    header("Location: index.php");