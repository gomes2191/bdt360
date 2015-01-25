<?php
    
    //Inserindo arquivo de configuração
    require_once('config.php'); 
    
    //Recuperando dados
    
    $grad           =       $_POST['grad'];
    $nomeGuerra     =       $_POST['nomeGuerra'];
    $nome           =       $_POST['nome'];
    $idt            =       $_POST['idt'];
    $nascimento     =       $_POST['nascimento'];
    $dataPraca      =       $_POST['dataPraca'];
    $arma           =       $_POST['arma'];
    $formacao       =       $_POST['formacao'];
    $especializacao =       $_POST['especializacao'];
    $cursos         =       $_POST['cursos'];
    
    
    
    /*
    $grad           =       '3º Sgt';
    $nomeGuerra     =       'Gomes';
    $nome           =       'Francisco Aparecido Gomes de Almeida';
    $idt            =       '9446789-87';
    $nascimento     =       '23/02/2007';
    $dataPraca      =       '24/04/2008';
    $arma           =       'STT';
    $formacao       =       'ANALISE E DESENVOLVIMENTO DE SISTEMAS';
    $especializacao =       'ESPECIALIZAÇÃO EM TECNOLOGIAS PARA APLICAÇOES WEB';
    $cursos         =       'TECNICO EM INFORMATICA, OPERADOR DE COMPUTADORES';
     * 
     */
     
    
    //instanciando objeto para interação
    $obj = new Form;
    $erro = array($nomeGuerra, $nome, $idt, $nascimento);
    
    $erroR = $obj->trataDados($erro);
    
    if($erroR == \FALSE)
    {
        print 'Ouve erros';

    }
    else 
    {   
        try 
        {
            //Instancia o metodo de conexao
            //da classe de conexão
            $conn = Conexao::getInstance();
            //executa uma série de execuçoes SQL
            $conn->exec("INSERT INTO talentos (`grad`,`nome`,`idt`, `nascimento`, `dataPraca`, `arma`, `formacao`, `especializacao`, `cursos`)VALUES"
            ."('$grad', '$nome', '$idt', '{$obj->formatDate($nascimento)}', '{$obj->formatDate($dataPraca)}', '$arma', '$formacao', '$especializacao', '$cursos')");
            
            $conn = null;
        }
        catch (Exception $e)
        {
           echo 'Ouve um erro na inserção dos dados.'.$e->getMessage(); 
        } 
    }
    
   
    
            
           
        