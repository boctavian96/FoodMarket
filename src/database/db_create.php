<?php

include "db_connect.php";

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
    
        }
        
        public function createProductTable(){
        
        }
        
        public function createRestaurantTable(){
        
        }
        
        public function createCommandTable(){
        
        }
        
        public function createStatistictTable(){
        
        }
        
        public function createAdminsTable(){
        
        }
    }

?>