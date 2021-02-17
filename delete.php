<?php
    require_once 'Companies.php';
    $c = new Companies();            
?>
           
<html>
    <head>
        <title>Delete</title>            
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
        <?php      
            if(isset($_GET['id']) && !empty($_GET['id'])){
                $id = addslashes($_GET['id']);
                $retorno = $c->delete($id);
            }
            if($retorno){
                ?>
                    <script>
                        swal("Registro removido!",{
                            icon: "success",
                            button: false,
                        });
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        swal("Erro, registro não removido!",{
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

            