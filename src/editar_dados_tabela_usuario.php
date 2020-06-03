<?php
    require_once 'conexao.php';

    $email = $_POST['atualizarEmail'];
    
    $conn = new Conexao();
    $sql = 'SELECT * FROM cliente WHERE email="'.$email.'";';
    $res = mysqli_query($conn->conectar(), $sql);
    if (!$res)    
    {
        echo "Não foi possível listar os clientes";
    }
    $linha = mysqli_fetch_assoc($res);
    $total = mysqli_num_rows($res);

?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">        
        <link rel="stylesheet" href="css/geral.css">                
        <title>SENAI</title>
    </head>
    <body>
        <form action="gravar_dados_tabela_usuario.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input name = "nome" type="text" class="form-control" id="nome" value=<?=$linha['nome']?>>
            </div>
            <div class="form-group">
                <label for="email">E-mail: </label>
                <input name = "email" type="email" class="form-control" id="email" value=<?=$linha['email']?>>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" value=<?=$linha['telefone']?>> 
            </div>
            <div class="form-group">
                <label for="curso">Curso:</label>
                <input type="text" class="form-control" id="curso" name="curso" value=<?=$linha['curso']?>>
            </div>
            <div class="form-group">
                <label for="inst">Instituição:</label>            
                <select class="form-control" name="inst" id="inst" value=<?=$linha['instituicao']?>>
                    <option value="senaiD">Senai Dendezeiros</option>
                    <option value="senaiCim">Senai Cimatec</option>
                    <option value="senaiCet">Senai Cetind</option>
                </select>
            </div>            
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input class="form-control" type="file" id="foto" name="foto" value=<?=$linha['foto']?>>
            </div>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
        <form action= index.php method=get>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Voltar</button>
            </div>
        </form>                    
    </body>
</html>
