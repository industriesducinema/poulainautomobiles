<!DOCTYPE html>
<html>
    <head>
        <title>UsersName</title>
        <meta charset="utf-8">
       
    </head>
    <body>
        <h1>UsersName</h1>  
        <?php
            $servname = 'localhost';
            $dbname = 'bdautos';
            $user = 'root';
            $pass = '';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $username = "CREATE TABLE Usersname(
                        Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        Lastname VARCHAR(30) NOT NULL,
                        Firstname VARCHAR(30) NOT NULL,
                        Adresse VARCHAR(70) NOT NULL,
                        Ville VARCHAR(30) NOT NULL,
                        Codepostal INT UNSIGNED NOT NULL,
                        Pays VARCHAR(30) NOT NULL,
                        Mail VARCHAR(50) NOT NULL,
                        DateInscription TIMESTAMP,
                        Marque VARCHAR (30) NOT NULL,
                        Modele VARCHAR (30) NOT NULL,
                        Couleur VARCHAR (30) NOT NULL,
                        UNIQUE(Mail))";
                
                $dbco->exec($sql);
                echo 'Table bien créée !';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>