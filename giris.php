<?php 
require "baglan.php";
session_start();


if (isset($_POST['giris_yap']))
{
    $username = trim(htmlspecialchars($_POST['username']));
    $password = trim(htmlspecialchars($_POST['password']));


    $kontrol = $db->query("SELECT * FROM kayitveri WHERE kullanici_name = '$username' AND kullanici_sifre = '$password'", PDO::FETCH_ASSOC);
    $cek = $kontrol->rowCount();
    if ($cek > 0)
    {
        echo '
        <div id="successmessage" align="center">
            <font style="margin-top:15%; color:green; font-size:22px; font-family: helvetica;">Başarıyla giriş yapıldı!</font>
        </div>
        ';
        
        $_SESSION['oturum'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        echo "Sayfaya yönlendiriliyorsunuz...";

        header("Refresh: 3; url=index.php");

        
    
    } else{
        echo '
        <div id="successmessage" align="center">
            <font style="margin-top:15%; color:red; font-size:22px; font-family: helvetica;">Kullanıcı adı veya şifre yanlış!</font>
        </div>
        
        ';
        header("Refresh: 3; url=giris.html");
    }
} else{

   
}

?>