<?php

//echo "Connected successfully";

// Vérifier la connexion

//require('configuration/config.php');// je lance la requete de connexion via ce fichier
if (isset($_REQUEST['firstname'], $_REQUEST['email'], $_REQUEST['subject'], $_REQUEST['message'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $firstname = stripslashes($_REQUEST['firstname']);
  $firstname = mysqli_real_escape_string($conn, $firstname); 
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  // 
  $subject = stripslashes($_REQUEST['subject']);
  $subject = mysqli_real_escape_string($conn, $subject);
  //recuperer le message
  $message = stripslashes($_REQUEST['message']);
  $message = mysqli_real_escape_string($conn, $subject);
  //requéte SQL + mot de passe crypté
    $query = "INSERT INTO `automobiles`(`id`, `firstname`, `email`, `subject`, `message`)
              VALUES ('$firstname', '$email', $subject', '$message')";
  // Exécuter la requête sur la base de données
  $sql = "SELECT `id`, `firstname`, `email`, `subject`, `message` FROM `contacts`";
  $res = $conn->query($sql);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}else{

    
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
<style>
body {
  background: white;
}

.container1 {
  width: auto;
  display: flexbox;
  height: auto;
  font-family: Montserrat;
  justify-content: space-between;
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

.box {
  border: 1px solid #c4c4c4;
  padding: 30px 25px 10px 25px;
  background: #a8f3f8;
  margin: 30px auto;
  width: 360px;
  font-family: Montserrat;
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
  background: #a8f3f8;
  text-align: center;
  cursor: pointer;
  font-size: 19px;
  width: 100%;
  height: 51px;
  padding: 0;
  color: red;
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
    border-color:#5c7186;
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
    background-color: #e66262;
    border: #AA4502 1px solid;
    padding: 5px 10px;
    color: red;
    border-radius: 3px;
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
                          <a href="index17.php"><span>Poulain Automobiles</span></a></div>
                              </header>
                              
                              <form class="box" action="" method="post">
  <h1 class="box-logo box-title">
    <a href="index17.php">Poulain Automobiles</a></h1>
        <h1 class="box-title">S'inscrire</h1>
            <input type="text" class="box-input" name="firstname" placeholder="Nom d'utilisateur" required />
                <input type="text" class="box-input" name="email" placeholder="Email" required />
                    <input type="text" class="box-input" name="subject" placeholder="Sujet" required />
                    <input type="text" class="box-input" name="message" placeholder="message" required />
                        <input type="submit" name="submit" value="S'inscrire" class="box-button" />
                            <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
                                </form>
                                    <?php }?>                            
</body>
</html>