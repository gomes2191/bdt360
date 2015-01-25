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
                    <form  method="post" action="tratadados.php" class="form-inline form-at">
                        
                        <div class="form-group">                            
                            <label for="grad" class="control-label">Grad:</label>    
                            <br />                            
                            <select name="grad" class="form-control">
                                <option>Gen</option>
                                <option>Cel</option>
                                <option>Ten Cel</option>
                                <option>Maj</option>
                                <option>Cap</option>
                                <option>1º Ten</option>
                                <option>2º Ten</option>
                                <option>Sub Ten</option>
                                <option>1º Sgt</option>
                                <option>2º Sgt</option>
                                <option>3º Sgt</option>
                                <option>Cb</option>
                                <option>Sd</option>
                                <option>Civil</option>
                            </select>                            
                        </div>
                        <div class="form-group">
                            <label for="nomeGuerra" class="control-label">Nome de guerra:</label>
                            <br />                           
                            <input type="text" class="form-control" name="nomeGuerra">                            
                        </div>
                        <p></p>
                        <div style="width: 100%;" class="form-group">
                            <label for="nome" class="control-label">Nome completo:</label>
                            <br />
                            <input style="width: 100%;" type="text" class="form-control" name="nome">
                        </div>
                        <p></p>
                        <div class="form-group">                         
                            <label for="idt" class="control-label">IDT:</label>
                            <br />
                            <input type="text" class="form-control" name="idt">                                                                                                               
                        </div>
                        
                        <div class="form-group">
                            <label for="nascimento" class="control-label">Data de nascimento:</label>
                            <br />
                            <input type="date" class="form-control" name="nascimento">                          
                        </div>
                        
                        <div class="form-group">
                            <label for="dataPraca" class="control-label">Data de praça:</label>
                            <br />                            
                            <input type="text" class="form-control" name="dataPraca">
                        </div>
                        <p></p>
                        <div class="form-group">
                            <label for="arma" class="control-label">Arma:</label>
                            <br />
                            <input type="text" class="form-control" name="arma">
                        </div>
                        <div class="form-group">
                            <label for="formacao" class="control-label">Formação:</label>
                            <br />
                            <input type="text" class="form-control" name="formacao">
                        </div>
                        <div class="form-group">
                            <label for="especializacao" class="control-label">Especialização:</label>
                            <br />
                            <input type="text" class="form-control" name="especializacao">
                        </div>
                        <p></p>
                        
                            <label for="cursos" class="control-label">Cursos:</label>
                            <br />
                            <textarea name="cursos" class="form-control" rows="5" style="width: 100%; max-width: 100%"></textarea>
                        
                        <p></p>
                        <button type="submit" class="btn btn-default">Cadastra</button>&nbsp;<a href="#" class="btn btn-default">Tela de consultar</a>                       
                    </form>    
                </div>
                <!--<div class="col-md-2"></div>-->
            </div>
        </div>
    </body>
</html>