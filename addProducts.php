<?php
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;

	


	$app = new \Slim\App;

	//all info
	$app->get('/allprod', function(Request $request, Response $response)  {

			echo "ruta realizata";
			
			$sql= "SELECT *  FROM products" ;

			try{
				//get DB object 
				$db = new db_foodmarket();

					//connect

				$db = $db->connect();
			echo "  Conexiune realizata prin PDO";

			 $stmt=$db->query($sql);
			 $info=$stmt->fetchAll(PDO::FETCH_OBJ);
		   $db=null;
		   //afiseaza pe ecran
		   echo json_encode($info);
		  
			} catch(PDOException $e){
				echo '{"error": {"text": '.$e->getMessage().'}';

			}
	});

	
	// add formula
	$app->post('/addProdus', function(Request $request, Response $response)  {
	
		//$PRODUCT_ID=$request->getParam('PRODUCT_ID');
		$PRODUCT_NAME= $request->getParam('PRODUCT_NAME');
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
		//$third_image= $request->getParam('third_image');

		
		
		echo "ruta realizata";
		
		
		$sql= "INSERT into products(PRODUCT_NAME,PRODUCT_DESCRIPTION_FR,PRODUCT_CATEGORY,AVAILABLE_QUANTITY,PRODUCT_WEIGHT,PRODUCT_DESCRIPTION,PERCENTAGE_DISCOUNT,STOCK_ALERT,STOCK_CRITICAL,ONLINE_DATE,Restaurant_AUTHOR,ENABLE_DISPLAY,COMMENT,APPROUVED_BY,main_image,auxiliary_images)
		
							VALUES(:PRODUCT_NAME,:PRODUCT_DESCRIPTION_FR,:PRODUCT_CATEGORY,:AVAILABLE_QUANTITY,:PRODUCT_WEIGHT,:PRODUCT_DESCRIPTION,:PERCENTAGE_DISCOUNT,:STOCK_ALERT,:STOCK_CRITICAL,:ONLINE_DATE,:Restaurant_AUTHOR,:ENABLE_DISPLAY,:COMMENT,:APPROUVED_BY,:main_image,:auxiliary_images) ";

		try{
			//get DB object 
			$db = new db_foodmarket();

				//connect

			$db = $db->connect();
		echo "  Conexiune realizata prin PDO";

			
					


			$stmt = $db->prepare($sql);
			//$stmt->bindParam(':PRODUCT_ID', $PRODUCT_ID);
			$stmt->bindParam(':PRODUCT_NAME', $PRODUCT_NAME);
			$stmt->bindParam(':PRODUCT_DESCRIPTION_FR', $PRODUCT_DESCRIPTION_FR);
			$stmt->bindParam(':PRODUCT_CATEGORY', $PRODUCT_CATEGORY);
			$stmt->bindParam(':AVAILABLE_QUANTITY', $AVAILABLE_QUANTITY);
			$stmt->bindParam(':PRODUCT_WEIGHT', $PRODUCT_WEIGHT);
			$stmt->bindParam(':PRODUCT_DESCRIPTION', $PRODUCT_DESCRIPTION);
			$stmt->bindParam(':PERCENTAGE_DISCOUNT', $PERCENTAGE_DISCOUNT);
			$stmt->bindParam(':STOCK_ALERT', $STOCK_ALERT);
			$stmt->bindParam(':STOCK_CRITICAL', $STOCK_CRITICAL);
			$stmt->bindParam(':ONLINE_DATE', $ONLINE_DATE);
			$stmt->bindParam(':Restaurant_AUTHOR', $Restaurant_AUTHOR);
			$stmt->bindParam(':ENABLE_DISPLAY', $ENABLE_DISPLAY);
			$stmt->bindParam(':COMMENT', $COMMENT);
			$stmt->bindParam(':APPROUVED_BY', $APPROUVED_BY);
			$stmt->bindParam(':main_image', $main_image);
			$stmt->bindParam(':auxiliary_images', $auxiliary_images);
			//$stmt->bindParam(':third_image', $third_image);



			$stmt->execute();
			echo '{"notice": {"text": "product added"}';


		} catch(PDOException $e){
			echo '{"error": {"text": '.$e->getMessage().'}';

		}

		//rest body
		/*
			{
			"PRODUCT_NAME":"functie test",
		    "Restaurant_AUTHOR":"img test",
		    "COMMENT":"parametri test",
		  
	    	}
	    */
	});

	
	
	// update formula
	/*
	$app->put('/upProdus/{PRODUCT_ID}', function(Request $request, Response $response)  {
		
		$PRODUCT_ID=$request->getParam('PRODUCT_ID')
		$PRODUCT_NAME= $request->getParam('PRODUCT_NAME');
		$PRODUCT_DESCRIPTION_FR= $request->getParam('PRODUCT_DESCRIPTION_FR');
		$PRODUCT_CATEGORY= $request->getParam('PRODUCT_CATEGORY');
	

			

		echo "ruta realizata";
		
		
		$sql= "UPDATE products SET 
					PRODUCT_NAME =:PRODUCT_NAME,
					PRODUCT_DESCRIPTION_FR   =:PRODUCT_DESCRIPTION_FR,
					PRODUCT_CATEGORY	  =:PRODUCT_CATEGORY
					
				Where PRODUCT_ID = $PRODUCT_ID";
		try{
			//get DB object 
			$db = new db_foodmarket();

				//connect

			$db = $db->connect();
		//echo "  Conexiune realizata prin PDO";

			$stmt = $db->prepare($sql);
			//$stmt->bindParam(':id', $id);
			$stmt->bindParam(':PRODUCT_NAME', $PRODUCT_NAME);
			$stmt->bindParam(':PRODUCT_DESCRIPTION_FR',    $PRODUCT_DESCRIPTION_FR);
			$stmt->bindParam(':PRODUCT_CATEGORY', $PRODUCT_CATEGORY);

			$stmt->execute();
			echo '{"notice": {"text": "formula updated"}';


			} catch(PDOException $e){
			echo '{"error": {"text": '.$e->getMessage().'}';

		}

				//rest body
				/*
					{
					"PRODUCT_NAME":"functie test",
				    "PRODUCT_DESCRIPTION_FR":"update test",
				    "PRODUCT_CATEGORY":" update"
				   
			    	}
			    */
//	}); 
	

	//delete formula
	$app->delete('/product/{PRODUCT_ID}', function(Request $request, Response $response)  {

		echo "ruta realizata";
		$id=$request->getAttribute('id');
		
		$sql= "DELETE  FROM products  where PRODUCT_ID = $PRODUCT_ID" ;

		try{
			//get DB object 
			$db = new db_foodmarket();

				//connect

			$db = $db->connect();
		echo "  Conexiune realizata prin PDO";

		$stmt=$db->query($sql);
		 $stmt->execute();
		
	   $db=null;
	   echo '{"notice": {"text": "Protuct deleted"}';

		} catch(PDOException $e){
			echo '{"error": {"text": '.$e->getMessage().'}';

		}	
	});
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8"/>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" >
    <link rel="stylesheet" type="text/css" href="trei.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet"> <!-- font special-->


</head>


<body>
<!-- Form Name -->
<legend>PRODUCTS</legend>
<fieldset>
<!--form post-->
<form  class="form-horizontal" action="http://myslim/addProdus" method="post" enctype="multipart/form-data" >
	



		
	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="PRODUCT_ID">PRODUCT ID</label>  
	  <div class="col-md-4">
	  <input id="PRODUCT_ID" name="PRODUCT_ID" placeholder="PRODUCT ID" class="form-control input-md"  type="text">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="PRODUCT_NAME">PRODUCT NAME</label>  
	  <div class="col-md-4">
	 <!-- <?php echo json_encode(info); ?> -->
	  <input id="PRODUCT_NAME" name="PRODUCT_NAME" placeholder="PRODUCT NAME" class="form-control input-md" type="text">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="product_name_fr">PRODUCT DESCRIPTION FR</label>  
	  <div class="col-md-4">
	  <input id="PRODUCT_DESCRIPTION_FR" name="PRODUCT_DESCRIPTION_FR" placeholder="PRODUCT DESCRIPTION FR" class="form-control input-md"  type="text">
	    
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="PRODUCT_CATEGORY">PRODUCT CATEGORY</label>
	  <div class="col-md-4">
	    <select id="PRODUCT_CATEGORY" name="PRODUCT_CATEGORY" class="form-control">
	    </select>
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="AVAILABLE_QUANTITY">AVAILABLE QUANTITY</label>  
	  <div class="col-md-4">
	  <input id="AVAILABLE_QUANTITY" name="AVAILABLE_QUANTITY" placeholder="AVAILABLE QUANTITY" class="form-control input-md"  type="text">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="PRODUCT_WEIGHT">PRODUCT WEIGHT</label>  
	  <div class="col-md-4">
	  <input id="PRODUCT_WEIGHT" name="PRODUCT_WEIGHT" placeholder="PRODUCT WEIGHT" class="form-control input-md" type="text">
	    
	  </div>
	</div>

	<!-- Textarea -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="PRODUCT_DESCRIPTION">PRODUCT DESCRIPTION</label>
	  <div class="col-md-4">                     
	    <textarea class="form-control" id="PRODUCT_DESCRIPTION" name="PRODUCT_DESCRIPTION"></textarea>
	  </div>
	</div>

	<!-- Textarea -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="product_name_fr">PRODUCT DESCRIPTION FR</label>
	  <div class="col-md-4">                     
	    <textarea class="form-control" id="product_name_fr" name="product_name_fr"></textarea>
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="PERCENTAGE_DISCOUNT">PERCENTAGE DISCOUNT</label>  
	  <div class="col-md-4">
	  <input id="PERCENTAGE_DISCOUNT" name="PERCENTAGE_DISCOUNT" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md"  type="text">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="STOCK_ALERT">STOCK ALERT</label>  
	  <div class="col-md-4">
	  <input id="STOCK_ALERT" name="STOCK_ALERT" placeholder="STOCK ALERT" class="form-control input-md"  type="text">
	    
	  </div>
	</div>

	<!-- Search input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="STOCK_CRITICAL">STOCK CRITICAL</label>
	  <div class="col-md-4">
	    <input id="STOCK_CRITICAL" name="STOCK_CRITICAL" placeholder="STOCK CRITICAL" class="form-control input-md"  type="search">
	    
	  </div>
	</div>

	<!-- Search input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="tutorial">TUTORIAL</label>
	  <div class="col-md-4">
	    <input id="tutorial" name="tutorial" placeholder="TUTORIAL" class="form-control input-md" type="search">
	    
	  </div>
	</div>

	<!-- Search input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="tutorial_fr">TUTORIAL FR</label>
	  <div class="col-md-4">
	    <input id="tutorial_fr" name="tutorial_fr" placeholder="TUTORIAL FR" class="form-control input-md"  type="search">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="ONLINE_DATE">ONLINE DATE</label>  
	  <div class="col-md-4">
	  <input id="ONLINE_DATE" name="ONLINE_DATE" placeholder="ONLINE DATE" class="form-control input-md"  type="text">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="Restaurant_AUTHOR">Restaurant_AUTHOR</label>  
	  <div class="col-md-4">
	  <input id="Restaurant_AUTHOR" name="Restaurant_AUTHOR" placeholder="AUTHOR" class="form-control input-md"  type="text">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="ENABLE_DISPLAY">ENABLE DISPLAY</label>  
	  <div class="col-md-4">
	  <input id="ENABLE_DISPLAY" name="ENABLE_DISPLAY" placeholder="ENABLE DISPLAY" class="form-control input-md"  type="text">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="COMMENT">COMMENT</label>  
	  <div class="col-md-4">
	  <input id="COMMENT" name="COMMENT" placeholder="COMMENT" class="form-control input-md"  type="text">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="APPROUVED_BY">APPROUVED BY</label>  
	  <div class="col-md-4">
	  <input id="APPROUVED_BY" name="APPROUVED_BY" placeholder="APPROUVED BY" class="form-control input-md"  type="text">
	    
	 <!-- File Button --> 
	<div class="form-group">
	  <label class="col-md-4 control-label" for="main_image">main_image</label>
	  <div class="col-md-4">
	    <input id="main_image" name="main_image" class="input-file" type="file">
	  </div>
	</div>
	<!-- File Button --> 
	<div class="form-group">
	  <label class="col-md-4 control-label" for="main_image">auxiliary_images</label>
	  <div class="col-md-4">
	    <input id="main_image" name="main_imagen" class="input-file" type="file">
	  </div>
	</div>

	<!-- Button -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
	  <div class="col-md-4">
	    
	  </div>


	  
	  </div>

	<button class="btn btn-primary" onclick="$(this).hide();">Add Product</button>
</form>  <!--form post-->
</fieldset>
<!--form get-->
			<form action="http://myslim/allprod"method="get">
							<button class="btn btn-success" onclick="$(this).hide();"> get </button>
			</form>

	


 <!-- Latest jquery-->
<script src="js/jquery.min.js"></script>
 <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js" ></script> 
</body>
</html>