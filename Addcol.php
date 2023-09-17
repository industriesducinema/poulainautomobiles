
<?php
$serveur = "localhost";
$dbname = "bdautos";
$user = "root";
$pass = "";
            
            try{
                $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "ALTER TABLE autopost
                ADD Fonctionnelle VARCHAR(255);
            
                )";
                
                $dbco->exec($sql);
                echo 'Table bien créée !';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>