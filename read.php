<?php
    require_once 'Companies.php';
    $c = new Companies();
    
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $company = $c->getCompanyById($_GET['id']);
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
            <p class="h1" align='center'>READ COMPANY</p>
            
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Id:</strong>
                        <?= $company['id']; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Contato:</strong>
                        <?= $company['contato']; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>E-mail:</strong>
                        <?= $company['email']; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Telefone:</strong>
                        <?= $company['telefone']; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Empresa (Razão social):</strong>
                        <?= $company['empresa']; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>cnpj:</strong>
                        <?= $company['cnpj']; ?>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Endereço:</strong>
                        <?= $company['logradouro'].", ".$company['numero']." (".$company['bairro'].") "; ?>
                    </div>
                </div>            
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Cidade:</strong>
                        <?= $company['cidade']." - ".$company['estado']; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Cep:</strong>
                        <?= $company['cep']; ?>
                    </div>
                </div>                   
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Data de Registro:</strong>
                        <?= date('d/m/Y H:i', strtotime($company['data_registro'])); ?>
                    </div>
                </div> 
            </div>
            
            <div class="row">
                <div class="col-3 col-sm-1 col-md-1">
                    <a href="update_form.php?id=<?= $company['id']; ?>" class="btn btn-primary">
                        Editar
                    </a>
                </div>
                <div class="col-3 col-sm-1 col-md-1">
                    <a href="index.php" class="btn btn-danger">
                        Voltar
                    </a>
                </div>      
            </div>             
            
            
            
            
            
            
        </div>
    </body>
</html>


