<?php
    require_once 'Companies.php';
    $company = new Companies();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<meta name="viewport" content="width=devide-width, initial-scale=1, shrink-to-fit=no">
        <script src="assets/script.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="	sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
	<title>Create</title>
    </head>
    <body onload="hideMessages()">
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
            <p class="h1" align='center'>Cadastrar Empresa</p>
            <form action="create.php" method="POST">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="contato"><b>Contato</b></label>
                            <input type="text" name="contato" class="form-control" id="contato" required="" onblur="validateContato()">
                            <div class="alert alert-danger" id="msgContato">
                                
                            </div>
                        </div>
                    </div>      
                </div>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="email"><b>E-mail</b></label>
                            <input type="email" name="email" class="form-control" id="email" required="" onblur="validateEmail()">
                            <div class="alert alert-danger" id="msgEmail">
                                
                            </div>
                        </div>
                    </div>    
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="telefone"><b>Telefone</b></label>
                            <input type="text" name="telefone" class="form-control" id="telefone" required="" onblur="validateTelefone()">
                            <div class="alert alert-danger" id="msgTelefone">
                                
                            </div>
                        </div>
                    </div> 
                </div>   
                
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="empresa"><b>Empresa</b> (Razão Social)</label>
                            <input type="text" name="empresa" class="form-control" id="empresa" required="" onblur="validateEmpresa()">
                            <div class="alert alert-danger" id="msgEmpresa">
                                
                            </div>
                        </div>
                    </div> 
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="cnpj"><b>CNPJ</b></label>
                            <input type="text" name="cnpj" class="form-control" id="cnpj" required="" onblur="validateCnpj()">
                            <div class="alert alert-danger" id="msgCnpj">
                                
                            </div>
                        </div>
                    </div> 
                </div> 
                
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="form-group">
                        <label for="cep"><b>CEP</b></label>
                        <div class="input-group">
                            
                            <input type="text" name="cep" class="form-control" id="cep" required="" onblur="validateCep()" maxlength="9">

                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" id="button-addon2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </button>
                            </div>

			</div>
                        <div class="alert alert-danger" id="msgCep">
                                
                        </div>
                        </div>
                    </div>          
                </div>                  

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="logradouro"><b>Logradouro</b></label>
                            <input type="text" name="logradouro" class="form-control" id="logradouro" required="" onblur="validateLogradouro()">
                            <div class="alert alert-danger" id="msgLogradouro">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="numero"><b>Número</b></label>
                            <input type="text" name="numero" class="form-control" id="numero" required="" onblur="validateNumero()">
                            <div class="alert alert-danger" id="msgNumero">
                                
                            </div>
                        </div>
                    </div>                     
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="bairro"><b>Bairro</b></label>
                            <input type="text" name="bairro" class="form-control" id="bairro" required="" onblur="validateBairro()">
                            <div class="alert alert-danger" id="msgBairro">
                                
                            </div>
                        </div>
                    </div>      
                </div>   

                <div class="row">    
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="cidade"><b>Cidade</b></label>
                            <input type="text" name="cidade" class="form-control" id="cidade" required="" onblur="validateCidade()">
                            <div class="alert alert-danger" id="msgCidade">
                                
                            </div>
                        </div>
                    </div>  
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="estado"><b>Estado</b></label>
                            <input type="text" name="estado" class="form-control" id="estado" required="" onblur="validateEstado()">
                            <div class="alert alert-danger" id="msgEstado">
                                
                            </div>
                        </div>
                    </div>                      
                </div>  
                
                <div class="row">
                    <div class="col-4 col-sm-2 col-md-2 col-lg-2">
                        <input type="submit" class="btn btn-primary" value="Cadastrar">
                    </div>
                    <div class="col-2 col-sm-1 col-md-1 col-lg-1">
                        <a href="index.php" class="btn btn-dark">
                            Voltar
                        </a>
                    </div>      
                </div>  
            </form>
        </div>
    </body>
</html>


