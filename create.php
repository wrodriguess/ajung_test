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
	<title>Create</title>
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

        <?php
            require_once 'Companies.php';
            $company = new Companies();

            if(isset($_POST['contato']) && !empty($_POST['contato']) && isset($_POST['email']) && !empty($_POST['email']) &&  isset($_POST['telefone']) && !empty($_POST['telefone']) &&  isset($_POST['empresa']) && !empty($_POST['empresa']) &&  isset($_POST['cnpj']) && !empty($_POST['cnpj']) &&  isset($_POST['cep'])
            && !empty($_POST['cep']) &&  isset($_POST['logradouro']) && !empty($_POST['logradouro']) &&  isset($_POST['bairro']) && !empty($_POST['bairro']) &&  isset($_POST['numero']) && !empty($_POST['numero']) &&  isset($_POST['cidade']) && !empty($_POST['cidade']) &&  isset($_POST['estado']) && !empty($_POST['estado'])){
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

                $response = $company->create($contato, $email, $telefone, $empresa, $cnpj, $cep, $logradouro, $bairro, $numero, $cidade, $estado);
                if($response){
                    ?>
                        <script>
                            swal("Cadastro realizado com sucesso!",{
                                icon: "success",
                                button: false,
                            });
                        </script>
                    <?php
                }else{
                    ?>
                        <script>
                            swal("Não foi possivel realizar o cadastro!",{
                                icon: "error",
                                button: false,
                            });
                        </script>
                    <?php
                }
            }else{
                ?>
                    <script>
                        swal("Não foi possivel realizar o cadastro!",{
                            icon: "error",
                            button: false,
                        });
                    </script>
                <?php
            }
        ?>
        <script>
            setTimeout(function() {
                window.location='index.php'
            }, 1000);
        </script>
    </body>
</html>
    
