
        <?php
$serveur = "localhost";
$dbname = "bdautos";
$user = "root";
$pass = "";
            
            try{
                $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "CREATE TABLE autopost
                (
                    id INT PRIMARY KEY NOT NULL,
                    nom VARCHAR(100),
                    prenom VARCHAR(100),
                    email VARCHAR(255),
                    date_naissance DATE,
                    pays VARCHAR(255),
                    ville VARCHAR(255),
                    code_postal VARCHAR(5),
                    nombre_achat INT
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