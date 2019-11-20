<?php 


try{
    $db = new PDO("mysql:host=localhost;dbname=sistemkayit","root","");
}catch(PDOException $e){
    die($e->getMessage());
}


?>