<?php
include ("vt.php");
session_start();
$kullaniciadi = $_POST['kadi'];
$sifre = $_POST['sifre'];
if($kullaniciadi == "" || $sifre == "") {

echo "Lütfen Boş Alan Bırakmayınız!";

} else {
$sor = $connect->query("SELECT * FROM uyeler where kadi ='$kullaniciadi' and sifre='$sifre'");


if($kullaniciadi == "") { 

echo "Giriş Başarısız!";

} else { 



echo "<script>location.href='profile.php';</script>";

}}


?>