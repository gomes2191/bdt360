<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//metodo incluindo classes dinamicamente
function __autoload($nameClasse)
{   
    //verifica se a classe existe
    if(file_exists("classes/{$nameClasse}.class.php"))
    {
        //carrega a classe
        include_once "classes/{$nameClasse}.class.php";
    }
}