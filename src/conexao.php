<?php
    class Conexao{
        public $host = "localhost";
        public $dbname      = "senai";
        public $username = "root";
        public $password = "12345678";
        
        public function conectar(){
            $conexao= new mysqli($this->host, $this->username, $this->password, $this->dbname);
            if(!$conexao){
                echo("Não conectou...");
            }
            return $conexao;
        } 
    }    
?>