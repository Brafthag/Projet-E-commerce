<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $connextion =  new PDO("mysql:host = $servername;dbname=projet-commerce5",$username,$password);
        $connextion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
    catch(PDOException $e){
        echo "Erreur de connexion".$e->getMessage();
    }
?>