<?php

require "DbConfig.php";

class db_foodmarket{

	//Properties
	
	public $dbhost= '127.0.0.1';
	public $dbuser= 'pma';
	public $dbpass= 'pass';
	public $dbname= 'foodmarket';
	
	public function __construct($host, $user, $pass, $db){
            $this->dbhost = $host;
            $this->dbuser = $user;
            $this->dbpass = $pass;
            $this->dbname = $db;
	}

	// conect
	public function connect(){
		$mysql_connect_str='mysql:host=127.0.0.1;dbname=foodmarket';
		$dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass); //array(PDO::ATTR_PERSISTENT => true));
                //$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo " DB conected";
		return $dbConnection;
	}
	
    
}