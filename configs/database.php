<?php

    Class database{
        private $host = "localhost:3306";
        private $database = "db_charts";
        private $user = "root";
        private $password = "";
        public $conn;


        public function connect(){
            $this->conn = NULL;

            try{
                $this->conn = NEW PDO ("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
        }catch (PDOException $error){
            echo $error->getMessage();
        }
        return $this->conn;
    }
}