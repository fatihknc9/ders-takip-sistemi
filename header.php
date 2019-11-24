<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ders takip sistemi</title>
    <link href="style/menu-1.css" rel="stylesheet">
    <link href="style/guncelle.css" rel="stylesheet">

</head>
<body>
    
    <div class="menuler">

        <ul>
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="guncelle.php">Güncelle</a></li>
            <li><a href="hakkinda.php">Hakkında</a></li>
        </ul>
        
        
        <?php if(!empty($_SESSION['oturum'])){?>
            <form method="post" action="cikis-icin.php">
                <button id="button-cikis">Çıkış yap</button>
            </form>
        <?php } ?>
        
            
    </div>
    
