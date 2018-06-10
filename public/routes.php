<?php
$app->get('/index',function(){
    require("index.php");
});


$app->get('/notificare',function(){
    $to      = 'octavian.bodnariu96@e-uvt.ro';
	$subject = 'Boss, trimis din PHP';
	$message = 'Merge sau nu merge?';
	$headers = 'From: andrasesc.ovidiu@gmail.com' . "\r\n" .
    'Reply-To: ninel.andrasesc96@e-uvt.ro' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	/*if(mail($to, $subject, $message, $headers))
		echo "DA, trimis";
	else echo "Error";*/
	echo "Not send not to make spam..";
	
});

$app->post('/contactMsg',function($req){
    $params = $req->getParsedBody();
	$name = $params['name'];
	$email = $params['email'];
	$message = $params['message'];
	
	$to      = $email;
	$subject = 'Mesaj de la '.$name;
	$msg = $message;
	$headers = 'From: andrasesc.ovidiu@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	/*if(mail($to, $subject, $msg, $headers))
	{*/
		
	/*}
	else 
	{
		
	}*/
	require("index.php");
});

?>