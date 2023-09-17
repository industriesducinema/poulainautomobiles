

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="javascript"></script>
<link type="text/css" rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/redmond/jquery-ui.css">
<link href="index.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="styles/tab6.css"><!--modifier harmoniser les 2 containers-->
<script src="/cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<title>Liste des marques </title>
<script src='index.js'></script>

    <title>Choisir une pieces détachée</title>
</head>
<body>
    <script>
        $(function() {
                $( "#datepicker" ).datepicker();
          });
      </script>
  <section>
    <div class="container">
      <a href="index.php" class="close">
       
                    <br><br>
                      <header>
                        <div class="logo-with-bg">
                            <a href="index.php"><span>Poulain Automobiles</span></a></div>
                                </header> 
<form action="autopost.php" method="post">
        <div id="main-wrapper" class="container" style="top: auto; left: 22em;" >
          <div class="container"  style="display: inline-block; width: auto; text-align: right; position: relative; align-items: flex-end;">
          <div id="form-wrapper">
            <fieldset>
              <table>
                <div id="personal-info">
                  <tr>
                    <td colspan="2">
                        <h2 style="font-family: Montserrat; text-align: center; font-size: 2em;">Pièces détachées</h2>
                      <p>Information personnelle<br></p>
                      <input name="firstname" type="text" id="firstname" required placeholder="Entrez votre Nom" size="20" />
      
                      <input name="lastname" type="text" id="lastname" required placeholder="Enter votre Prénom" size="20" /></tr>
                  </td>
      
                  <tr>
                    <td colspan="2">
                      <input name="email" type="text" id="email" required placeholder="Entrez votre E-Mail" size="20" />
      
                      <input name="telephone" type="text" id="phone" required placeholder="entrez votre télephone" size="20" /></tr>
                  </td>
                  <tr>
                    <td colspan="2">
                      <input name="message" type="text" id="message" required placeholder="Tapez votre message" size="100" />
      
                      <input name="ville" type="text" id="ville" required placeholder="entrez votre ville" size="20" /></tr>
                </td>
                </div>
                <tr>
                  <td colspan="2">
                    <p>Origine</p>
                    <input name="originaddress" type="text" id="autocomplete" placeholder="Entrez votre departement" size="20" onfocus="geolocate()" />
      
                    <input name="destaddress" type="text" id="autocomplete2" placeholder="Entrez votre code postal" size="20" onfocus="geolocate()" /></tr>
                </td>
                <div id="vehicle" class="info">
                  <div class="flex">
                  <tr>
                    <td colspan="3">
                      <p>Selectionnez votre Auto</p>
                      <select name="année" id="année">
        <option value="" selected="form-year">Année</option>
        <option value="2023">2023</option>
      <option value="2022">2022</option><option value="20121">2021</option>
      <option value="2020">2020</option><option value="2019">2019</option>
      <option value="2018">2018</option><option value="2017">2017</option>
      <option value="2016">2016</option>
      <option value="2015">2015</option><option value="2014">2014</option>
      <option value="2013">2013</option><option value="2012">2012</option>
      <option value="2011">2011</option><option value="2010">2010</option>
      <option value="2009">2009</option><option value="2008">2008</option>
      <option value="2007">2007</option><option value="2006">2006</option>
      <option value="2005">2005</option><option value="2004">2004</option>
      <option value="2003">2003</option><option value="2002">2002</option>
      <option value="2001">2001</option><option value="2000">2000</option>
      <option value="1999">1999</option><option value="1998">1998</option>
      <option value="1997">1997</option><option value="1996">1996</option>
      <option value="1995">1995</option><option value="1994">1994</option>
      <option value="1993">1993</option><option value="1992">1992</option>
      <option value="1991">1991</option><option value="1990">1990</option>
      <option value="1989">1989</option><option value="1988">1988</option>
      <option value="1987">1987</option><option value="1986">1986</option>
      <option value="1985">1985</option><option value="1984">1984</option>
      <option value="1983">1983</option><option value="1982">1982</option>
      <option value="1981">1981</option><option value="1980">1980</option>
      <option value="1979">1979</option><option value="1978">1978</option>
      <option value="1977">1977</option><option value="1976">1976</option>
      <option value="1975">1975</option><option value="1974">1974</option>
      <option value="1973">1973</option><option value="1972">1972</option>
      <option value="1971">1971</option><option value="1970">1970</option>
      <option value="1969">1969</option><option value="1968">1968</option>
      <option value="1967">1967</option><option value="1966">1966</option>
      <option value="1965">1965</option><option value="1964">1964</option>
      <option value="1963">1963</option><option value="1962">1962</option>
      <option value="1961">1961</option><option value="1960">1960</option>
      <option value="1959">1959</option><option value="1958">1958</option>
      <option value="1957">1957</option><option value="1956">1956</option
        ><option value="1955">1955</option><option value="1954">1954</option>
        <option value="1953">1953</option><option value="1952">1952</option>
        <option value="1951">1951</option><option value="1950">1950</option>
        <option value="1949">1949</option><option value="1948">1948</option>
        <option value="1947">1947</option><option value="1946">1946</option>
        <option value="1945">1945</option><option value="1944">1944</option>
        <option value="1943">1943</option><option value="1942">1942</option>
        <option value="1941">1941</option><option value="1940">1940</option>
        <option value="1939">1939</option><option value="1938">1938</option>
        <option value="1937">1937</option><option value="1936">1936</option>
        <option value="1935">1935</option><option value="1934">1934</option>
        <option value="1933">1933</option><option value="1932">1932</option
            ><option value="1931">1931</option><option value="1930">1930</option>
            <option value="1929">1929</option><option value="1928">1928</option>
            <option value="1927">1927</option><option value="1926">1926</option>
            <option value="1925">1925</option><option value="1924">1924</option>
            <option value="1923">1923</option><option value="1922">1922</option>
            <option value="1921">1921</option><option value="1920">1920</option>
            <option value="1919">1919</option><option value="1918">1918</option>
            <option value="1917">1917</option><option value="1916">1916</option>
            <option value="1915">1915</option><option value="1914">1914</option>
            <option value="1913">1913</option><option value="1912">1912</option>
            <option value="1911">1911</option><option value="1910">1910</option>
            <option value="1909">1909</option><option value="1908">1908</option>
            <option value="1907">1907</option><option value="1906">1906</option>
            <option value="1905">1905</option><option value="1904">1904</option>
            <option value="1903">1903</option><option value="1902">1902</option>
            <option value="1901">1901</option></select>
           
            

              <select name="make" id="formmake">
                <option value="" selected="selected">Marque</option></select>
                      <select name="modele" id="formmodele">
                              <option value="" selected="selected">Modele</option></select>
                                    </tr>
                                      </td>
                              <tr>
                        <td colspan="3">
                          <p>Selectionnez le modele, la marque, l'année</p><br>
                          <select name="vehicule" id="condition">
                            <option value="Running" selected="selected">En Marche</option>
                              <option value="In-Operable" selected="">Fonctionnelle</option>
                                </select>
            </div>
            <select name="trailer" id="type">
              <option value="Open" selected="selected">Ouvert</option>
                <option value="Enclosed">Fermé</option>
                  </select>
                        <input type="text" id="datepicker" class="datepicker" value="Date" />
                          <!--ajout de fichiers photos-->
                          <h1></h1>
    <div class="wrapper">
      <div class="box">
        <div class="js--image-preview"></div>
        <div class="upload-options">
          <label>
            <input type="file" class="image-upload" accept="image/*" />
          </label>
        </div>
      </div>
    
      <div class="box">
        <div class="js--image-preview"></div>
        <div class="upload-options">
          <label>
            <input type="file" class="image-upload" accept="image/*" />
          </label>
        </div>
      </div>
    
      <div class="box">
        <div class="js--image-preview"></div>
        <div class="upload-options">
          <label>
            <input type="file" class="image-upload" accept="image/*" />
          </label>
        </div>
      </div>
    </div>      
    <!--fin de la div ajout d'image, image à telecharger-->
        <input type="Submit"><input type="Reset"></div>
      </table>
    </fieldset>
    </div>
    </div>
    </div>
    </form>
              <div class="center-div" style="text-align: right;" >
                  <a href="index17.php" class="back">
                      <div>
                      </div>
                        <h4>Poulain Automobiles</h4>
                          <span>Retour Acceuil</span>
                              </a>
                                  <span></span>      
              </div>        
            </div>
        <footer>
            <p>Copyright &copy; 2023 Olivier Poulain  Droits réservés</p>
        </footer>
    
          <script>
    var cars= new Array();
    // je cree une variable pour nom cars, array les modeles en fonction des marques, un naome Make pour ce variable  avec pour id formmake
    // cette creation de variable est suivi d'une autre variable , modele, formmodele pour definir le choix du modele selon la marque, quelques exemples de marques et modeles
    cars["OTHER"] = new Array("retro");
    cars["Alpine"] = new Array("Pare-Soleil GAUCHE" );
    cars["Alfa Romeo"] = new Array("Joint Lèche-Vitre Extérieur");
    cars["AM General"] = new Array("Transformateur Prise Allume Cigare");
    cars["AMC"] = new Array("Kit De Nettoyage Extérieur");
    cars["Aston Martin"] = new Array("Batterie De Démarrage ");
    cars["Audi"] = new Array("Roue Galette");
    cars["Austin"] = new Array("Coupe","FX3","FX4","Moke");
    cars["Austin Healey"] = new Array("100","3000","Mark I","Mark II","Sprite");
    cars["Bentley"] = new Array("Amage","Arnage","Azure","Brooklands","Continental","Continental Flyi","Continental GT","Continental GTC","Continental R","Eight","GT","Mulsanne","Turbo","Turbo R");
    cars["BMW"] = new Array("1 Series","128","135","2000","2002","2800","3 Series","318","320","323","325","328","330","335","330e xDrive 292 ch Berline"," M340i xDrive 374 ch Berline","5 Series","525","528","530","533","535","540","545","550","530e","540e","545e","M5","M5cs", "I5","6 Series","630","633","635","645","650","7 Series","733","735","740","745","750","760","745e","BMW i7 eDrive50 455 ch","BMW i7 xDrive60 544 ch","BMW i7 M70 xDrive 659 ch","BMW 750e xDrive 489 ch","BMW M760e xDrive 571 ch","BMW 740d xDrive 299 ch","840","850","Alpina","Bavaria","Isetta","L6","L7","M","M3","M5","M6","Motorcycle","X3","X5","X6","Z1","Z3","Z4","Z8");
    cars["Buick"] = new Array("Allure","Apollo","Centurion","Century","Electra","Enclave","Encore","Estate wagon","Gran Sport","Grand National","Invicta","Lacrosse","LeSabre","Lucerne","Park Avenue","Rainier","Reatta","Regal","Rendezvous","Riviera","Roadmaster","Skyhawk","Skylark","Somerset","Somerset Regal","Super","Terraza","Verano","Wildcat");
    cars["Cadillac"] = new Array("Allante","Biarritz","Brougham","Calais","Catera","Cimarron","Concours","Coupe de Ville","CTS","CTS Sport Wagon","CTS-V","CTS-V Wagon","Deluxe","DeVille","DHS","DTS","Eldorado","Escalade","Escalade ESV","Escalade EXT","ETC","Fleetwood","Fleetwood Brough","Sedan de Ville","Seventy-Five","Seville","Sixty Special","SLS","SRX","STS","XLR","XLR-V");
    cars["Checker"] = new Array("Marathon");
    cars["Chevrolet"] = new Array("Alero","Astro","Astro Cargo","Avalanche","Aveo","Aveo 5","Beauville","Bel Air","BelAir","Beretta","Biscayne","Blazer","C/K 10 Series","C/K 1500","C/K 2500","C/K 2500 Series","C/K 3500","C1500","C2500","C3500","Camaro","Caprice","Cavalier","Celebrity","Chevelle","Chevette","Chevy Van","Chevy Van Classi","Cheyenne","Citation","CK-10","Classic","Cobalt","Colorado","Corsica","Corvair","Corvette","Coupe","Cruze","Deluxe","El Camino","Epica","Equinox","Express","Express Cargo","G1500","G2500","HHR","Impala","Impala SS","K1500","K2500","K3500","Kalos","Lacetti","Lumina","Lumina APV","LUV","Malibu","Malibu Maxx","Metro","Monte Carlo","Monza","Nomad","Nova","Optra","Optra 5","Optra Wagon","Prizm","Rezzo","S-10","S-10 Blazer","Silverado 1500","Silverado 1500 S","Silverado 1500HD","Silverado 2500","Silverado 2500HD","Silverado 3500","Sonic","Spark","Spectrum","Sportvan","Sprint","SSR","Styleline","Stylemaster","Suburban","Tacuma","Tahoe","Tahoe Limited/Z7","Tracker","Trailblazer","Trailblazer EXT","Traverse","Uplander","Vega","Venture","Volt","Z24","Z28","Z34");
    cars["Chrysler"] = new Array("200","300","300C","300C SRT-8","300M","Aspen","Cirrus","Concorde","Conquest","Cordoba","Crossfire","Crossfire SRT-6","Daytona","Dynasty","E Class","Fifth Avenue","Grand Voyager","Imperial","Intrepid","Laser","Le Baron","LeBaron","LHS","Neon","New Yorker","Newport","Pacifica","Prowler","PT Cruiser","Royal","Saratoga","Sebring","SRT6","SRT8","Stratus","TC","Town and Country","Vision","Voyager","Windsor");
    cars["Ferrari"] = new Array("SF 50","296 GTB","SF90","XX STRADALE","125","159","166","195","196","208","212","225","246","250","268","286","288","290","308","315","328","330","335","340","348","355","360","365","375","400","410","412","430","456","456M","500","512","550","575","575M","599","612","612 Scaglietti","625","712","735","860","BB512","California","Daytona","Enzo","F333 SP","F355","F360","F40","F430","F50","F550","FF","GTB","GTO","GTS","Mondial","Spider","Superamerica","Testa Rossa");
    cars["Fiat"] = new Array("125","130","131","500","600","Aerostar","Barchetta","Brava/Bravo","Cabriolet","Cinquecento","Croma","Dino","Ducato","Idea","Marea","Multipla","Palio","Panda","Punto","Punto Grande","Ritmo","Scudo","Seicento","Siena","Spider","Spyder","Stilo","Strada","Tempra","Tipo","Ulysse","Ulysse II","Uno","X1/9","X19");
    cars["Ford"] = new Array("Aerostar","Anglia","Aspire","Bronco","Bronco II","C-Max","Capri","Club Wagon","Cobra","Contour","Contour SVT","Cortina","Country Squire","Courier","Crown Victoria","Custom","Cutaway","E-100","E-150","E-250","E-350","Econoline Cargo","Econoline Wagon","Edge","Elite","Escape","Escape Hybrid","Escort","Esprit","Excursion","EXP","Expedition","Explorer","Explorer Sport","Explorer Sport T","F-100","F-150","F-250","F-250 Super Duty","F-350","F-350 Super Duty","F-450","F-550","F-650","F-750","Fairlane","Fairmont","Falcon","Festiva","Fiesta","Five Hundred","Flex","Focus","Focus SVT","Freestar","Freestyle","Fusion","Galaxie","Gran Torino","Granada","Grand Marquis","GT","GT40","Lightning","LTD","Marauder","Maverick","Model A","Model T","Mondeo","Mustang","Mustang SVT Cobr","Pinto","Probe","Puma","Ranchero","Ranger","Scorpio","Shelby","Sierra","Skyliner","Sport Track","Sunliner","T-Bucket","Taurus","Taurus Sho","Taurus X","Tempo","Territory","Thunderbird","Torino","Transit Connect","Tudor","Ute","Windstar","Windstar Cargo");
    cars["Honda"] = new Array("Accord","Civic","Civic CRX","Civic Del Sol","Civic Hybrid","Civic Si","Crosstour","CR-V","CRX","CR-Z","Element","Fit","FCX Clarity","FR-V","HR-V","Insight","Motorcycle","Odyssey","Passport","Pilot","Prelude","Ridgeline","S2000","S600","S800","Stream");
    cars["Hummer"] = new Array("H2","H2 SUT","H3");
    cars["Hyundai"] = new Array("Accent","Azera","Elantra","Entourage","Excel","Genesis","Genesis Coupe","Santa Fe","Scoupe","Sonata","Terracan","Tiburon","Tucson","Veloster","Veracruz","XG300","XG350");
    cars["Jaguar"] = new Array("E-type","F-Type","MK","S-Type","S-Type R","Vanden Plas","X-Type","XF","XJ","XJ-S","XJ-SC","XJ12","XJ40","XJ6","XJ6 Serie 2","XJ6 Serie 3","XJ8","XJ8 Vanden Plas","XJR","XJS","XK","XK8","XKE","XKR","XR8");
    cars["Jeep"] = new Array("Cherokee","CJ","CJ-5","CJ-7","CJ5","CJ7","Comanche","Commander","Compass","Grand Cherokee","Grand Wagoneer","J-10 Pickup","J-20 Pickup","J10 Pickup","J20 Pickup","Liberty","Patriot","Renegade","Sahara","Scrambler","TJ","TJ Unlimited","Wagoneer","Wrangler","Wrangler Unlimited","YJ");
    cars["Jensen"] = new Array("541","C-V8","Early Intercepto","FF","Healey","Interceptor");
    cars["Kia"] = new Array("Amanti","Optima","Forte","Forte Koup","Picanto","Rio","Rondo","Sedona","Sephia","Sorento","Soul","Spectra","Sportage");
    cars["Lamborghini"] = new Array("Revuelto","Urus","LP 8OO-4","Huracan","350 GT","Cheetah","Countach","Diablo","Espada","Gallardo","Islero","Jalpa","Jarama","LM","Miura","Murcielago","Silhouette","Urraco");
    cars["Land Rover"] = new Array("Defender","Discovery","Discovery 3","Discovery II","Evoque","Freelander","LR2","LR3","LR4","Range Rover","Range Rover Sport");
    cars["Lexus"] = new Array("ES 250","ES 300","ES 330","ES 350","GS 300","GS 350","GS 400","GS 430","GS 450h","GX 470","IS 220","IS 250","IS 300","IS 350","LS 400","LS 430","LS 460","LS 600h L","LX 450","LX 470","RX 300","RX 330","RX 350","RX 400h","SC 300","SC 400","SC 430");
    cars["Lincoln"] = new Array("Aviator","Blackwood","Continental","LS","Mark","Mark IV","Mark LT","Mark VI","Mark VII","Mark VIII","MKS","MKT","MKX","MKZ","Navigator","Town Car","Versailles","Zephyr");
    cars["Lotus"] = new Array("Elan","Elise","Elite","Esprit","Europa","Exige","Super 7");
    cars["McLaren"] = new Array("750S","750S SPIDER","ARTURA","765LT SPIDER","765LT","GT","ELVA");
    cars["Maserati"] = new Array("3200 GT","3500 GT","420","430","5000 GT","Biturbo","Bora","Coupe","GrandCabrio","GranSport","GranSport Spyder","GrandTurismo","Khamsin","MC12","Merak","Quattroporte","Shamal","Spyder");
    cars["Maybach"] = new Array("57","62");
    cars["Mazda"] = new Array("2","3","323","5","6","6 Sport Wagon","616","626","929","B2000","B2200","B2300","B2500","B2600","B3000","B4000","Bravo 2600","Cosmo","CX-5","CX-7","CX-9","GLC","Mazda3","Mazda6","Millenia","MPV","MX-3","MX-5 Miata","MX-6","Navajo","Protege","Protege5","RX-3","RX-4","RX-7","RX-8","Tribute","Truck");
    cars["Mercedes-Benz"] = new Array("EQA","EQB","EQE","EQS","EQC","EQE Suv","EQS Suv","190-Class","240-Class","260-Class","280-Class","300-Class","350-Class","400-Class","420-Class","450-Class","500-Class","560-Class","600-Class","A-Class","B-Class","C-Class","C32 AMG","C36 AMG","C43 AMG","C55 AMG","C 63","C 63 S","CL-Class","CL55 AMG","CL65 AMG","CLK-Class","CLK55 AMG","CLS-Class","E-Class","E 53 AMG","E55 AMG","E 63 S AMG","G-Class","GL-Class","GLK-Class","G55 AMG","M-Class","ML55 AMG","R-Class","S-Class","S55 AMG","SL-Class","SL55 AMG","SL65 AMG","SLK-Class","SLK32 AMG","SLK55 AMG","SLR McLaren","SLS-Class","Viano Van");
    cars["Mercury"] = new Array("Bobcat","Capri","Colony Park","Comet","Cougar","Cyclone","Grand Marquis","LN7","Lynx","Marauder","Mariner","Marquis","Meteor","Milan","Monarch","Monclair","Montego","Monterey","Mountaineer","Mystique","Park Lane","Sable","Topaz","Tracer","Turnpike","Villager","Zephyr");
    cars["MG"] = new Array("F","Metro","MGA","MGB","MGC","MGF","MGT","MGTD","Midget","RV8","TA","TB","TC","TD","TF","X80","ZF","ZR","ZS","ZT");
    cars["Mini"] = new Array("3000GT","ClassIC","Clubman","Cooper","Cooper Convertible","Countryman");
    cars["Mitsubishi"] = new Array("3000GT","Challenger","Colt","Conquest","Cordia","Diamante","Eclipse","Eclipse Spyder","Endeavor","Evolution","Expo","Express","Galant","Grandis","L200/Pick Up","L300","L400","Lancer","Lancer Sportback","Mighty Max","Mighty Max Picku","Mirage","Montero","Montero Sport","Outlander","Precis","Raider","Sigma","Starion","Tredia","Truck","Vanwagon");
    cars["Nissan"] = new Array("100NX","200SX","240SX","240Z","260Z","280ZX","300ZX","350Z","370Z","Altima","Armada","Axxess","Cube","Frontier","Gt-R","Juke","King Cab","Leaf","Maxima","Murano","Murano CrossCabriolet","NX","Pathfinder","Patrol","Pickup","Pulsar","Quest","Rogue","Sentra","Stanza","Titan","Van","Versa","X-Trail","Xterra");
    cars["Oldsmobile"] = new Array("442","Achieva","Alero","Aurora","Bravada","Calais","Ciera","Custom Cruiser","Cutlass","Cutlass Calais","Cutlass Ciera","Cutlass Cruiser","Cutlass Salon","Cutlass Sedan","Cutlass Supreme","Delta 88","Eighty-Eight","Firenza","Intrigue","LSS","Ninety-Eight","Omega","Regency","Regency 98","Silhouette","Starfire","Toronado");
    cars["Opel"] = new Array("Agila","Ascona","Astra","Calibra","Campo","Combo","Commodore","Corsa","Frontera","Kadette","Meriva","Monterey","Movano","Omega","Rekord","Senator","Signum","Sintra","Tigra","Vectra","Vectra B","Vectra C","Vivaro","Zafira");
    cars["Packard"] = new Array("120","300","Caribbean","Clipper","Convertible","Eight","Pan American","Patrician","Predictor","Series 250","Series 400","Twelve","Victoria");
    cars["Peugeot"] = new Array("1007","106","107","205","206","306","307","307 SW","309","405","406","407","500 Series","504","505","604","605","607","806","807","Boxer","Expert","J5","Partner","SW8","Wagon");
    cars["Plymouth"] = new Array("Acclaim","Arrow","ARROW Pickup","Barracuda","Belvedere","Breeze","Caravelle","Champ","Colt","Coupe","Duster","Expo","Fury","Grand Fury","Grand Voyager","Horizon","Horizon TC3","Laser","Le Baron","Neon","Prowler","Reliant K","Road Runner","Satellite","Scamp","Sundance","TC3","Trailduster","Turismo","Volare","Voyager","Voyager Wagon");
    cars["Pontiac"] = new Array("1000","2000","6000","Acadian","Astre","Aztek","Bonneville","Catalina","Fiero","Firebird","Firefly","Fleetleader","Formula","G5","G6","G8","Grand Am","Grand Le Mans","Grand Prix","GTO","Le Mans","Montana","Montana SV6","Parisienne","Phoenix","Safari","Solstice","Sunbird","Sunfire","T1000","Tempest","Torrent","Trans Am","Trans Sport","Ventura","Vibe","Wave");
    cars["Porsche"] = new Array("356","550","901","911","911 Turbo","912","914","924","928","930","944","959","968","996","Boxster","718","Carrera","Carrera 911S","Carrera GT","Maycan","Cayenne","Cayman","Panamera","Speedster","Spyder","Taycan","X",);
    cars["Renault"] = new Array("Pack 4 Roues Complèt");
    cars["Rolls-Royce"] = new Array("Corniche","Park Ward","Phantom","Silver Seraph");
    cars["Smart"] = new Array("forfour","fortwo","Roadster");
    cars["Subaru"] = new Array("B9","B9 Tribeca","Baja","Brat","DL","Forester","G3X Justy","GL","GL-10","GLF","Impreza","Impreza WRX STI","Justy","Legacy","Liberty","Loyale","Motorcycle","Outback","Outback Sport","RX","Standard","STi","SVX","WRX","WRX STi","XT","XT6");
    cars["Sunbeam"] = new Array("Tiger");
    cars["Suzuki"] = new Array("Aerio","Esteem","Forenza","Grand Vitara","Motorcycle","Reno","Samurai","Sidekick","Swift","SX4","Verona","Vitara","Wagon","X-90","XL-7");
    cars["Tesla Motors"] = new Array("Système De Chargement Flexible");
    cars["Toyota"] = new Array("4Runner","Avalon","Camry","Celica","Corolla","Corona","Cressida","Echo","FJ Cruiser","Highlander","Land Cruiser","Matrix","MR2","MR2 Spyder","Paseo","Pickup","Previa","Prius","RAV4","Sequoia","Sienna","Solara","Starlet","Supra","T100","Tacoma","Tercel","Tundra","Van","Yaris");
    cars["Triumph"] = new Array("Beetle","GT6","Spitfire","TR-4","TR-5","TR-6","TR4","TR6","TR7","TR8");
    cars["Volkswagen"] = new Array("Beetle","Bus","CC","Cabrio","Cabriolet","Corrado","Dasher","Eos","Eurovan","Fox","Golf","Golf Cabriolet","GTI","Jetta","Jetta Wagon","Karman Ghia","New Beetle","New Beetle Cabri","Passat","Phaeton","Pickup","Quantum","R32","Rabbit","Routan","Scirocco","Thing","Touareg","Touran","Vanagon");
    cars["Volvo"] = new Array("Jante X-Clusive");
   
    jQuery(document).ready(function($){
      
      $('span.text select').change(function(){
        $(this).siblings('.value').text($(this).find('option[value="'+$(this).val()+'"]').text());
      });
      
      for ( make in cars )
      {
        $('#formmake').append('<option value="'+make+'">'+make+'</option>');
      }
      
      $('#formmake').change(function(){
        var val = $(this).val();
        $('#formmodele').html('<option value="">Select Modele</option>');
        for ( i in cars[val] )
        {
          $('#formmodele').append('<option value="'+cars[val][i]+'">'+cars[val][i]+'</option>');
        }
        $('#formmodele').append('<option value="Other">- Other -</option>');
      });
      
      $('#formmake, span.text select').each(function(){
        var def = $(this).siblings('.value').text();
        $(this).find('option[value='+def+']').attr('selected', 'selected');
        $(this).change();
      });
      
    });
    
    function initImageUpload(box) {
              let uploadField = box.querySelector('.image-upload');
            
              uploadField.addEventListener('change', getFile);
            
              function getFile(e){
                let file = e.currentTarget.files[0];
                checkType(file);
              }
              
              function previewImage(file){
                let thumb = box.querySelector('.js--image-preview'),
                    reader = new FileReader();
            
                reader.onload = function() {
                  thumb.style.backgroundImage = 'url(' + reader.result + ')';
                }
                reader.readAsDataURL(file);
                thumb.className += ' js--no-default';
              }
            
              function checkType(file){
                let imageType = /image.*/;
                if (!file.type.match(imageType)) {
                  throw 'Datei ist kein Bild';
                } else if (!file){
                  throw 'Kein Bild gewählt';
                } else {
                  previewImage(file);
                }
              }
              
            }
            
            // initialize box-scope
            var boxes = document.querySelectorAll('.box');
            
            for (let i = 0; i < boxes.length; i++) {
              let box = boxes[i];
              initDropEffect(box);
              initImageUpload(box);
            }
            
            
            
            /// drop-effet
            function initDropEffect(box){
              let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;
              
              // click pour drop effet
              area = box.querySelector('.js--image-preview');
              area.addEventListener('click', fireRipple);
              
              function fireRipple(e){
                area = e.currentTarget
                // creation drop
                if(!drop){
                  drop = document.createElement('span');
                  drop.className = 'drop';
                  this.appendChild(drop);
                }
                // reset animate class
                drop.className = 'drop';
                
                // calculate dimensions of area (longest side)
                areaWidth = getComputedStyle(this, null).getPropertyValue("width");
                areaHeight = getComputedStyle(this, null).getPropertyValue("height");
                maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));
            
                // set drop dimensions to fill area
                drop.style.width = maxDistance + 'px';
                drop.style.height = maxDistance + 'px';
                
                // calculate dimensions of drop
                dropWidth = getComputedStyle(this, null).getPropertyValue("width");
                dropHeight = getComputedStyle(this, null).getPropertyValue("height");
                
                // calculate relative coordinates of click
                // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
                x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
                y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;
                
                // position drop and animate
                drop.style.top = y + 'px';
                drop.style.left = x + 'px';
                drop.className += ' animate';
                e.stopPropagation();
                
              }
            }
    
    //                        <select name="make" id="formmake">
    //<option value="" selected="selected">Marque</option></select>
          
         // <select name="modele" id="formmodele">
          //  <option value="" selected="selected">Modele</option></select>
    
          //  <select name="couleur" id="formcouleur">
          //  <option value="" selected="selected">Couleur</option></select>//
          </script>
  </section>
  <footer>
                    <p>Copyright &copy; 2023 Olivier Poulain Designer Web Developpeur Droits réservés  o.poulain@outlook.com</p>
                        </footer>
</body>
</html>