<?php
echo("conectando no servidor...");
if(!@($conexao=pg_connect("host = localhost dbname = senai port=5432 user=postgres password=123"))){
    echo("Não conectou ao banco");
}else{
    echo("Conexão ok!");
}

$sql = "select * from usuarios;";
$res = pg_query(conexao, $sql);
while($row=pg_fetch_array($res)){
    $value= $row["nome"];
    $options.="<OPTION VALUE=\"$value\">".$value;
}
?>
