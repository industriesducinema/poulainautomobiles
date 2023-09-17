<?php
$serveur = "localhost";
    $dbname = "bdautos";
    $user = "root";
    $pass = "";
    
    $marque = 'marque';
    $modele = 'modele';
    $couleur = 'couleur';
    $usermail = 'usermail';
    $prix = 'prix';
    
    //$marque = $_POST["marque"];
    //$modele = $_POST["modele"];
    //$prix = $_POST["prix"];
    //$couleur = $_POST["couleur"];
    //$usermail = $_POST["usermail"];
    

  
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
        INSERT INTO `contacts`(`id`, `marque`, `modele`, `prix`, `couleur`, `usermail`) 
        VALUES (NULL, :marque, :modele, :prix, :couleur, :usermail)");
        $sth->bindParam(':marque',$marque);
        $sth->bindParam(':modele',$modele);
        $sth->bindParam(':prix',$prix);
        $sth->bindParam(':couleur',$couleur);
        $sth->bindParam(':usermail',$usermail);
        
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
        header("Location:remerciment.php");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/annonces.css">
    <title>Passez votre annonce</title>
</head>
<body>
<div class="container" title="Revenir à la page d'acceuil">
      <a href="index.php" class="close">
       
                    <br><br>
                      <header>
                        <div class="logo-with-bg">
                            <a href="index.php"><span>Poulain Automobiles</span></a></div>
                                </header> 
    <div class="globcontent-home">
        <div class="content-home">
        <div class="sscontent-home">
        <div class="main-home">
        <section>
        <div class="mx-auto max-w-screen-xl py-12 flex items-start justify-start overflow-visible auto:flex-col">
        <!-- media > 767px -->
        <div class="neuf/3 autow-full sticky auto:hidden auto:static top-116px pl-12">
        <h2 class="text-3xl md:text-auto font-semibold :bg-blue">
        Poulain Automobiles 
        </h2>

        <h3 class="text-sm text-grey-600 mt-12 max-w-60 font-medium">
        Recherche une auto !
        </h3>
        <p class="text-xs text-grey-300 mt-2 max-w-60">
        Chez nous, la qualité est primoriale
        </p>
        <h3 class="text-sm text-grey-600 mt-10 max-w-60 font-medium">
        des offres de reprise
        </h3>
        <p class="text-xs  text-grey-300 mt-2 max-w-60">
       Trouver des pièces détachées
        </p>
        <h3 class="text-sm text-grey-600 mt-10 max-w-60 font-medium">
        Un modele sport
        </h3>
        <p class="text-xs text-grey-300 mt-2 max-w-60">
        Dernieres versions
        </p>
        </div>
        <div class="w-2/3 auto:w-full pb-8 grid grid-cols-2 auto-rows-96 justify-between md:grid-cols-1 md:justify-initial md:rowgap-8 md:auto-rows-auto">
        <div class="shadow-xl hover:shadow-2xl h-76 w-84-white group justify-self-center">
        </div>
        </div>
        <div class="flex items-center">
            <a href="/depose-annonce-gratuite/" 
            class="flex h-15 mt-10 px-6 text-white bg-blue flex items-center text-center cursor-pointer hover:bg-blue-dark hover:text-white hover:no-underline duration-300 max-content">
            <img class="autos-2" src="images_image/logo_image.png" alt="icone pour déposer une annonce gratuite">
            </a>
        </div>
        <div class="flex items-center">
        <div class="cursor-pointer" onclick="document.location.href='Autos'">
        <p class="text-sm line-clamp-5">Trouvez ce qu'il vous faut</p>
        <div class="flex items-end justify-between">
        <div class="text-xs text-grey-300 flex flex-wrap gap-3">
        <a href="autopost.php" class="text-grey-600 py-1 px-1 border-1 border-grey-75 rounded-auto hover:border-black">Postez votre annonce
        
        <?php 
                                                    echo '<form method="POST" action="autopost.php">
                                                        <input type="submit"/>
                                                            </form>';
                                                                ?>                          

        </a>
        <a href="www.poulainautomobiles.fr" class="text-grey-600 py-1 px-1 border-1 border-grey-75 rounded-auto hover:border-black">Trouver une Location</a>
        <a href="www.poulainautomobiles.fr" class="text-grey-600 py-1 px-1 border-1 border-grey-75 rounded-auto hover:border-black">Vehicule neuf</a>
        <a href="www.poulainautomobiles.fr" class="text-grey-600 py-1 px-1 border-1 border-grey-75 rounded-auto hover:border-black">Hybride</a>
        <a href="www.poulainautomobiles.fr" class="text-grey-600 py-1 px-1 border-1 border-grey-75 rounded-auto hover:border-black">Electrique</a>
        </div>
            </div>
                </div>
                    </div>
                        </div>
                            </section>
                                </div>
                                    </div>
                                        </div>
                                            </div>
                                            <footer>
                    <p>Copyright &copy; 2023 Olivier Poulain Designer Web Developpeur Droits réservés  o.poulain@outlook.com</p>
                        </footer>                                      
</body>
</html>