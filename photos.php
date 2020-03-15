<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src = "js / jquery-1.3.2.min.js" type = "text / javascript"> </script>
  <link rel = "stylesheet" href = "css / prettyPhoto.css" type = "text / css" media = "screen" title = "prettyPhoto main stylesheet" charset = "utf-8" />
  <script src = "js / jquery.prettyPhoto.js" type = "text / javascript" charset = "utf-8"> </script>
    <title>Photos</title>
</head>
<body>
<header>
    <div class="nav">
            <div class="logo"><img class="logo2" src="img/logo simplon.png"></div>
            <div class="navtxt">
                <div class="acc"><a href="index.php">Accueil</a></div>
                <div class="res"><a href="residences.php">Résidences</a></div>
                <div class="pho"><a href="photos.php">Photos</a></div>
                <div class="cont"><a href="contact.php">Contact</a></div>
            </div>
        </div>
        <hr>
        <div class="tete">
            <div class="accu"><p>Galerie Photos</p></div>
        </div>
    </header>
    <div class="section1">
    <div class="photo1"><a rel="prettyPhoto[myGallery]" class="phot1" href="img/personne agé.jpg">
      <img class="phot1" src="img/personne agé.jpg" />
  </a>  </div>
    <div class="photo2"><a class="photosec1.2" rel="prettyPhoto[myGallery]" title="phot2" href="img/retraité 1.jpg">
      <img class="phot2" src="img/retraité 1.jpg" />
  </a></div>
    <div class="photo3"><a class="photosec1.3" rel="prettyPhoto[myGallery]" title="phot3" href="img/retraité 2.jpg">
      <img class="phot3" src="img/retraité 2.jpg" />
  </a></div>
   </div>
<div class="section2">
       <div class="photo4"><a class="photosec2" rel="prettyPhoto[myGallery]" title="phot4" href="img/retraité 3.jpg">
      <img class="phot4" src="img/retraité 3.jpg" />   
      </div>
</div>
<div class="section3">
<div class="photo5"><a class="photosec2" rel="prettyPhoto[myGallery]" title="phot5" href="img/retraité 4.png">
      <img class="phot5" src="img/retraité 4.png" />   
      </div>
      <div class="photo6"><a class="photosec2" rel="prettyPhoto[myGallery]" title="phot6" href="img/retraité 5.jpg">
      <img class="phot6" src="img/retraité 5.jpg" />   
      </div>
</div>
<div class="section4">
       <div class="photo7"><a class="photosec2" rel="prettyPhoto[myGallery]" title="phot7" href="img/retraité 6.jpg">
      <img class="phot7" src="img/retraité 6.jpg" />   
      </div>
</div>
       <!--prettyphotos-->
       <script type="text/javascript" charset="utf-8">
               $(document).ready(function(){
                 $("a[rel^='prettyPhoto']").prettyPhoto();
               });
             </script>

<footer>
<div class="footer">
                <div class="foot1"><p>9 Avenue de Saint-Jean,<br>46800 Montcuq</p></div>
                <div class="foot2"><p>Campu Sup,<br>08000 Charleville-Mézières</p></div>
                <div class="foot3"><div class=><img class="facebook" src="img/facebook.jpg"></div><div><img class="twitter" src="img/twitter.png"></div></div>
            </div>
            <div class="copy">
                <div><div><img class="copylogo" src="img/copyright-r-png-14.png"></div></div>
                <div class="copytxt">Copyright</div>
            </div>
</footer>
            

</body>
</html>