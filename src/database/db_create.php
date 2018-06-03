<?php

include "db_connect.php";

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
            $conn = new db_foodmarket();
        }
            
        public function createDatabase(){
            $sql = "CREATE DATABASE $db_name";
        }
    
        public function createUserTable(){
            $sql = "CREATE TABLE User(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, prenume VARCHAR(30) NOT NULL, adresa VARCHAR(60) NOT NULL, data_creare DATE, oras VARCHAR(30) NOT NULL, email VARCHAR(60) NOT NULL, password VARCHAR(60) NOT NULL ";
        }
        
        public function createProductTable(){
            $sql = "CREATE TABLE Produs(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, restaurant FOREIGN KEY REFERENCES Restaurant(id) , prenume VARCHAR(30) NOT NULL, adresa VARCHAR(60) NOT NULL, data_creare DATE, oras VARCHAR(30) NOT NULL, email VARCHAR(60) NOT NULL, password VARCHAR(60) NOT NULL ";
        }
        
        public function createRestaurantTable(){
            $sql = "CREATE TABLE Restaurant(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nume VARCHAR(60) NOT NULL, adresa VARCHAR(60) NOT NULL, data_creare DATE, email VARCHAR(60) NOT NULL, password VARCHAR(60) NOT NULL ";
        }
        
        public function createCommandTable(){
            $sql = "CREATE TABLE Comanda(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, idProdus FOREIGN KEY REFERENCES Produs(id)";
        }
        
        public function createStatisticsTable(){
            //TODO
        }
        
        public function createAdminsTable(){
            //TODO 
        }
    }

?>