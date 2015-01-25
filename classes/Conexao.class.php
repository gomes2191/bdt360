<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Conexao extends PDO
{
    private static $instacia;
    
    public function Conexao($dsn, $username ='', $password='')
    {
        //o construto abaixo e do PDO
        parent::__construct($dsn, $username, $password);
    }
    
    public static function getInstance()
    {
        
        //se o instancia nao existe eu faço uma
         if(!isset(self::$instacia))
        {
            try 
            {
                self::$instacia = new Conexao('mysql:host=localhost;port=3307;dbname=sct360', 'root', '');
            } 
            catch (Exception $e) 
            {
              echo 'Erro ao se conectar a base de dados'.$e->getMessage()."\n";
              exit();
            }
        }
        //Se ja existe instancia na memoria eu retorno ela
        return self::$instacia;
    }
    
}