<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form cadastra</title>
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style-defaults.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <!--Corpo do documetno-->
    <body>
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">             </script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        
        <!--Corpo do formulario-->
        <div class="container">
           <div class="row">
               <div class="col-md-4"><h3>SCT 360 SISTEMA DE CADASTRO DE TALENTOS</h3></div>
                <div class="col-md-8" >
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Graduação</th>
                            </tr>
                        </thead>
                       <?php
                            require_once('config.php');
                            $conn = Conexao::getInstance();
                            
                            $consulta = $conn->query('SELECT nome, formacao FROM talentos');
                            
                            while ($row = $consulta-> fetch(PDO::FETCH_ASSOC)) 
                {
                                echo '<tr>';
                                
                                echo '<td>'.$row['nome'].'</td>';
                                echo '<td>'.$row['formacao'].'<p></p>'.'<a class="btn btn-primary btn-xs">VIZUALIZAR</a> <a class="btn btn-primary btn-xs">ALTERAR</a> <a class="btn btn-primary btn-xs">EXLUIR</a>'.'</td>';
                                
                                echo '</tr>';
                                
                                
                                
                            }
                       
                       ?>
                       
                    </table>
                </div>
                <!--<div class="col-md-2"></div>-->
            </div>
        </div>
    </body>
</html>