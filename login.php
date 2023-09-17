<?php
    $serveur = "localhost";
    $dbname = "poulain_wp262";
    $user = "root";
    $pass = "";
    
    $marque = 'marque';
    $modele = 'modele';
    $couleur = 'couleur';
    $usermail = 'usermail';
    $prix = 'prix';
    
    $marque = $_POST["marque"];
    $modele = $_POST["modele"];
    $prix = $_POST["prix"];
    $couleur = $_POST["couleur"];
    $usermail = $_POST["usermail"];
    

  
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
        INSERT INTO `automobiles`(`id`, `marque`, `modele`, `prix`, `couleur`, `usermail`) 
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



//require('configuration/config.php');
session_start();
if (isset($_POST['firstname'])){
  $firstname = stripslashes($_REQUEST['firstname']);
  $firstname = mysqli_real_escape_string($conn, $firstname);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `automobiles` WHERE firstname='$firstname' and password='".hash('123456', $password)."'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['firstname'] = $firstname;
      header("Location: index.php");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css" />
  <style>
body {
  background: white;
}
.box {
  border: 1px solid #c4c4c4;
  padding: 30px 25px 10px 25px;
  background: #a8f3f8;
  margin: 30px auto;
  width: 360px;
}
h1.box-logo a {
  text-decoration:none;
}
h1.box-title {
  color: #AEAEAE;
  background: #f8f8f8;
  font-weight: 300;
  padding: 15px 25px;
  line-height: 30px;
  font-size: 25px;
  text-align:center;
  margin: -27px -26px 26px;
  font-family: Montserrat;
}
.box-button {
  border-radius: 5px;
  background: #d2483c;
  text-align: center;
  cursor: pointer;
  font-size: 19px;
  width: 100%;
  height: 51px;
  padding: 0;
  color: #fff;
  border: 0;
  outline:0;
}
.box-register
{
  text-align:center;
  margin-bottom:0px;
}
.box-register a
{
  text-decoration:none;
  font-size:12px;
  color:#666;
}
.box-input {
  font-size: 14px;
  background: #fff;
  border: 1px solid #ddd;
  margin-bottom: 25px;
  padding-left:10px;
  border-radius: 5px;
  width: 347px;
  height: 50px;
}
.box-input:focus {
    outline: none;
    border-color:#a8f3f8;
}
.sucess{
  text-align: center;
  color: white;
}
.sucess a {
  text-decoration: none;
  color: #58aef7;
}
p.errorMessage {
    background-color: red;
    border: #AA4502 1px solid;
    padding: 5px 10px;
    color: #FFFFFF;
    border-radius: 3px;
}

.close {
    position: absolute;
    right: 32px;
    top: 32px;
    width: 32px;
    height: 32px;
    opacity: 0.3;
  }
  .close:hover {
    opacity: 1;
  }
  .close:before, .close:after {
    position: absolute;
    left: 15px;
    content: ' ';
    height: 33px;
    width: 2px;
    background-color: #333;
  }
  .close:before {
    transform: rotate(45deg);
  }
  .close:after {
    transform: rotate(-45deg);
  }
 

  .center-div
  {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: white;
    font-family: Montserrat, sans-serif;
  }
  
  .back {
    position: relative;
    display: inline-block;
    text-decoration: none;
    padding: 10px 10px 10px 40px;
  }
  
  .back h5 {
    color: #4A4F6A;
    font-size : 2rem;
    transform: translateY(8px);
    transition: transform 500ms 0s cubic-bezier(0.2, 0, 0, 1);
  }
  
  .back span {
    opacity: 0;
    color: #858BA9;
    font-size: 12px;
    font-weight: 300;
    display: inline-block;
    transform: translateY(10px);
    transition:
      transform 500ms 0s cubic-bezier(0.2, 0, 0, 1),
      opacity 500ms 0s cubic-bezier(0.2, 0, 0, 1)
  }
  
  .back div {
    top: 11px;
    left: 0;
    content: '';
    width: 30px;
    height: 30px;
    display: block;
    overflow: hidden;
    position: absolute;
    border-radius: 50%;
    transform: scale(1);
    background-color: white;
    transition: transform 400ms 0s cubic-bezier(0.2, 0, 0, 1.6);
  }
  
  .back div::after {
    top: 0;
    left: 0;
    content: '';
    width: 60px;
    height: 30px;
    position: absolute;
    background-position: 0 0;
    background-image: url('');
    transition: transform 400ms 0s cubic-bezier(0.2, 0, 0, 1);
  }
  
  .back:hover h4 {
    color: #171922;
  }
  
  .back:hover h4,
  .back:hover span {
    opacity: 1;
    transform: translateY(0);
  }
  
  .back:hover div {
    transform: scale(1.1);
    background-color: white;
    box-shadow:
      0 2px 10px 0 rgba(185,182,198,0.00),
      0 1px 3px 0 rgba(175,172,189,0.25);
  }
  
  .back:hover div::after {
    transform: translateX(-30px);
  }

  </style>
</head>
<body>

<div class="container1" title="Revenir à la page d'acceuil">
<a href="index17.php" class="close">
    </a>
</div>
                    <header>
                      <div class="logo-with-bg">
                         <span>Poulain Automobiles</span></a></div>
                              </header>
<form class="box" action="" method="post" name="login">
<h1 class="box-logo box-title">
    <a href="index.php">Poulain Automobiles</a></h1>
        <h1 class="box-title">Connexion</h1>
            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
                <input type="password" class="box-input" name="password" placeholder="Mot de passe">
                    <input type="submit" value="Connexion " name="submit" class="box-button">
                        <p class="box-register">Vous êtes nouveau ici? 
                            <a href="registrer.php">S'inscrire</a></p>
                                <?php if (! empty($message)) { ?>
                                    <p class="errorMessage">
                                        <?php echo $message; ?></p>
                                            <?php } ?>
                                                </form>
                                                    </body>
                                                        </html>