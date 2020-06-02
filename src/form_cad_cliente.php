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
                <input name = "nome" type="text" class="form-control" id="nome" placeholder="Nome completo">
            </div>
            <div class="form-group">
                <label for="email">E-mail: </label>
                <input name = "email" type="email" class="form-control" id="email" placeholder="exemplo@email.com">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder= "(11) 11111-1111"> 
            </div>
            <div class="form-group">
                <label for="curso">Curso:</label>
                <input type="text" class="form-control" id="curso" name="curso">
            </div>
            <div class="form-group">
                <label for="inst">Instituição:</label>            
                <select class="form-control" name="inst" id="inst">
                    <option value="senaiD">Senai Dendezeiros</option>
                    <option value="senaiCim">Senai Cimatec</option>
                    <option value="senaiCet">Senai Cetind</option>
                </select>
            </div>            
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input class="form-control" type="file" id="foto" name="foto">
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
