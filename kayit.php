<?php 
require "baglan.php";


$message1 =  '<div align="center"><font style="margin-top:15%; color:green; font-size:22px; font-family: helvetica;">Başarıyla kayıt olundu!</font></div>';
$message2 = '<div align="center"><font style="margin-top:15%; color:red; font-size:22px; font-family: helvetica;">Kullanıcı adı veya şifre boş olmamalı!</font></div>';
$message3 = '<divalign="center"><font style="margin-top:15%; color:red; font-size:22px; font-family: helvetica;">Kayıt olun!</font></div>';


if(isset($_POST['kayit_ol'])){
    if (!empty($_POST['username1'] || !empty($_POST['password1'])))
    {
        $username1 = trim($_POST['username1']);
        $password1 = trim($_POST['password1']);


        $username1_ = filter_input_array(INPUT_POST, $username1);
        $password1_ = filter_input_array(INPUT_POST, $password1);
     
        $kaydet = $db->prepare("INSERT INTO kayitveri (kullanici_name, kullanici_sifre) VALUES (?, ?)");
        $kaydet->bindParam(1, $username1_);
        $kaydet->bindParam(2, $password1_);
        $kaydet->execute();

        session_start();
        ob_start();
        $_SESSION['oturum'] = true;

        echo $message1;

        header("Refresh: 3;url=index.php");

    } else{
        
        echo $message2;

        header("Refresh: 3; url=kayit.html");
    }
}

?>