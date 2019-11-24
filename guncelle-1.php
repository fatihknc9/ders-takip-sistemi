<?php 

require "baglan.php";

if (isset($_POST['pzt_update']))
{
    $pzt_id = trim(htmlspecialchars(1));
    $pzt_1 = trim(htmlspecialchars($_POST['pzt-1']));
    $pzt_2 = trim(htmlspecialchars($_POST['pzt-2']));
    $pzt_3 = trim(htmlspecialchars($_POST['pzt-3']));
    $pzt_4 = trim(htmlspecialchars($_POST['pzt-4']));
    $pzt_5 = trim(htmlspecialchars($_POST['pzt-5']));
    $pzt_6 = trim(htmlspecialchars($_POST['pzt-6']));
    $pzt_7 = trim(htmlspecialchars($_POST['pzt-7']));
    $pzt_8 = trim(htmlspecialchars($_POST['pzt-8']));
    
    $conn1 = $db->prepare("UPDATE gunler SET ders1 = ?, ders2 = ?, ders3 = ?, ders4 = ?, ders5 = ?, ders6 = ?, ders7 = ?, ders8 = ? WHERE veri_id = '$pzt_id'");
    $conn1->bindParam(1, $pzt_1);
    $conn1->bindParam(2, $pzt_2);
    $conn1->bindParam(3, $pzt_3);
    $conn1->bindParam(4, $pzt_4);
    $conn1->bindParam(5, $pzt_5);
    $conn1->bindParam(6, $pzt_6);
    $conn1->bindParam(7, $pzt_7);
    $conn1->bindParam(8, $pzt_8);
    
    $conn1->execute();
    
    echo "<font align='center' style='margin-top: 5%; font-size: 22px; color: green; font-family: helvetica;'>
    
    Pazartesi günü için güncelleme işlemi başarıyla yapıldı! (3 saniye içinde yönlendirileceksiniz!)

    </font>";

    header("Refresh: 3; url=guncelle.php");
}

elseif (isset($_POST['sali_update'])) 
{
    $sali_id = trim(htmlspecialchars(2));
    $sali_1 = trim(htmlspecialchars($_POST['sali-1']));
    $sali_2 = trim(htmlspecialchars($_POST['sali-2']));
    $sali_3 = trim(htmlspecialchars($_POST['sali-3']));
    $sali_4 = trim(htmlspecialchars($_POST['sali-4']));
    $sali_5 = trim(htmlspecialchars($_POST['sali-5']));
    $sali_6 = trim(htmlspecialchars($_POST['sali-6']));
    $sali_7 = trim(htmlspecialchars($_POST['sali-7']));
    $sali_8 = trim(htmlspecialchars($_POST['sali-8']));
    
    $conn2 = $db->prepare("UPDATE gunler SET ders1 = ?, ders2 = ?, ders3 = ?, ders4 = ?, ders5 = ?, ders6 = ?, ders7 = ?, ders8 = ? WHERE veri_id = '$sali_id'");
    $conn2->bindParam(1, $sali_1);
    $conn2->bindParam(2, $sali_2);
    $conn2->bindParam(3, $sali_3);
    $conn2->bindParam(4, $sali_4);
    $conn2->bindParam(5, $sali_5);
    $conn2->bindParam(6, $sali_6);
    $conn2->bindParam(7, $sali_7);
    $conn2->bindParam(8, $sali_8);
    
    $conn2->execute();
    
    echo "<font align='center' style='margin-top: 5%; font-size: 22px; color: green; font-family: helvetica;'>
    
    Salı günü için güncelleme işlemi başarıyla yapıldı! (3 saniye içinde yönlendirileceksiniz!)

    </font>";

    header("Refresh: 3; url=guncelle.php");
}

elseif(isset($_POST['crs_update']))
{
    $crs_id = trim(htmlspecialchars(3));
    $crs_1 = trim(htmlspecialchars($_POST['crs-1']));
    $crs_2 = trim(htmlspecialchars($_POST['crs-2']));
    $crs_3 = trim(htmlspecialchars($_POST['crs-3']));
    $crs_4 = trim(htmlspecialchars($_POST['crs-4']));
    $crs_5 = trim(htmlspecialchars($_POST['crs-5']));
    $crs_6 = trim(htmlspecialchars($_POST['crs-6']));
    $crs_7 = trim(htmlspecialchars($_POST['crs-7']));
    $crs_8 = trim(htmlspecialchars($_POST['crs-8']));
    
    $conn3 = $db->prepare("UPDATE gunler SET ders1 = ?, ders2 = ?, ders3 = ?, ders4 = ?, ders5 = ?, ders6 = ?, ders7 = ?, ders8 = ? WHERE veri_id = '$crs_id'");
    $conn3->bindParam(1, $crs_1);
    $conn3->bindParam(2, $crs_2);
    $conn3->bindParam(3, $crs_3);
    $conn3->bindParam(4, $crs_4);
    $conn3->bindParam(5, $crs_5);
    $conn3->bindParam(6, $crs_6);
    $conn3->bindParam(7, $crs_7);
    $conn3->bindParam(8, $crs_8);
    
    $conn3->execute();
    
    echo "<font align='center' style='margin-top: 5%; font-size: 22px; color: green; font-family: helvetica;'>
    
    Çarşamba günü için güncelleme işlemi başarıyla yapıldı! (3 saniye içinde yönlendirileceksiniz!)

    </font>";

    header("Refresh: 3; url=guncelle.php");
}

elseif(isset($_POST['prs_update']))
{
    $prs_id = trim(htmlspecialchars(4));
    $prs_1 = trim(htmlspecialchars($_POST['prs-1']));
    $prs_2 = trim(htmlspecialchars($_POST['prs-2']));
    $prs_3 = trim(htmlspecialchars($_POST['prs-3']));
    $prs_4 = trim(htmlspecialchars($_POST['prs-4']));
    $prs_5 = trim(htmlspecialchars($_POST['prs-5']));
    $prs_6 = trim(htmlspecialchars($_POST['prs-6']));
    $prs_7 = trim(htmlspecialchars($_POST['prs-7']));
    $prs_8 = trim(htmlspecialchars($_POST['prs-8']));
    
    $conn4 = $db->prepare("UPDATE gunler SET ders1 = ?, ders2 = ?, ders3 = ?, ders4 = ?, ders5 = ?, ders6 = ?, ders7 = ?, ders8 = ? WHERE gunler_id = '$prs_id'");
    $conn4->bindParam(1, $prs_1);
    $conn4->bindParam(2, $prs_2);
    $conn4->bindParam(3, $prs_3);
    $conn4->bindParam(4, $prs_4);
    $conn4->bindParam(5, $prs_5);
    $conn4->bindParam(6, $prs_6);
    $conn4->bindParam(7, $prs_7);
    $conn4->bindParam(8, $prs_8);
    
    $conn4->execute();
    
    echo "<font align='center' style='margin-top: 5%; font-size: 22px; color: green; font-family: helvetica;'>
    
    Perşembe günü için güncelleme işlemi başarıyla yapıldı! (3 saniye içinde yönlendirileceksiniz!)

    </font>";

    header("Refresh: 3; url=guncelle.php");
}

elseif(isset($_POST['cuma_update']))
{
    $cuma_id = trim(htmlspecialchars(5));
    $cuma_1 = trim(htmlspecialchars($_POST['cuma-1']));
    $cuma_2 = trim(htmlspecialchars($_POST['cuma-2']));
    $cuma_3 = trim(htmlspecialchars($_POST['cuma-3']));
    $cuma_4 = trim(htmlspecialchars($_POST['cuma-4']));
    $cuma_5 = trim(htmlspecialchars($_POST['cuma-5']));
    $cuma_6 = trim(htmlspecialchars($_POST['cuma-6']));
    $cuma_7 = trim(htmlspecialchars($_POST['cuma-7']));
    $cuma_8 = trim(htmlspecialchars($_POST['cuma-8']));
    
    $conn5 = $db->prepare("UPDATE gunler SET ders1 = ?, ders2 = ?, ders3 = ?, ders4 = ?, ders5 = ?, ders6 = ?, ders7 = ?, ders8 = ? WHERE veri_id = '$cuma_id'");
    $conn5->bindParam(1, $cuma_1);
    $conn5->bindParam(2, $cuma_2);
    $conn5->bindParam(3, $cuma_3);
    $conn5->bindParam(4, $cuma_4);
    $conn5->bindParam(5, $cuma_5);
    $conn5->bindParam(6, $cuma_6);
    $conn5->bindParam(7, $cuma_7);
    $conn5->bindParam(8, $cuma_8);
    
    $conn5->execute();
    
    echo "<font align='center' style='margin-top: 5%; font-size: 22px; color: green; font-family: helvetica;'>
    
    Cuma günü için güncelleme işlemi başarıyla yapıldı! (3 saniye içinde yönlendirileceksiniz!)

    </font>";

    header("Refresh: 3; url=guncelle.php");
}

elseif(isset($_POST['full_update']))
{
    $pzt_id = trim(htmlspecialchars(1));
    $pzt_1 = trim(htmlspecialchars($_POST['pzt-1']));
    $pzt_2 = trim(htmlspecialchars($_POST['pzt-2']));
    $pzt_3 = trim(htmlspecialchars($_POST['pzt-3']));
    $pzt_4 = trim(htmlspecialchars($_POST['pzt-4']));
    $pzt_5 = trim(htmlspecialchars($_POST['pzt-5']));
    $pzt_6 = trim(htmlspecialchars($_POST['pzt-6']));
    $pzt_7 = trim(htmlspecialchars($_POST['pzt-7']));
    $pzt_8 = trim(htmlspecialchars($_POST['pzt-8']));

    $sali_id = trim(htmlspecialchars(2));
    $sali_1 = trim(htmlspecialchars($_POST['sali-1']));
    $sali_2 = trim(htmlspecialchars($_POST['sali-2']));
    $sali_3 = trim(htmlspecialchars($_POST['sali-3']));
    $sali_4 = trim(htmlspecialchars($_POST['sali-4']));
    $sali_5 = trim(htmlspecialchars($_POST['sali-5']));
    $sali_6 = trim(htmlspecialchars($_POST['sali-6']));
    $sali_7 = trim(htmlspecialchars($_POST['sali-7']));
    $sali_8 = trim(htmlspecialchars($_POST['sali-8']));

    $crs_id = trim(htmlspecialchars(3));
    $crs_1 = trim(htmlspecialchars($_POST['crs-1']));
    $crs_2 = trim(htmlspecialchars($_POST['crs-2']));
    $crs_3 = trim(htmlspecialchars($_POST['crs-3']));
    $crs_4 = trim(htmlspecialchars($_POST['crs-4']));
    $crs_5 = trim(htmlspecialchars($_POST['crs-5']));
    $crs_6 = trim(htmlspecialchars($_POST['crs-6']));
    $crs_7 = trim(htmlspecialchars($_POST['crs-7']));
    $crs_8 = trim(htmlspecialchars($_POST['crs-8']));

    $prs_id = trim(htmlspecialchars(4));
    $prs_1 = trim(htmlspecialchars($_POST['prs-1']));
    $prs_2 = trim(htmlspecialchars($_POST['prs-2']));
    $prs_3 = trim(htmlspecialchars($_POST['prs-3']));
    $prs_4 = trim(htmlspecialchars($_POST['prs-4']));
    $prs_5 = trim(htmlspecialchars($_POST['prs-5']));
    $prs_6 = trim(htmlspecialchars($_POST['prs-6']));
    $prs_7 = trim(htmlspecialchars($_POST['prs-7']));
    $prs_8 = trim(htmlspecialchars($_POST['prs-8']));


    $cuma_id = trim(htmlspecialchars(5));
    $cuma_1 = trim(htmlspecialchars($_POST['cuma-1']));
    $cuma_2 = trim(htmlspecialchars($_POST['cuma-2']));
    $cuma_3 = trim(htmlspecialchars($_POST['cuma-3']));
    $cuma_4 = trim(htmlspecialchars($_POST['cuma-4']));
    $cuma_5 = trim(htmlspecialchars($_POST['cuma-5']));
    $cuma_6 = trim(htmlspecialchars($_POST['cuma-6']));
    $cuma_7 = trim(htmlspecialchars($_POST['cuma-7']));
    $cuma_8 = trim(htmlspecialchars($_POST['cuma-8']));


    $connect1 = $db->prepare("UPDATE gunler SET ders1 = ?, ders2 = ?, ders3 = ?, ders4 = ?, ders5 = ?, ders6 = ?, ders7 = ?, ders8 = ? WHERE veri_id = '$pzt_id'");
    
    $connect1->bindParam(1, $pzt_1);
    $connect1->bindParam(2, $pzt_2);
    $connect1->bindParam(3, $pzt_3);
    $connect1->bindParam(4, $pzt_4);
    $connect1->bindParam(5, $pzt_5);
    $connect1->bindParam(6, $pzt_6);
    $connect1->bindParam(7, $pzt_7);
    $connect1->bindParam(8, $pzt_8);
    
    
    $connect2 = $db->prepare("UPDATE gunler SET ders1 = ?, ders2 = ?, ders3 = ?, ders4 = ?, ders5 = ?, ders6 = ?, ders7 = ?, ders8 = ? WHERE veri_id = '$sali_id'");
    
    $connect2->bindParam(1, $sali_1);
    $connect2->bindParam(2, $sali_2);
    $connect2->bindParam(3, $sali_3);
    $connect2->bindParam(4, $sali_4);
    $connect2->bindParam(5, $sali_5);
    $connect2->bindParam(6, $sali_6);
    $connect2->bindParam(7, $sali_7);
    $connect2->bindParam(8, $sali_8);
    
    
    $connect3 = $db->prepare("UPDATE gunler SET ders1 = ?, ders2 = ?, ders3 = ?, ders4 = ?, ders5 = ?, ders6 = ?, ders7 = ?, ders8 = ? WHERE veri_id = '$crs_id'");
    
    $connect3->bindParam(1, $crs_1);
    $connect3->bindParam(2, $crs_2);
    $connect3->bindParam(3, $crs_3);
    $connect3->bindParam(4, $crs_4);
    $connect3->bindParam(5, $crs_5);
    $connect3->bindParam(6, $crs_6);
    $connect3->bindParam(7, $crs_7);
    $connect3->bindParam(8, $crs_8);
    
    $connect4 = $db->prepare("UPDATE gunler SET ders1 = ?, ders2 = ?, ders3 = ?, ders4 = ?, ders5 = ?, ders6 = ?, ders7 = ?, ders8 = ? WHERE veri_id = '$prs_id'");
    
    $connect4->bindParam(1, $prs_1);
    $connect4->bindParam(2, $prs_2);
    $connect4->bindParam(3, $prs_3);
    $connect4->bindParam(4, $prs_4);
    $connect4->bindParam(5, $prs_5);
    $connect4->bindParam(6, $prs_6);
    $connect4->bindParam(7, $prs_7);
    $connect4->bindParam(8, $prs_8);
    
    
    $connect5 = $db->prepare("UPDATE gunler SET ders1 = ?, ders2 = ?, ders3 = ?, ders4 = ?, ders5 = ?, ders6 = ?, ders7 = ?, ders8 = ? WHERE veri_id = '$cuma_id'");
    
    $connect5->bindParam(1, $cuma_1);
    $connect5->bindParam(2, $cuma_2);
    $connect5->bindParam(3, $cuma_3);
    $connect5->bindParam(4, $cuma_4);
    $connect5->bindParam(5, $cuma_5);
    $connect5->bindParam(6, $cuma_6);
    $connect5->bindParam(7, $cuma_7);
    $connect5->bindParam(8, $cuma_8);

    //start update
    $connect1->execute();
    $connect2->execute();
    $connect3->execute();
    $connect4->execute();
    $connect5->execute();


    echo "<font align='center' style='margin-top: 5%; font-size: 22px; color: green; font-family: helvetica;'>
    
        Tüm günler için güncelleme işlemi başarıyla yapıldı! (3 saniye içinde yönlendirileceksiniz!)
    
    </font>";

    header("Refresh: 3; url=guncelle.php");
}


?>