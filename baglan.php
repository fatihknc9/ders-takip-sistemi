<?php 


try{
    $db = new PDO("mysql:host=localhost;dbname=ders_programi","root","");
}catch(PDOException $e){
    die($e->getMessage());
}


?>