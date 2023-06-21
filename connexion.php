<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="connexion.js"></script>
    <title>TinderSurprise</title>
</head>
<body class="backYellow flower">

<header class="header headerborder backRed">
    <img class="logo" src="assets/logotinder.png">
    <p class="tittle">Tinder Surprise</p>
    <a href="index.php"> <input class="buttonlogin" id="val" type="submit" value="Inscription"></a>
</header>

<div class="center backWhite">
    <div>
        <p class="tittleConnexion backOrange">Connexion</p>
        <form class="" onsubmit="doLogin(event)">


            <hr class="margin hr">

            <div class="box boxlogin">
                <label class="margin ">Email :</label>
                <input class="backOrange" id="email" type="text" placeholder="votre@mail.fr">
                <label class="margin">Mot de passe :</label>
                <input class="backOrange" id="password" type="text" placeholder="*********">
            </div>
            <input class="val" id="val" type="submit" value="Connexion">
            <p style="display: none; color:red; text-align: center" id="errorConnection"></p>
            <p class="endword"><i>Pas encore inscrit ?<a href="index.php"> <u>Inscrivez-vous
                            gratuitement</u></a></i></p>
            <hr>
        </form>
    </div>
</div>

<div class="midTom backRed">
    <div class="box1 ">
        <h1>Mention Légales :</h1>
        <p class="sentence"><i>Confidentialité</i></p>
        <p class="sentence"><i>Contraintes d'utilisation</i></p>
        <p class="sentence"><i>Politique relative aux cookies</i></p>
    </div>

    <div class="box2">
        <h1>Réseaux Sociaux :</h1>
        <img class="picture" src="assets/reseaux.png">
    </div>

    <div class="box3">
        <h1>FAQ :</h1>
        <p class="sentence"><i>Mes distinctions</i></p>
        <p class="sentence"><i>Contact</i></p>
        <p class="sentence"><i>Code promo</i></p>
    </div>
</div>

<div class="bottom backYellow">
    <div>
        <p>© 2023 Epitech Groupe, droit reservé</p>
    </div>
</div>

</body>
</html>