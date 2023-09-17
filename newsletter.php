
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/newsletter.css">
    <title>News letter Poulain Automobiles</title>
</head>
<body>
    <script>
        $(function() {
                $( "#datepicker" ).datepicker();
          });
      </script>
      <div class="container">
            <header>
                <div class="logo-with-img">
                <a href="index.php" title="Retour à la page d'Acceuil" >
            <img src="image/image (1).png" alt="Poulain Automobiles"></a></div> 
                            </header>
<br><br>
*
<form action="renvois5.php" method="post" class="form">
        <h1>Newsletter S'enregistrer</h1>
           
                <div class="info">
                <p class="field required half">
                    <label for="prenom">Prenom</label>
                        <input type="text" placeholder=""  name="prenom" required  id="prenom" value="prenom"></p>
                    <p class="field required half">
                    <label for="mail">Mail</label>
                        <input type="text" placeholder=""  id="email" name="email" required  value="email" >
                       
                            </p>
                    </div>
                    <p><input type="submit" name="insert" value="Insérer"></p>
            </form>
                                      

                    <p>Copyright &copy; 2023 Olivier Poulain Designer Web Developpeur Droits réservés  o.poulain@outlook.com</p>
                        </footer>
</body>
</html>