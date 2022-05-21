<?php 
session_start();
$ad = $_SESSION["uye_kadi"];
$referer = $_SERVER['HTTP_REFERER']; 

if ($referer == "") 
{ 
header('Location: test.php');
exit();
} 
else 
{ 

} 

?>
<!-- As a link
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="testcikis.php">Çıkış Yap!</a>
</nav> -->
<!DOCTYPE html>
<html>
<head>
	<style>
		.ifram
		{
		
}
	
	</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8" />
    <title>Excel</title>
</head>
<body>

<!--style="border:1px solid #fffff-->
	<div class="ifram" >
<iframe width="100%" style="position:fixed; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;" style="border:1px solid #ccc" frameborder="0" scrolling="no" src="https://sheet.zohopublic.eu/sheet/published/7zaqz42e10212ca2d4cdca005b93cd0289f92?mode=embed"></iframe>    
</body>
</html>