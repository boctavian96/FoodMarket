<?php

/*
Class used for the install of the database 
@author = Octavian Bodnariu
@date = 3.06.2018
*/

include "DatabaseCreate.php";

class DatabaseInstall {

    private $host = '127.0.0.1';
    private $database_name = 'foodmarket';
    private $database_user = 'pma';
    private $database_pass = 'pass';

    private $db_create;
    
    public function __construct(){
        $this->db_create = new DatabaseCreate($this->host, $this->database_user, $this->database_name, $this->database_pass);
    }
    
    public function createDB(){
        //$this->db_create
    }
    
    public function upgradeDB(){
        
        $this->db_create->createUserTable();
        $this->db_create->createRestaurantTable();
        $this->db_create->createProduseTable();
        $this->db_create->createComandaTable();
    }
}

 $instance = new DatabaseInstall();
 try{
    $instance->upgradeDB();
    echo '<br/>Success';
 }catch(pdoexception $e){
    echo $e->getMessage();
 }

?>