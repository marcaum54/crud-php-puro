<?php

require_once 'autoload.php';

if( isset( $_POST['action'] ) )
{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nascimento = "{$_POST['ano']}-{$_POST['mes']}-{$_POST['dia']}";

    if( $_POST['action'] === 'cadastrar' )
        $sql = "INSERT INTO usuarios (nome, email, nascimento) VALUES ('{$nome}', '{$email}', '{$nascimento}')";

    if( $_POST['action'] === 'editar' )
    {
        $id = $_POST['id'];
        $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', nascimento='{$nascimento}' WHERE id = {$id}";
    }

    try
    {
        $conn->exec($sql);
        header('Location: index.php');
    }
    catch(PDOException $e)
    {
        die("Error ao tentar {$_POST['action']}: " . $e->getMessage() . " SQL :::: {$sql}");
    }
}
