<?php 
require "baglan.php";
require "session.php";

if (isset($_POST['kayit_ol']))
{
    $username1 = trim(htmlspecialchars($_POST['username1']));
    $password1 = trim(htmlspecialchars($_POST['password1']));

    $kaydet = $db->prepare("INSERT INTO kayitveri (kullanici_name, kullanici_sifre) VALUES (?, ?)");
    $kaydet->bindParam(1, $username1);
    $kaydet->bindParam(2, $password1);
    $kaydet->execute();

    echo '
        <div id="successmessage" align="center">
            <font style="margin-top:15%; color:green; font-size:22px; font-family: helvetica;">Başarıyla kayıt olundu!</font>
        </div>
    ';
    
    header("Refresh: 3; url=index.html");
} else{
    echo '
        <div id="warning" align="center">
            <font style="margin-top:15%; color:red; font-size:22px; font-family: helvetica;">Kayıt olun!</font>
        </div>
    ';

    header("Refresh: 3; url=index.php");

}

?>