<?php

function get_usuarios()
{
    $rows = [];
    global $conn;
    $query = $conn->query("SELECT * FROM usuarios ORDER BY id DESC");

    if( $query->rowCount() )
        $rows = $query->fetchAll(PDO::FETCH_CLASS);

    return $rows;
}

function get_usuario($id)
{
    $row = new stdClass;
    global $conn;
    $query = $conn->query("SELECT * FROM usuarios WHERE id = {$id} LIMIT 1");

    if( $query->rowCount() )
    {
        $row = $query->fetchObject();

        $splited = explode('-', $row->nascimento);
        $row->dia = $splited[2];
        $row->mes = $splited[1];
        $row->ano = $splited[0];
    }

    return $row;
}