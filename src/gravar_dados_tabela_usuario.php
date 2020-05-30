<?php
    echo("conectando no servidor...");
    $host        = "host = 127.0.0.1";
    $port        = "port = 5432";
    $dbname      = "dbname = senai";
    $credentials = "user = postgres password=postgres";
    $conexao=pg_connect("$host $port $dbname $credentials");
    if(!$conexao){
        echo("Não conectou...\n");
    }else{
        echo("Conectado no banco\n");
    }
    $nome =  $_POST['nome'];
    echo($nome);
    echo('\n');
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $curso = $_POST['curso'];
    $inst = $_POST['inst'];
    $foto = $_POST['foto'];
    $sql = "INSERT INTO cliente (nome, email, telefone, curso, inst, foto) VALUES ('$nome', '$email','$telefone','$curso','$inst','$foto');";
    $res = pg_query($conexao, $sql);
    echo($res);
    echo("\n");
    $qtd_linhas = pg_affected_rows($res);
    echo($qtd_linhas);
    echo("\n");
    if ($qtd_linhas > 0)
    {
        echo "Cliente Cadastrado com Sucesso";
    }
    //Se "$qtd_linhas" tiver um Valor Igual a 0 é porque ouve um Erro ao gravar o Produto na Tabela
    elseif ($qtd_linhas == 0)
    {
        echo "Não foi possível cadastrar o cliente";
    }
?>