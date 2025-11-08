<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=names;charset=utf8mb4', 'names', 'yf8/6Qzu[DL@7y[l', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        
    ]);

}
catch(PDOException $e){
    echo' A problem occured with the database connection... ';
    die();


}