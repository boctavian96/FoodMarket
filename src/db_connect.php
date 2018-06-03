<?php


class db_foodmarket{

	//prporetis

	public $dbhost= 'localhost';
	public $dbuser= 'root';
	public $dbpass= '';
	public $dbname= 'foodmarket';

	// conect
	public function connect (){
		$mysql_connect_str='mysql:host=localhost; dbname=foodmarket';
		$dbConnection= new PDO($mysql_connect_str, $this->dbuser, $this->dbpass, array(
    PDO::ATTR_PERSISTENT => true));
		 $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo " DB conected";
		return $dbConnection;
	}
}