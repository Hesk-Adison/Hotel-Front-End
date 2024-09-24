<?php

const HOST = 'localhost';
const DBNAME = 'hotel_db';
const DBUSER = 'root';
const DBPASSWORD = '';

function Conection() {
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DBNAME, DBUSER, DBPASSWORD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configura para lançar exceções em caso de erro
    } catch (PDOException $e) {
        echo "Erro de conexão: " . $e->getMessage();
        return null; // Retorna null em caso de falha na conexão
    }

    return $connection;
}

?>
