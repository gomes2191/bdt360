<?php

    include('conecta.php');

    $nome =      $_POST['nome'];
    $matricula = $_POST['matricula'];
    $admissao =  $_POST['admissao'];
    $salario =   $_POST['salario'];
    $cargo =     $_POST['cargo'];
    $erro =   0;



$sql = "INSERT INTO `funcionario` VALUES";
$sql .= "('', '$nome', '$matricula', '$admissao', '$salario', '$cargo')";

var_dump($sql);
$resultado = mysql_query($sql);

var_dump($resultado);
