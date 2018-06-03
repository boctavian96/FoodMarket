<?php

/*
Class used for the install of the database 
@author = Octavian Bodnariu
@date = 3.06.2018
*/

include "db_create.php"
class DatabaseInstall {

    private $host = "localhost";
    private $database_name = "";
    private $database_user = "";
    private $database_pass = "";

    private $db_create = new DatabaseCreate($host, $database_user, $database_name, $database_pass);
    
    public function createDB(){
        //$this->db_create
    }
    
    public function upgradeDB(){
        $db_create->createUserTable();
        $db_create->createRestaurantTable();
        $db_create->createProduseTable();
        $db_create->createComandaTable();
    }
}

?>