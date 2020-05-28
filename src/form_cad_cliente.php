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
                <label for="nome1">Nome: </label>
                <input type="text" class="form-control" id="nome1" placeholder="Nome completo">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail: </label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="exemplo@email.com">
            </div>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>                    
    </body>
</html>
