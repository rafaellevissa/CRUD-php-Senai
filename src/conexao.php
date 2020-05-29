<?php
    echo("conectando no servidor...");
    $host        = "host = 127.0.0.1";
    $port        = "port = 5432";
    $dbname      = "dbname = senai";
    $credentials = "user = postgres password=123";
    $conexao=pg_connect("$host $port $dbname $credentials");
    if(!$conexao){
        echo("Não conectou...");
    }
    $sql = "select * from cliente;";
    $res = pg_query($conexao, $sql);
    while($row=pg_fetch_array($res)){
        $value= $row["nome"];
        echo($value."\n");
    }
?>