<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <script src="./script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>TinderSurprise</title>
</head>
<body class="backYellow flower">

<header class="header headerborder backRed">
    <img class="logo" src="assets/logotinder.png">
    <p class="tittle">Tinder Surprise</p>
    <a href="connexion.php"> <input class="buttonlogin" id="val" type="submit" value="Connexion"></a>
</header>

<div class="center backWhite">
    <div>
        <p class="tittleInscription backOrange">Inscription</p>
        <hr>
        <form onsubmit="doRegister(event)">
            <label>Nom :</label>
            <input id="lastname" class="divUne backOrange" type="text" placeholder="Votre nom..." minlength="2">
            <label>Prénom :</label>
            <input id="firstname" class="divUne backOrange" type="text" placeholder="Votre prénom..." minlength="2">
            <label>Ville :</label>
            <input id="city" class="divUne backOrange" type="text" placeholder="Ville..." minlength="2">


            <div class="margin">
                <label for="birthdate">Date de Naissance :</label>
                <input class="backOrange" type="date" id="birthdate" name="birthdate">
                <span class="validity"></span>
            </div>

            <div>
                <fieldset class="mama backOrange genremargin">
                    <legend class="margin">Genre :</legend>
                    <div class="flex">
                        <input type="radio" id="genre" name="drone" value="Femme"
                               checked>
                        <label for="femme">Femme</label>
                    </div>
                    <div class="flex">
                        <input type="radio" id="genre" name="drone" value="Homme">
                        <label for="homme">Homme</label>
                    </div>
                    <div class="flex">
                        <input type="radio" id="genre" name="drone" value="Autre">
                        <label for="autre">Autre</label>
                    </div>
                </fieldset>
            </div>

            <hr class="margin">

            <div class="loisirs">
                <fieldset class="flex2 backOrange" id="loisirs">
                    <legend class="margin">Loisirs :</legend>
                    <input type="checkbox" id="check" value="Gaming">
                    <label>Gaming</label>
                    <input type="checkbox" id="check2" value="Cinéma">
                    <label>Cinéma</label>
                    <input type="checkbox" id="check3" value="Sport">
                    <label>Sport</label>
                    <input type="checkbox" id="check4" value="Manga/Anime">
                    <label>Manga/Anime</label>
                    <input type="checkbox" id="check5" value="Cuisine">
                    <label>Cuisine</label>
                    <input type="checkbox" id="check6" value="Lecture">
                    <label>Lecture</label>
                    <input type="checkbox" id="check7" value="Maquillage">
                    <label>Maquillage</label>
                    <input type="checkbox" id="check8" value="Musique">
                    <label>Musique</label>
                </fieldset>
                <label class="margin">Autres Loisirs:</label>
                <input class="mama backOrange" type="text" id="autre" name="drone" value="">
            </div>

            <div class="loisirs mama">
                <label class="margin ">Email :</label>
                <input class="backOrange" id="email" type="email" placeholder="votre@mail.fr">
                <label class="margin">Mot de passe :</label>
                <input class="backOrange" id="password" type="password" placeholder="*********">
            </div>
            <button class="val margin" id="val" type="submit" value="Inscription">Inscription</button>
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
