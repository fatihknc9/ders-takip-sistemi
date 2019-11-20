<?php 
require "program.php";
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ders programı</title>
    <link href="style/style-1.css" rel="stylesheet">
    <link href="style/menu-1.css" rel="stylesheet">
    <link href="style/guncelle.css" rel="stylesheet">
</head>
<body>

    <div class="header">
        <hr>
        <h2 align="center">Ders takip sistemi - Ders programı</h2>
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



    
    <div class="tablo" align="center">
        <form action="program.php" method="post">
            <table cellpadding="5" cellspacing="5">
                <tr id="gunler">

                    <td>Pazartesi</td>
                    <td>Salı</td>
                    <td>Çarşamba</td>
                    <td>Perşembe</td>
                    <td>Cuma</td>

                </tr>

                <tr>
                    <td><label id="pzt"><?php echo $sonuc[1];?></label></td>
                    <td><label id="sali"><?php echo $sonuc1[1];?></label></td>
                    <td><label id="crs"><?php echo $sonuc2[1];?></label></td>
                    <td><label id="prs"><?php echo $sonuc3[1];?></label></td>
                    <td><label id="cuma"><?php echo $sonuc4[1];?></label></td>
                    
                </tr>

                <tr>
                        <td><label id="pzt"><?php echo $sonuc[2];?></label></td>
                        <td><label id="sali"><?php echo $sonuc1[2];?></label></td>
                        <td><label id="crs"><?php echo $sonuc2[2];?></label></td>
                        <td><label id="prs"><?php echo $sonuc3[2];?></label></td>
                        <td><label id="cuma"><?php echo $sonuc4[2];?></label></td>
                       
                </tr>

                <tr>
                        <td><label id="pzt"><?php echo $sonuc[3];?></label></td>
                        <td><label id="sali"><?php echo $sonuc1[3];?></label></td>
                        <td><label id="crs"><?php echo $sonuc2[3];?></label></td>
                        <td><label id="prs"><?php echo $sonuc3[3];?></label></td>
                        <td><label id="cuma"><?php echo $sonuc4[3];?></label></td>
                        
                </tr>

                <tr>
                        <td><label id="pzt"><?php echo $sonuc[4];?></label></td>
                        <td><label id="sali"><?php echo $sonuc1[4];?></label></td>
                        <td><label id="crs"><?php echo $sonuc2[4];?></label></td>
                        <td><label id="prs"><?php echo $sonuc3[4];?></label></td>
                        <td><label id="cuma"><?php echo $sonuc4[4];?></label></td>
                      
                </tr>
                

                
                <tr>
                        <td><label id="pzt"><?php echo $sonuc[5];?></label></td>
                        <td><label id="sali"><?php echo $sonuc1[5];?></label></td>
                        <td><label id="crs"><?php echo $sonuc2[5];?></label></td>
                        <td><label id="prs"><?php echo $sonuc3[5];?></label></td>
                        <td><label id="cuma"><?php echo $sonuc4[5];?></label></td>
                    
                </tr>
                <tr>
                        <td><label id="pzt"><?php echo $sonuc[6];?></label></td>
                        <td><label id="sali"><?php echo $sonuc1[6];?></label></td>
                        <td><label id="crs"><?php echo $sonuc2[6];?></label></td>
                        <td><label id="prs"><?php echo $sonuc3[6];?></label></td>
                        <td><label id="cuma"><?php echo $sonuc4[6];?></label></td>
                    
                </tr>
                <tr>
                        <td><label id="pzt"><?php echo $sonuc[7];?></label></td>
                        <td><label id="sali"><?php echo $sonuc1[7];?></label></td>
                        <td><label id="crs"><?php echo $sonuc2[7];?></label></td>
                        <td><label id="prs"><?php echo $sonuc3[7];?></label></td>
                        <td><label id="cuma"><?php echo $sonuc4[7];?></label></td>
                    
                </tr>
                <tr>
                        <td><label id="pzt"><?php echo $sonuc[8];?></label></td>
                        <td><label id="sali"><?php echo $sonuc1[8];?></label></td>
                        <td><label id="crs"><?php echo $sonuc2[8];?></label></td>
                        <td><label id="prs"><?php echo $sonuc3[8];?></label></td>
                        <td><label id="cuma"><?php echo $sonuc4[8];?></label></td>
                    
                </tr>

                
            </table>
        </form>

    </div>


    <footer>
        <br>
         <font>&copy; Development by Fatih</font>
        
    </footer>
    
</body>
</html>