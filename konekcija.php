<?php

class KreiranjeTabela{

    private $connection;

    function __construct()
    {
        $this->connection = new mysqli('localhost', 'root', '');
        if ($this->connection->error) {
         die("Greska pri povezivanju: $this->connection->error");
        }
        $this->connection->query("CREATE DATABASE IF NOT EXISTS `hub`"); 
        $this->connection->select_db('hub');
        $this->connection->query("CREATE TABLE IF NOT EXISTS jela_pica(
            ID int AUTO_INCREMENT,
                name text not null,
                price int(10) not null,
                description text null,
                type text not null,
                jelo boolean not null,
                PRIMARY KEY(ID)
            
            )");
        $this->connection->query("CREATE TABLE IF NOT EXISTS users(
            ID int AUTO_INCREMENT,
                username text not null,
                password int(10) not null,
                email text null,
                admin boolean not null,
                PRIMARY KEY(ID)
            
            )");     
    }
}
$tabele = new KreiranjeTabela;        // 1 => ["ID" => , "name" => "", "price" => , "description" => "", "type" => ""],
