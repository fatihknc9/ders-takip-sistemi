<?php 
require "baglan.php";
session_start();
ob_start();

$message1 =  '<div align="center"><font style="margin-top:15%; color:green; font-size:22px; font-family: helvetica;">Başarıyla giriş yapıldı!</font></div>';
$message2 = '<div align="center"><font style="margin-top:15%; color:red; font-size:22px; font-family: helvetica;">Kullanıcı adı veya şifre yanlış!</font></div>';

if (isset($_POST['giris_yap']))
{
    $username = trim(htmlspecialchars($_POST['username']));
    $password = trim(htmlspecialchars($_POST['password']));

    $username1 = filter_input_array(INPUT_POST, $username);
    $password1 = filter_input_array(INPUT_POST, $password);

    $kontrol = $db->prepare("SELECT * FROM kayitveri WHERE kullanici_name = ? AND kullanici_sifre = ?");
    $kontrol->execute(array($username1, $password1));
    $cek = $kontrol->fetchColumn();
    
    if ($cek > 0)
    {
        echo $message1;
        
        $_SESSION['oturum'] = true;

        echo "Sayfaya yönlendiriliyorsunuz...";

        header("Refresh: 3; url=index.php");

        
    
    } else{
        echo $message2;

        header("Refresh: 3; url=giris.html");
    }
}

?>