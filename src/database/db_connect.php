<?php


class db_foodmarket{

	//prporetis

	public $dbhost= 'localhost';
	public $dbuser= 'root';
	public $dbpass= '';
	public $dbname= 'foodmarket';
	
	/*
        Default data for connection
	*/
	public function __construct(){
            $dbhost= 'localhost';
            $dbuser= 'root';
            $dbpass= '';
            $dbname= 'foodmarket';
	}
	
	public function __construct($host, $user, $pass, $db){
            $this->dbhost = $host;
            $this->dbuser = $user;
            $this->dbpass = $pass;
            $this->dbname = $db;
	}

	// conect
	public function connect (){
		$mysql_connect_str='mysql:host=$dbhost; dbname=$dbname';
		$dbConnection= new PDO($mysql_connect_str, $this->dbuser, $this->dbpass, array(
    PDO::ATTR_PERSISTENT => true));
		 $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo " DB conected";
		return $dbConnection;
	}
}