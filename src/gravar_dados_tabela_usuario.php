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
    
    $res = mysqli_query($conn->conectar(), $sql);
    
    if ($res)
    {
        echo "Cliente Cadastrado com Sucesso";
    }
    else
    {
        echo "Não foi possível cadastrar o cliente";
    }

?>
<html>
    <head>
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/geral.css">
                
        <title>SENAI</title>
    </head>
    <body>
        <form action= index.php method=get>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Voltar</button>
            </div>
        </form>
    </body>
</html>