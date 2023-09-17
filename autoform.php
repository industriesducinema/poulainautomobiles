

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/tab6.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="javascript"></script>
<link type="text/css" rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/redmond/jquery-ui.css">
<script src="/cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

    <title>Passez une Annonce</title>
</head>
<body>
<script>
        $(function() {
                $( "#datepicker" ).datepicker();
          });
      </script>
   <div class="container">
    <a href="index.php" class="close">
                      <header>
                        <div class="logo-with-bg">
                            <a href="index.php"><span>Poulain Automobiles</span></a></div>
                                </header> 
<form action="renvois3.php" method="post">
        <div id="main-wrapper">
          <div id="form-wrapper">
            <fieldset>
              <table>
                <div id="personal-info">
                  <tr>
                    <td colspan="2">
                      <p>Informations personnelles<br></p>
                      <input name="prenom"  type="text" id="prenom"  aria-required="true" required placeholder="Entrez votre Prenom"  size="20" />
      
                      <input name="nom" type="text" id="nom" aria-required="true"  required placeholder="Enter votre nom" size="20" /></tr>
                  </td>
                  <tr>
                    <td colspan="2">
                      <input name="telephone" type="text" id="telephone"   aria-required="true" required placeholder="entrez votre télephone" size="20" /></tr>
                  </td>
                  <tr>
                    <td colspan="2">
                      <input name="message" type="text" id="message"  aria-required="true"   required placeholder="Tapez votre message" size="100" />
                      <input name="departement" type="text" id="departement"  required placeholder="Entrez votre departement" size="20" onfocus="geolocate()" />
                        <input name="ville" id="ville" type="text"  required placeholder="entrez votre ville" size="30" onfocus="geolocate()"/>
                      <input name="codepostal" type="text" id="codepostal"  required  placeholder="Entrez votre code postal" size="20" onfocus="geolocate()" /></tr>
                    </tr>
                </td>
          </fieldset>
        </table>
      </div>
    <input type="Submit"><input type="Reset">
      </form>
        </div>

        <footer>
                    <p>Copyright &copy; 2023 Olivier Poulain Designer Web Developpeur Droits réservés  o.poulain@outlook.com</p>
                        </footer>
</div>
</body>
</html>
