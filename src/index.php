<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Rafael Levi">
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/geral.css">
        
        <title>SENAI</title>
    </head>
    <body>
        <h1>Formulário SENAI</h1>
        <form action= form_cad_cliente.php method=get>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cadastro de clientes</button>
            </div>
        </form>
        <form action= visualizar_clientes.php method=get>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Visualizar clientes</button>
            </div>
        </form>
        <form action= form_atualizar_cliente.php method=get>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Editar clientes</button>
            </div>
        </form>
        <form action= form_excluir_cliente.php method=get>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Remover clientes</button>
            </div>
        </form>
    </body>
</html>