<?php
    require_once 'Companies.php';
    $c = new Companies();
    
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
    
    $c->create($contato, $email, $telefone, $empresa, $cnpj, $cep, $logradouro, $bairro, $numero, $cidade, $estado);
    header("Location: index.php");

    
    
