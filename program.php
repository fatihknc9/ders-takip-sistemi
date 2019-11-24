<?php 

require "baglan.php";

//pzt
$pzt_cek = $db->prepare("SELECT * FROM gunler WHERE veri_id = 1");
$pzt_cek->execute();

$sonuc = $pzt_cek->fetch();



//sali
$sali_cek = $db->prepare("SELECT * FROM gunler WHERE veri_id = 2");
$sali_cek->execute();

$sonuc1 = $sali_cek->fetch();




//carsamba
$crs_cek = $db->prepare("SELECT * FROM gunler WHERE veri_id = 3");
$crs_cek->execute();

$sonuc2 = $crs_cek->fetch();



//persembe
$prs_cek = $db->prepare("SELECT * FROM gunler WHERE veri_id = 4");
$prs_cek->execute();

$sonuc3 = $prs_cek->fetch();




//cuma
$cuma_cek = $db->prepare("SELECT * FROM gunler WHERE veri_id = 5");
$cuma_cek->execute();

$sonuc4 = $cuma_cek->fetch();



?>