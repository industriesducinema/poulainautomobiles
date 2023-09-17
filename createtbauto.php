<?php
    $serveur = "localhost";
    $dbname = "bdautos";
    $user = "root";
    $pass = "";
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On crée une table form
        $autoform = "CREATE TABLE autoform(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(100),
            prenom VARCHAR(100),
            telephone VARCHAR(50),
            message TEXT,
            ville VARCHAR (100),
            codepostal VARCHAR (100),
            departement TEXT)";
        $dbco->exec($form);
    }
    catch(PDOException $e){
        echo 'Erreur : '.$e->getMessage();
    }
?>