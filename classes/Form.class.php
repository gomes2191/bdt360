<?php

class Form
{
    function formatDate($date)
    {   
        //Variaveis que recebem formato
        //para conversão 
        $formatDate   = 'd/m/Y';
        $toFormatDate = 'Y-m-d';
        
        //efetuando a conversao
        $valor = date_create_from_format($formatDate, $date);
        
        //Retornando valor
        return date_format($valor, $toFormatDate);
    }
    
    function trataDados($erro)
    {   
        
        foreach ($erro as $erros)
        {
            if(is_numeric($erros))
            {
                print 'Vc digitou um numero e esse padrao nao é aceito.';
                return \FALSE;
            }
            if(empty($erros) OR $erros == ' ')
            {
                echo'Ops!! Vc deixou um campo obrigatorio em branco.';
                return \FALSE;
            }
            
        }    
        return \TRUE;
    }
    
   
    
}