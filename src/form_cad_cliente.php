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
                <input name = "nome" type="text" class="form-control" id="nome1" placeholder="Nome completo">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail: </label>
                <input name = "email" type="email" class="form-control" id="exampleInputEmail1" placeholder="exemplo@email.com">
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="tel" class="form-control" id="phone" name="telefone" placeholder= "(11) 11111-1111"> 
            </div>
            <div class="form-group">
                <label for="curso">Curso:</label>
                <input type="text" class="form-control" id="curso" name="curso">
            </div>
            <div class="form-group">
                <label for="intituiacao">Instituição:</label>            
                <select class="form-control" name="inst" id="instituicao">
                    <option value="senaiD">Senai Dendezeiros</option>
                    <option value="senaiCim">Senai Cimatec</option>
                    <option value="senaiCet">Senai Cetind</option>
                </select>
            </div>            
            <div class="form-group">
                <label for="myfile">Foto:</label>
                <input class="form-control" type="file" id="myfile" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>                    
    </body>
</html>
