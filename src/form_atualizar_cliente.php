<?php
    require_once 'conexao.php';

    $conn = new Conexao();
    $sql = 'SELECT * FROM cliente;';
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
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/geral.css">
                
        <title>SENAI</title>
    </head>
    <body>
        <h1>Exluir usuários</h1>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Curso</th>
                <th scope="col">Instituição</th>
                <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>

        <?php
            // se o número de resultados for maior que zero, mostra os dados
            if($total > 0) {
                $cont=1;
            // inicia o loop que vai mostrar todos os dados
            do {
        ?>          
            <tr>
            <th scope="row"><?=$cont?></th>
            <td><?=$linha['nome']?></td>
            <td><?=$linha['email']?></td>
            <td><?=$linha['telefone']?></td>
            <td><?=$linha['curso']?></td>
            <td><?=$linha['instituicao']?></td>
            <td>
                <form action= editar_dados_tabela_usuario.php method="POST">
                    <div class="form-group">
                        <input name = "atualizarEmail" type="text" class="form-control" id="atualizarEmail" value=<?=$linha['email']?>>
                        <button type="submit" class="btn btn-primary">editar</button>
                    </div>
                </form>
            </td>            
            </tr>            
        <?php
            // finaliza o loop que vai mostrar os dados
            $cont=$cont+1;
                }while($linha = mysqli_fetch_assoc($res));
                // fim do if 
                }
        ?>
        </tbody>
        </table>

        <form action= index.php method=get>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Voltar</button>
            </div>
        </form>
    </body>
</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($res);
?>