<?php 

require "baglan1.php";

//id's
$pzt_id = 1;
$sali_id = 2;
$crs_id = 3;
$prs_id = 4;
$cuma_id = 5;


//pzt
$pzt_cek = $db->prepare("SELECT * FROM gunler WHERE veri_id = ?");
$pzt_cek->bindParam(1, $pzt_id);
$pzt_cek->execute();

$sonuc = $pzt_cek->fetch();



//sali

$sali_cek = $db->prepare("SELECT * FROM gunler WHERE veri_id = ?");
$sali_cek->bindParam(1, $sali_id);
$sali_cek->execute();

$sonuc1 = $sali_cek->fetch();





//carsamba


$crs_cek = $db->prepare("SELECT * FROM gunler WHERE veri_id = ?");
$crs_cek->bindParam(1, $crs_id);
$crs_cek->execute();

$sonuc2 = $crs_cek->fetch();



//persembe

$prs_cek = $db->prepare("SELECT * FROM gunler WHERE veri_id = ?");
$prs_cek->bindParam(1, $prs_id);
$prs_cek->execute();

$sonuc3 = $prs_cek->fetch();




//cuma

$cuma_cek = $db->prepare("SELECT * FROM gunler WHERE veri_id = ?");
$cuma_cek->bindParam(1, $cuma_id);
$cuma_cek->execute();

$sonuc4 = $cuma_cek->fetch();



?>