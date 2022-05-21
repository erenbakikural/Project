<?php
	
	$host 		= "sql307.epizy.com";
	$dbname 	= "epiz_31395433_excel";
	$charset 	= "utf8";
	$root 		= "epiz_31395433";
	$password 	= "ZK0zklJYEkP4";

	try{
		$db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset;", $root, $password);
	}catch(PDOExeption $error){
		echo $error->getMessage();
	}

	// CSRF Token
	if ($_SESSION) {
	  if (!isset($_POST["_token"])) {
	    $_SESSION["_token"] = md5(time().rand(0,99999999));
	  }
	}
?>
