<?php session_start();?>
<?php if(!empty($_SESSION['oturum'])){?>
<?php require "header.php"; ?>
    <div class="guncelleme">
        
        <form action="guncelle-1.php" method="post">
            
            <table>
                <tr>
                    <td>Pazartesi</td>
                    <td>Salı</td>
                    <td>Çarşamba</td>
                    <td>Perşembe</td>
                    <td>Cuma</td>
                </tr>

                <tr>
                    <td><input type="text" maxlenght="20" name="pzt-1"></td>
                    <td><input type="text" maxlenght="20" name="sali-1"></td>
                    <td><input type="text" maxlenght="20" name="crs-1"></td>
                    <td><input type="text" maxlenght="20" name="prs-1"></td>
                    <td><input type="text" maxlenght="20" name="cuma-1"></td>
                </tr>

                <tr>
                    <td><input type="text" maxlenght="20" name="pzt-2"></td>
                    <td><input type="text" maxlenght="20" name="sali-2"></td>
                    <td><input type="text" maxlenght="20" name="crs-2"></td>
                    <td><input type="text" maxlenght="20" name="prs-2"></td>
                    <td><input type="text" maxlenght="20" name="cuma-2"></td>
                </tr>

                <tr>
                    <td><input type="text" maxlenght="20" name="pzt-3"></td>
                    <td><input type="text" maxlenght="20" name="sali-3"></td>
                    <td><input type="text" maxlenght="20" name="crs-3"></td>
                    <td><input type="text" maxlenght="20" name="prs-3"></td>
                    <td><input type="text" maxlenght="20" name="cuma-3"></td>
                </tr>

                <tr>
                    <td><input type="text" maxlenght="20" name="pzt-4"></td>
                    <td><input type="text" maxlenght="20" name="sali-4"></td>
                    <td><input type="text" maxlenght="20" name="crs-4"></td>
                    <td><input type="text" maxlenght="20" name="prs-4"></td>
                    <td><input type="text" maxlenght="20" name="cuma-4"></td>
                </tr>
                <tr>
                    <td><input type="text" maxlenght="20" name="pzt-5"></td>
                    <td><input type="text" maxlenght="20" name="sali-5"></td>
                    <td><input type="text" maxlenght="20" name="crs-5"></td>
                    <td><input type="text" maxlenght="20" name="prs-5"></td>
                    <td><input type="text" maxlenght="20" name="cuma-5"></td>
                </tr>
    
                <tr>
                    <td><input type="text" maxlenght="20" name="pzt-6"></td>
                    <td><input type="text" maxlenght="20" name="sali-6"></td>
                    <td><input type="text" maxlenght="20" name="crs-6"></td>
                    <td><input type="text" maxlenght="20" name="prs-6"></td>
                    <td><input type="text" maxlenght="20" name="cuma-6"></td>
                </tr>
    
                <tr>
                    <td><input type="text" maxlenght="20" name="pzt-7"></td>
                    <td><input type="text" maxlenght="20" name="sali-7"></td>
                    <td><input type="text" maxlenght="20" name="crs-7"></td>
                    <td><input type="text" maxlenght="20" name="prs-7"></td>
                    <td><input type="text" maxlenght="20" name="cuma-7"></td>
                </tr>
    
                <tr>
                    <td><input type="text" maxlenght="20" name="pzt-8"></td>
                    <td><input type="text" maxlenght="20" name="sali-8"></td>
                    <td><input type="text" maxlenght="20" name="crs-8"></td>
                    <td><input type="text" maxlenght="20" name="prs-8"></td>
                    <td><input type="text" maxlenght="20" name="cuma-8"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="pzt_update">Pazartesi için güncelle</button></td>
                    <td><button type="submit" name="sali_update">Salı için güncelle</button></td>
                    <td><button type="submit" name="crs_update">Çarşamba için güncelle</button></td>
                    <td><button type="submit" name="prs_update">Perşembe için güncelle</button></td>
                    <td><button type="submit" name="cuma_update">Cuma için güncelle</button></td>

                </tr>
            </table>

            <button id="full-update" type="submit" name="full_update">Hepsi için güncelle</button>

        </form>
    </div>
    <footer>
        <br>
         <font>&copy; Development by Fatih</font>
        
    </footer>
    

</body>
</html>
<?php }else{?>
<?php include "giris-yapilmadi.html"; }?>


