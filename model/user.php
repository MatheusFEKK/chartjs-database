<?php


    Class user{
        public $nome;
        public $email;
        public $compras;
        public $db;


        public function __construct($db)
        {
            $this->db = $db;
        }

        public function readAll()
        {
            $sql = "SELECT COUNT(produto) AS produtos FROM vendas;";
            $stat = $this->db->query($sql);
            $stat->execute();

            return $stat->fetchAll(PDO::FETCH_OBJ);
        }

        public function readAllClientes()
        {
            $sql = "SELECT COUNT(nome) AS users FROM clientes";
            $stat = $this->db->query($sql);
            $stat->execute();

            return $stat->fetchAll(PDO::FETCH_OBJ);
        }
    }