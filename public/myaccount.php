<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: autentificare.php');
		exit();
	}
	else{
		$x = $_SESSION['userData'];
		echo $x["email"]." ".$x["last_name"]." ".$x["first_name"];
	}
?>
<html>


<body>

<center><h1>Connectedddddd</h1></center>
<button onclick="myFunc()">Delete data</button>
<script>
function myFunc(){
	alert("Disconected now..<?php session_destroy(); ?>");
	window.location.href = "autentificare.php";
	
	
}
</script>
</body>
</html>