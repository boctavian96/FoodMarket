<?php

include "db_foodmarket.php";

/*
Class used for the database management

@author = Octavian Bodnariu
@date = 3.06.2018
*/
    class DatabaseCreate{
    
        private $server_name;
        private $db_name;
        private $username;
        private $password;
        private $conn;
        
        public function __construct($server, $user, $db, $pass){
            $this->server_name = $server;
            $this->username = $user;
            $this->password = $pass;
            $this->db_name = $db;
            $this->conn = new db_foodmarket($this->server_name, $this->username, $this->password, $this->db_name);
            $this->conn = $this->conn->connect();
    
        }
            
        public function createDatabase(){
            $sql = "CREATE DATABASE $db_name";
        }
    
        public function createUserTable(){
            $sql = "CREATE TABLE User(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, prenume VARCHAR(30) NOT NULL, adresa VARCHAR(60) NOT NULL, data_creare DATE, oras VARCHAR(30) NOT NULL, email VARCHAR(60) NOT NULL, password VARCHAR(60) NOT NULL); ";
            $this->conn->query($sql);
            echo "<br/>User table created !";
        }
        
        public function createProduseTable(){
            $sql = "CREATE TABLE Produs(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, RestaurantId INT(6) UNSIGNED, prenume VARCHAR(30) NOT NULL, adresa VARCHAR(60) NOT NULL, data_creare DATE, oras VARCHAR(30) NOT NULL, email VARCHAR(60) NOT NULL, password VARCHAR(60) NOT NULL, FOREIGN KEY (RestaurantId) REFERENCES Restaurant(id));";
            $this->conn->query($sql);
             echo "<br/>Product table created !";
        }
        
        public function createRestaurantTable(){
            $sql = "CREATE TABLE Restaurant(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nume VARCHAR(60) NOT NULL, adresa VARCHAR(60) NOT NULL, data_creare DATE, email VARCHAR(60) NOT NULL, password VARCHAR(60) NOT NULL);";
            $this->conn->query($sql);
             echo "<br/>Restaurant table created !";
        }
        
        public function createComandaTable(){
            $sql = "CREATE TABLE Comanda(id INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY, ProdusId INT(6) UNSIGNED, data TIMESTAMP NOT NULL, FOREIGN KEY (ProdusId) REFERENCES Produs(id));";
            $this->conn->query($sql);
        }
        
        public function createStatisticsTable(){
            //TODO
        }
        
        public function createAdminsTable(){
            //TODO 
        }
    }

?>