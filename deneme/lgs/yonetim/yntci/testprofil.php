<!-- As a link -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="logout">Çıkış Yap!</a>
</nav>
<?php
/*	session_start();
	include 'ayar.php';
	include 'ukas.php';

	echo '<strong>Session</strong><br />
	<!-- Giriş yapmadan bakarsanız, hata verir! -->';
	echo $_SESSION["uye_id"] . "<br />";
	echo $_SESSION["uye_adsoyad"] . "<br />";
	echo $_SESSION["uye_kadi"] . "<br />";
	echo $_SESSION["uye_sifre"] . "<br />";
	echo $_SESSION["uye_eposta"] . "<br />";
	echo $_SESSION["uye_onay"] . "<br />";

	echo '<hr><strong>Profil</strong><br />';
	ukas_profil("test1");
*/	
	/*
		ukas_profil e get ekleyerek urlden çekebilirsiniz.
	*/
/*
	echo $ukas_profil_id . "<br />";
	echo $ukas_profil_adsoyad . "<br />";
	echo $ukas_profil_kadi . "<br />";
	echo $ukas_profil_eposta . "<br />"; */
?>
<?php 

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
<!DOCTYPE html>
<html>
<head>
	<style>
		.ifram
		{
	width: 100%;
	height:100%;
		
}
	
	</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8" />
    <title>Excel</title>
</head>
<body>

<!--style="border:1px solid #fffff-->
	<div class="ifram">
<iframe width="100%" height="100%" frameborder="0" scrolling="no" src="https://sheet.zohopublic.eu/sheet/published/7xzve925e1944c7ad43cab5cf301e3f35b48e?mode=embed"></iframe>
    </div>
	<!--<iframe src="https://docs.google.com/spreadsheets/d/1lEbLXMAE3jfegGpoMbN_EALCcS8C6A1HavNayHLiQcY/edit?usp=sharing" width="402" height="346px;" frameborder="0" ></iframe>
    <hr>
    <iframe width="402" height="346" frameborder="0" scrolling="no" src="https://onedrive.live.com/embed?resid=18B4127D28E9C97B%2174048&authkey=%21AIFhtgpu0sT2EoM&em=2&wdAllowInteractivity=False&wdHideGridlines=True&wdHideHeaders=True&wdDownloadButton=True&wdInConfigurator=True"></iframe>-->
</body>
</html>