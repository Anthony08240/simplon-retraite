<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
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
            <div class="accu"><p>Accueil</p></div>
        </div>
    </header>

    <!--testimonials-->
    <?php include("carouseltxt.php"); ?>

    <!--formulaire-->
    <?php include("formulaire.php"); ?>
    <!--footer-->
    <div class="footer">
                <div class="foot1"><p>9 Avenue de Saint-Jean,<br>46800 Montcuq</p></div>
                <div class="foot2"><p>Campu Sup,<br>08000 Charleville-Mézières</p></div>
                <div class="foot3"><div class=><img class="facebook" src="img/facebook.jpg"></div><div><img class="twitter" src="img/twitter.png"></div></div>
            </div>
            <div class="copy">
                <div><div><img class="copylogo" src="img/copyright-r-png-14.png"></div></div>
                <div class="copytxt">Copyright</div>
            </div>
</body>
</html>