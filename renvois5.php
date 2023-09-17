<?php
    $serveur = "localhost";
    $dbname = "bdautos";
    $user = "root";
    $pass = "";
    
        //$marque = 'marque';
    $prenom = 'prenom';
    $email = 'email';
 
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
  
  
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("INSERT INTO `newsletter`(`Id`, 'prenom`, 'email`) VALUES (NULL, :prenom, :email)");
        
        $sth->bindParam(':prenom',$prenom);
        $sth->bindParam(':email',$email);
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
        header("Location:remerciment.php");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>