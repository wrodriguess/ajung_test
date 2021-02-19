<?php
    require_once 'Companies.php';
    $company = new Companies();
    
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = addslashes($_GET['id']);
        
        if(!$company->idExists($id)){
            header("Location: index.php");
            exit;
        }
        
        $record = $company->getCompanyById($id);
    }else{
        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<meta name="viewport" content="width=devide-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="	sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/style.css">                
	<title>Read</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="#" class="navbar-brand"> < /> </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarMenu">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="create_form.php" class="nav-item nav-link">Create</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <p class="h1" align='center'>Dados da empresa</p>
            
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Id:</strong>
                        <?= $record['id']; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Contato:</strong>
                        <?= $record['contato']; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>E-mail:</strong>
                        <?= $record['email']; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Telefone:</strong>
                        <?= $record['telefone']; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Empresa (Razão social):</strong>
                        <?= $record['empresa']; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>cnpj:</strong>
                        <?= $record['cnpj']; ?>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Endereço:</strong>
                        <?= $record['logradouro'].", ".$record['numero']." (".$record['bairro'].") "; ?>
                    </div>
                </div>            
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Cidade:</strong>
                        <?= $record['cidade']." - ".$record['estado']; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Cep:</strong>
                        <?= $record['cep']; ?>
                    </div>
                </div>                   
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Data de Registro:</strong>
                        <?= date('d/m/Y H:i', strtotime($record['data_registro'])); ?>
                    </div>
                </div> 
            </div>
            
            <div class="row">
                <div class="col-3 col-sm-1 col-md-1">
                    <a href="update_form.php?id=<?= $record['id']; ?>" class="btn btn-primary">
                        Editar
                    </a>
                </div>
                <div class="col-3 col-sm-1 col-md-1">
                    <a href="delete.php?id=<?= $record['id']; ?>" class="btn btn-danger">
                        Excluir
                    </a>
                </div>
                <div class="col-3 col-sm-1 col-md-1">
                    <a href="index.php" class="btn btn-dark">
                        Voltar
                    </a>
                </div>
            </div>                
        </div>
    </body>
</html>


