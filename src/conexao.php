<?php
    class Conexao{
        public $host = "";
        public $dbname      = "";
        public $username = "";
        public $password = "";
        

        public function conectar(){
            $conexao= new mysqli($this->host, $this->username, $this->password, $this->dbname);
            if(!$conexao){
                echo("Não conectou...");
            }else{
                echo("Conectado no banco2");
            }
            return $conexao;
        }   
    }    
?>