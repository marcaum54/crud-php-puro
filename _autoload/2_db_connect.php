<?php

try
{
    $servername = '127.0.0.1';
    $dbname = 'crud';
    $dbuser = 'root';
    $dbpassword = '';

    $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $dbuser, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    die("Falha de conexão: " . $e->getMessage());
}
