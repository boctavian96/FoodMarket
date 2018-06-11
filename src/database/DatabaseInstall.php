<?php

/*
Class used for the install of the database 
@author = Octavian Bodnariu
@date = 3.06.2018
*/

include "DatabaseCreate.php";

class DatabaseInstall {

    private $host = "localhost";
    private $database_name = "blackbyt_foodmarket";
    private $database_user = "blackbyt_admin";
    private $database_pass = "cB(ONHHCMfnf";

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