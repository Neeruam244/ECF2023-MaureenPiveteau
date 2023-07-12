<?php

try{
    $pdo = new PDO('mysql:localhost;port=3307;dbname=ecf2023_garage', 'root', ''); 
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT
}
catch (Exception $e)
{
    die("erreur : " .$e->getMessage());
}

?>