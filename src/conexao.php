<?php
    class Conexao{
        public $host = "abitat.cndd5nogbuuf.us-east-2.rds.amazonaws.com";
        public $dbname      = "senai";
        public $username = "abitat";
        public $password = "abitatlive2019";
        
        public function conectar(){
            $conexao= new mysqli($this->host, $this->username, $this->password, $this->dbname);
            if(!$conexao){
                echo("Não conectou...");
            }
            return $conexao;
        }
    }    
?>