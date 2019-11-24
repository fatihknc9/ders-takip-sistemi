<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ders takip sistemi</title>
    <link href="style/menu-1.css" rel="stylesheet">
    <link href="style/guncelle.css" rel="stylesheet">
    <link href="style/style-1.css" rel="stylesheet">
</head>
<body>
    

    
    
    <div class="header">
        <hr>
        <h2 align="center">Ders takip sistemi</h2>
        <hr>
    </div>

    <div class="menuler">

    <ul>
        <li><a href="index.php">Anasayfa</a></li>
        <li><?php
        
        if(empty($_SESSION['oturum'])){
            ?><a href="giris.html">Giriş&Kayit</a><?php
        } else{
            ?><form action="cikis-icin.php" method="post">
                <button id="index-btncikis">Çıkış yap</button>
            </form>
            <?php
        }

        ?></li>
        <li><a href="guncelle.php">Güncelle</a></li>
        <li><a href="hakkinda.php">Hakkında</a></li>
    </ul>



    </div>
    <div id="hakkinda">
        
            
     <font>Bu sistem ile ders programınızı not edebilirsiniz. Daha sonrasında kontrol edebilirsiniz.</font>
     <br>
     <font id="font1">Öğrencilere kolaylık amacıyla yapılmıştır.</font>
     <br><br>
     <font id="font2">Development by <a href="https://www.instagram.com/the_by.fatih/">thebyfatih</a></font>
        

    </div>



    

</body> 
</html>