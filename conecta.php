<?php

    $conectar = mysql_connect('localhost', 'root', '');
    $i = mysql_select_db('empresa', $conectar);
    var_dump($i);