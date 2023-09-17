

<?php

   if(isset($_POST["marque"]) || isset($_POST["modele"]) || isset($_POST["couleur"])  || isset($_POST["prix"]) || isset($_POST["usermail"]) ) {
      echo "Marque de l'auto ". $_POST['marque']. "<br />";
      echo "Prix ". $_POST['prix']. "<br />";
      echo "Username ". $_POST['usermail']. "<br />";
      echo "quelle couleur: ". $_POST['couleur']. "<br />";
      echo "Modele: ". $_POST['modele']. "<br />";
      echo '<body style="background-color:white">';
    
      exit();

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
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

<li class="search__product-item" data-ytos-item="" data-ytos-product-info="{&quot;pageNumber&quot;:1,&quot;productPosition&quot;:3}">
        <product-slot class="product-slot slot-element js-carousel-item product-slot--hero" data-badges="[{&quot;Key&quot;:&quot;
            Badge_BestSeller&quot;,&quot;
            Label&quot;:&quot;Essentiel&quot;}]" data-buyable="true" data-element="product-slot" data-has-price="false" 
            data-image-template="https://static.moniteurautomobile.be/imgcontrol/images_tmp/clients/moniteur/c680-d465/content/medias/images/news/40000/300/90/2023-bentley-mulliner-batur-0.jpg" 
            data-image-transformation="padding12" data-image-views="img1,img2,img3,img9" 
            data-info="{&quot;name&quot;:&quot;autos&quot;,&quot;shortDescription&quot;:&quot;
            Nouveau mod &quot;}" 
            data-is-multi-strap="False" data-is-one-size="True" data-partnumber="" data-position="3" 
            data-price="{&quot;priceCurrency&quot;:{&quot;label&quot;:&quot;EUR&quot;,&quot;symbol&quot;:&quot;€&quot;},&quot;fullPrice&quot;:8700.0,&quot;
            priceFromType&quot;:0,&quot;partNumber&quot;:null,&quot;individualPrice&quot;:false,&quot;visibleVat&quot;:false,&quot;
            showDoublePrice&quot;:false,&quot;
            doublePriceData&quot;:null}" data-product-sku="" data-quick-view="fast" data-refnumber="CRWSSA0037" data-show-desc="True" 
            data-show-price="True" data-show-title="True" data-size-for-one-size-product="GM" data-strap-exchange="false" data-type="search" 
            data-url="https://static.moniteurautomobile.be/imgcontrol/images_tmp/clients/moniteur/c680-d465/content/medias/images/news/40000/300/90/2023-bentley-mulliner-batur-0.jpg" 
            data-ytos-track-product-data="">
        <article>
            <div class="product-slot__image image-wrapper">                                         
                <li class="product-slot-image-active" role="group" aria-label="1 / 1" aria-hidden="true" style="width: auto;">                     
        <a href="https://static.moniteurautomobile.be/imgcontrol/images_tmp/clients/moniteur/c680-d465/content/medias/images/news/40000/300/90/2023-bentley-mulliner-batur-0.jpg" 
                            class="image-link" aria-hidden="true" tabindex="-1">
                                <img alt="2023-bentley-mulliner-batur-0 data-ytos-height="[400,520,720,960] data-ytos-part-number="" 
                                    data-ytos-sizes="[&quot;400w&quot;,&quot;520w&quot;,&quot;720w&quot;,&quot;960w&quot;]" 
                                    data-ytos-template-url-details="{&quot;t&quot;:&quot;padding12&quot;}" data-ytos-view="img1" 
                                    data-ytos-width="[400,520,720,960]" sizes="(min-width: 1920px) 350px, (min-width: 1366px) 200px, (min-width: 1024px) 25vw, 50vw" 
                                    src="images/2023-bentley-mulliner-batur-0.jpg" 
                                    srcset="https://static.moniteurautomobile.be/imgcontrol/images_tmp/clients/moniteur/c680-d465/content/medias/images/news/40000/300/90/2023-bentley-mulliner-batur-0.jpg 400w,
                                    https://static.moniteurautomobile.be/imgcontrol/images_tmp/clients/moniteur/c680-d465/content/medias/images/news/40000/300/90/2023-bentley-mulliner-batur-0.jpg 520w,
                                    https://static.moniteurautomobile.be/imgcontrol/images_tmp/clients/moniteur/c680-d465/content/medias/images/news/40000/300/90/2023-bentley-mulliner-batur-0.jpg 720w,
                                    https://static.moniteurautomobile.be/imgcontrol/images_tmp/clients/moniteur/c680-d465/content/medias/images/news/40000/300/90/2023-bentley-mulliner-batur-0.jpg 960w" 
                                    title="Bentley Batur Mulliner"/>
                                </a>
                            </li>
                        </div>
                    <div class="product-slot__info">
                <h3 class="product-slot__titl e" itemprop="title" aria-label="Bentley">
            <a href="https://static.moniteurautomobile.be/imgcontrol/images_tmp/clients/moniteur/c680-d465/content/medias/images/news/40000/300/90/2023-bentley-mulliner-batur-0.jpg">
            Bentley Batur Mulliner</a>
                </h3>
                    <div class="product-slot__short-description">Nouvelle mod &#232;le,  hyper sportive, acier, en m &#233;tal et Alu, Carbone                                       
                        </div>
                            </div>
                                <div class="product-slot__skeleton product-slot__skeleton--price">
                                </div>
                                    <div class="product-slot__skeleton product-slot__skeleton--quick-view"></div>
                                        <product-price class="product-price" data-element="product-price" 
                                            data-model="{&quot;priceCurrency&quot;:{&quot;label&quot;:&quot;EUR&quot;,&quot;symbol&quot;:&quot;€&quot;},&quot;fullPrice&quot;:28500,
                                            &quot;priceFromType&quot;:0,&quot;partNumber&quot;:null,&quot;individualPrice&quot;:false,&quot;visibleVat&quot;:false,&quot;
                                            showDoublePrice&quot;:false,
                                            &quot;doublePriceData&quot;:null}" data-scope="700" id="price6" name="price6bentley" value="2023-bentley-mulliner-batur-0">
                                        <div class="itemPrice">
                                    <span class="price">
                                <span class="currency">€</span>
                            <span data-ytos-price="465100" class="value">465&nbsp;100</span>
                            <form action="configuration/config.php" method="post">
                                        <!--<form action = "<?php $_PHP_SELF ?>" method = "post">-->
                                                <h3>Faire une offre au vendeur</h3>
                                                        Marque: <input type = "text" name = "marque" id="marque" />
                                                        Modele: <input type = "text" name = "modele" id="modele" />
                                                        Couleur: <input type = "text" name = "couleur" id="couleur" />
                                                        Prix: <input type = "text" name = "prix" id="prix" />
                                                        Email: <input type = "email" name = "usermail" id="usermail" />
                                                         
                                                        <input type = "submit" />
                                                        </form>    
                        </span>
                    </div>
                </product-price>
            <div class="product-slot__button">
        <button class="button" aria-haspopup="dialog" control-id="ControlID-61">
                                                        Acheter
            </button>
                </div>
            </form>
                    </article>
                        </product-slot>
                            </li> 
                            <footer>
                    <p>Copyright &copy; 2023 Olivier Poulain Designer Web Developpeur Droits réservés  o.poulain@outlook.com</p>
                        </footer>
            
</html>     