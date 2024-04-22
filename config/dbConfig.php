<?php
    
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS','');
    define('BASE','pet_vida');
    define('PORT','3306');
   
    $conn = new mysqli(HOST, USER, PASS, BASE, PORT);

    
    if ($conn->connect_error) {
        throw new Exception('Erro ao conectar ao banco de dados: ' . $conn->connect_error);
    } 