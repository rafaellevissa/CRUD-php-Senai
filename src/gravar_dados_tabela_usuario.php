<?php
    require_once 'conexao.php';

    $conn = new Conexao();
    $nome =  $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $curso = $_POST['curso'];
    $inst = $_POST['inst'];
    $foto = $_POST['foto'];
    
    $sql = 'INSERT INTO cliente (nome, email, telefone, curso, instituicao, foto) VALUES ("'.$nome.'", "'.$email.'","'.$telefone.'","'.$curso.'","'.$inst.'","'.$foto.'");';
    
    echo ($sql);
    $res = mysqli_query($conn->conectar(), $sql);
    
    if ($res)
    {
        echo "Cliente Cadastrado com Sucesso";
    }
    //Se "$qtd_linhas" tiver um Valor Igual a 0 é porque ouve um Erro ao gravar o Produto na Tabela
    else
    {
        echo "Não foi possível cadastrar o cliente";
    }

?>