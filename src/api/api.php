<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class db_conn{

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
		$mysql_connect_str='mysql:host=localhost:3306;dbname=foodmarket';
		$dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass); //array(PDO::ATTR_PERSISTENT => true));
                //$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo " DB conected";
		return $dbConnection;
	}
	
    
}

$host = 'localhost:3306';
$user = 'pma';
$password = 'pass';
$database = 'foodmarket';

$app = new \Slim\App;
//echo 'here';

//-------------------------------------------RESTAURANT------------------------------------------------------------

//Get all restaurants
$app->get('/restaurante', function(Request $request, Response $response){
    try{
    $db = new db_conn('localhost:3306', 'pma', 'pass', 'foodmarket');
    $sql = "SELECT * from Restaurant";
    $conn = $db->connect();
    $stmt = $conn->query($sql);
    
    $restaurante = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($restaurante);
    }catch(PDOExeptionn $e){
       echo $e;
    }
});

//Get one restaurant
$app->get('/restaurant/{id}', function(Request $request, Response $response){

    $id = $request->getAttribute('id');

    try{
    $db = new db_conn('localhost:3306', 'pma', 'pass', 'foodmarket');
    $sql = "SELECT * from Restaurant WHERE id = $id";
    $conn = $db->connect();
    $stmt = $conn->query($sql);
    
    $restaurante = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($restaurante);
    }catch(PDOExeptionn $e){
       echo $e;
    }
});

//Add new restaurant
$app->post('/restaurant/add', function(Request $request, Response $response){
    try{
    
        $RESTAURANT_NAME = $request->getParam('RESTAURANT_NAME');
        $PRODUCT_DESCRIPTION_FR= $request->getParam('PRODUCT_DESCRIPTION_FR');
        $PRODUCT_CATEGORY= $request->getParam('PRODUCT_CATEGORY');
        $AVAILABLE_QUANTITY= $request->getParam('AVAILABLE_QUANTITY');
        $PRODUCT_WEIGHT= $request->getParam('PRODUCT_WEIGHT');
        $PRODUCT_DESCRIPTION= $request->getParam('PRODUCT_DESCRIPTION');
        $PERCENTAGE_DISCOUNT= $request->getParam('PERCENTAGE_DISCOUNT');
        $STOCK_ALERT= $request->getParam('STOCK_ALERT');
        $STOCK_CRITICAL= $request->getParam('STOCK_CRITICAL');
        $ONLINE_DATE= $request->getParam('ONLINE_DATE');
        $Restaurant_AUTHOR= $request->getParam('Restaurant_AUTHOR');
        $ENABLE_DISPLAY= $request->getParam('ENABLE_DISPLAY');
        $COMMENT= $request->getParam('COMMENT');
        $APPROUVED_BY= $request->getParam('APPROUVED_BY');
        $main_image= $request->getParam('main_image');
        $auxiliary_images= $request->getParam('auxiliary_images');
    
    
    $db = new db_conn('localhost:3306', 'pma', 'pass', 'foodmarket');
    $sql = "SELECT * from Restaurant";
    $conn = $db->connect();
    $stmt = $conn->query($sql);
    
    $restaurante = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($restaurante);
    }catch(PDOExeptionn $e){
       echo $e;
    }
});

//---------------------------------------------USER---------------------------------------------------------
$app->get('/users', function(Request $request, Response $response){
    try{
    $db = new db_conn('localhost:3306', 'pma', 'pass', 'foodmarket');
    $sql = "SELECT * from User";
    $conn = $db->connect();
    $stmt = $conn->query($sql);
    
    $restaurante = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($restaurante);
    }catch(PDOExeptionn $e){
       echo $e;
    }
});


$app->get('/user/{id}', function(Request $request, Response $response){
    try{
    $db = new db_conn('localhost:3306', 'pma', 'pass', 'foodmarket');
    $sql = "SELECT * from User where id = $id";
    $conn = $db->connect();
    $stmt = $conn->query($sql);
    
    $restaurante = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($restaurante);
    }catch(PDOExeptionn $e){
       echo $e;
    }
});

$app->post('/user/add', function(Request $request, Response $response){
    try{
    $db = new db_conn('localhost:3306', 'pma', 'pass', 'foodmarket');
    $sql = "SELECT * from Restaurant";
    $conn = $db->connect();
    $stmt = $conn->query($sql);
    
    $restaurante = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($restaurante);
    }catch(PDOExeptionn $e){
       echo $e;
    }
});

//------------------------------------------------------------PRODUS--------------------------------------------------

$app->get('/produse', function(Request $request, Response $response){
    try{
    $db = new db_conn('localhost:3306', 'pma', 'pass', 'foodmarket');
    $sql = "SELECT * from Restaurant";
    $conn = $db->connect();
    $stmt = $conn->query($sql);
    
    $restaurante = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($restaurante);
    }catch(PDOExeptionn $e){
       echo $e;
    }
});

$app->get('/produs/{id_produs}/{id_restaurant}', function(Request $request, Response $response){
    try{
    $db = new db_conn('localhost:3306', 'pma', 'pass', 'foodmarket');
    $sql = "SELECT * from Restaurant";
    $conn = $db->connect();
    $stmt = $conn->query($sql);
    
    $restaurante = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($restaurante);
    }catch(PDOExeptionn $e){
       echo $e;
    }
});

$app->post('/produs/add', function(Request $request, Response $response){
    try{
    $db = new db_conn('localhost:3306', 'pma', 'pass', 'foodmarket');
    $sql = "SELECT * from Restaurant";
    $conn = $db->connect();
    $stmt = $conn->query($sql);
    
    $restaurante = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($restaurante);
    }catch(PDOExeptionn $e){
       echo $e;
    }
});


//------------------------------------------------------------COMANDA-------------------------------------------------

$app->get('/comenzi', function(Request $request, Response $response){
    try{
    $db = new db_conn('localhost:3306', 'pma', 'pass', 'foodmarket');
    $sql = "SELECT * from Restaurant";
    $conn = $db->connect();
    $stmt = $conn->query($sql);
    
    $restaurante = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($restaurante);
    }catch(PDOExeptionn $e){
       echo $e;
    }
});

$app->get('/comanda/{id}', function(Request $request, Response $response){
    try{
    $db = new db_conn('localhost:3306', 'pma', 'pass', 'foodmarket');
    $sql = "SELECT * from Restaurant";
    $conn = $db->connect();
    $stmt = $conn->query($sql);
    
    $restaurante = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($restaurante);
    }catch(PDOExeptionn $e){
       echo $e;
    }
});

$app->post('/comanda/add', function(Request $request, Response $response){
    try{
    $db = new db_conn('localhost:3306', 'pma', 'pass', 'foodmarket');
    $sql = "SELECT * from Restaurant";
    $conn = $db->connect();
    $stmt = $conn->query($sql);
    
    $restaurante = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($restaurante);
    }catch(PDOExeptionn $e){
       echo $e;
    }
});

//---------------------------------------------------SUPER_USER------------------------------------------------------------------

$app->run();
?>