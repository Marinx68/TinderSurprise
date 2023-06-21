<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="moncompte.css"/>
    <script src="script.js"></script>
    <title>TinderSurprise</title>
</head>
<body class="backYellow flower">

<header class="header headerborder backRed">
    <img class="logo" src="assets/logotinder.png">
    <p class="tittle">Tinder Surprise</p>
    <a href="pagerecherche.php"><input class="buttonlogin" id="val" type="submit" value="Retour"></a>
</header>

<div class="center backWhite">
    <div class="takebox1">
        <div>
            <img class="image" src="assets/profil.jpg">
            <p class="textemail"> votre@email.com</p>
            <h1>Loisirs</h1>
            <p class="borderloisirs"></p>
        </div>

        <div class="takebox2">
            <div class="textbox2">
                <p class="terme">Nom</p>
                <p class="terme">Prenom</p>
                <p class="terme">Genre</p>
            </div>
            <div>
                <p class="terme2">Date de naissance</p>
                <p class="terme2">Ville</p>
            </div>
        </div>
    </div>
</div>

<div class="center backWhite bigbox1">
    <div>
        <p class="tittlegestion backOrange">Gestionnaire du compte</p>
        <hr>
    </div>
    <div class="doublebox">
        <div class="city">
            <label>Ville :</label>
            <input id="city" class="backOrange" type="text" placeholder="Ville..." minlength="2"
                   pattern="[a-z]{2}">
        </div>

        <div class="password">
            <label class="margin">Mot de passe :</label>
            <input class="backOrange" id="password" type="text" placeholder="*********">
            <label class="margin">Confirmation de mot de passe :</label>
            <input class="backOrange" id="password" type="text" placeholder="*********">
        </div>
    </div>
    <input class="val" id="val" type="submit" value="Confirmation">
    <h2>Désactivation définitive de votre compte</h2>
</div>
<div class="midTom backRed">
    <div class="box2">
        <h1>Réseaux Sociaux :</h1>
        <img class="picture" src="assets/reseaux.png">
    </div>
</div>

<div class="bottom backYellow">
    <div>
        <p>© 2023 Epitech Groupe, droit reservé</p>
    </div>
</div>

</body>
</html>