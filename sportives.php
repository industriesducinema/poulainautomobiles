<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/sportives.css">
    <title>Sportives ultimes</title>
</head>
<body>
    <header>
        <a href="index.php" class="close" title="fermer cette page"> 
            <div class="logo-with-img">
              <a href="index.php">
                <img src="images_image/logo_image.png" alt="Poulain Automobiles"></a></div>
                  </header>
                    <h1  style="text-align: center;">Galerie des Super cars</h1>
</div>
    <!--panorama carousel slider -->
    <div class="wrapper wrapper--demo">
        <div class="carousel"> 
            <div class="carousel__content">
                <div class="item">
            <p class="title">McLaren 765 LT</p>
            <img src="images_image/mclaren1.png" style="width: 100%;" alt="mclaren"   id="mclaren1" name="mclaren1" >
            <input accept="image/*" type="file"><!--creation d'un input pour l'envoi d un fichier ou image par mail-->

<button disabled>Partager une image et l'envoyer par mail</button>
          </div>
                <div class="item">
            <p class="title">La Ferrari</p>
            <img src="https://cdn.ferrari.com/cms/network/media/img/resize/649d5effff73dc0024751a3e-ferrari-sf90-xx-stradale2023-rullo-2?width=530&height=597" style="width: 100%;" alt="ferrari" id="ferrarielec"   name="ferrarielec" title="Performance">
            <input accept="image/*" type="file">

<button disabled>Partager une image et l'envoyer par mail</button>
          </div>
                <div class="item">
            <p class="title">911 GT3 RS</p>
            <img src="https://pics.porsche.com/rtt/iris?COSY-EU-100-1713c6eK12UC31P3T5JOCU%25hjdmiTDDmvMXlHWguCuq6Q44RtRHo9ZAaDjYu5P3I7tGW3rNbZJNKXv9Z7KcQQ%25yFN5tFAsXrw4r3wo0qnqZr8MCnR4i84tV2YN2OmNyW1QGWgCWKMUuyO9I7KM1wJ5GYyzpNFouiKyXd67Q9%25tenfIOuw6eu8q%25LAlmPkfeSvg3%25n3IaGuyOisMeIzR%25BWIJCgN2"  style="width: 100%;" alt="Gt3 Rs" title="911 Gt3 Rs" name="GT3 Rs">
            <input accept="image/*" type="file">

<button disabled>Partager une image et l'envoyer par mail</button>
          </div>
                <div class="item">
            <p class="title">SF XX </p>
            <img src="images_image/ferrari-sp48-unica.webp" alt="Ferrari Sp 48"  id="Sp48"  style="width: 100%;">
            <input accept="image/*" type="file">

<button disabled>Partager une image et l'envoyer par mail</button>
          </div>
                <div class="item">
            <p class="title">bUGATTI dIVO</p>
            <img src="images_image/bugatti_divo_lady_bug_1.jpg" style="width: 100%;" alt="Bugatti Divo" id="Divo" name="Bugatti Divo">
            <input accept="image/*" type="file">

<button disabled>Partager une image et l'envoyer par mail</button>
          </div>
                <div class="item">
            <p class="title">VALHALLA</p>
            <img src="https://www.astonmartin.com/-/media/model-page---hero---data-visualisations---july-2022/resized-model-images/herobrand_image_data_valhalla_3840x2160_rgb.jpg?h=2160&width=960&format=webp&quality=75" style="width: 100%;" alt="">
            <input accept="image/*" type="file">
<button disabled>Partager une image et l'envoyer par mail</button>
          </div>
            </div>
        
        <div class="carousel__nav">
          <a href="#" class="nav nav--left">Previous</a>
          <a href="#" class="nav nav--right">Next</a>
        </div>
        </div>
        </div>
    <!--fin du carousel-->

    <div class="center-div" style="text-align: right;" >
        <a href="index17.php" class="back">
            <div>
            </div>
            <h5>Poulain Automobiles</h5>
                <span>Retour Acceuil</span>
                    </a>
                <span></span>       
            </div>       
        </div>
         
  <script>
const input = document.querySelector('input[type=file]');
const button = document.querySelector('button');
let file;

input.addEventListener('change', function() {
  button.removeAttribute('disabled');
  file = input.files[0];
})
button.addEventListener('click', function() {
  if (navigator.canShare && navigator.canShare({
      files: [file]
    })) {
    navigator.share({
      files: [file]
    })
  }
})
</script>
<footer>
                    <p>Copyright &copy; 2023 Olivier Poulain Designer Web Developpeur Droits réservés  o.poulain@outlook.com</p>
                        </footer>
</body>
</html>