<?php
// Informações de conexão
        $host = '127.0.0.1'; // Endereço do servidor MySQL
        $username = 'root'; // Nome de usuário padrão no XAMPP
        $password = ''; // A senha padrão do do root é vazia
        $database = 'login'; // Nome do banco de dados criado

        // Criando conexão 
        $conn = new mysqli($host, $username, $password, $database);

        // Verificando a conexão
        if ($conn->connect_error) {
            die('Falha na conexão: ' .$conn->connect_error);
        } 
        

        
?>