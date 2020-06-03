<?php
    require_once 'conexao.php';

    $conn = new Conexao();
    
    $email = $_POST['excluirEmail'];
    
    $sql = 'DELETE FROM cliente WHERE email="'.$email.'";';
    $res = mysqli_query($conn->conectar(), $sql);
    
    if ($res)
    {
        echo "Cliente Excluído com Sucesso";
    }
    else
    {        
        echo "Não foi possível excluir o cliente";
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
