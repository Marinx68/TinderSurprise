<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pagerecherche.css"/>
    <script src="pagerecherche.js.js"></script>
    <title>TinderSurprise</title>
</head>
<body class="backYellow flower">

<header class="header headerborder backRed">
    <img class="logo" src="assets/logotinder.png">
    <p class="tittle">Tinder Surprise</p>
    <a href="moncompte.php"><input class="buttoncompte id=" val" type="submit" value="Mon Compte"></a>
</header>

<div class="center backWhite column">
    <div>
        <p class="tittle">Trouve celui ou celle qui te correspond</p>
        <hr>
    </div>

<form method="get" id="buttonadmin">
    <div class="flex3">
        <div>
            <label class="tittlelabel">Genre :</label>
            <select class="buttonselect">
                <option>---</option>
                <option>Femme</option>
                <option>Homme</option>
                <option>Autre</option>
            </select>
        </div>

        <div>
            <label class="tittlelabel">Age :</label>
            <select class="buttonselect">
                <option>---</option>
                <option>18/25</option>
                <option>25/35</option>
                <option>35/45</option>
                <option>45+</option>
            </select>
        </div>
        <div>
            <label class="tittlelabel">Ville :</label>
            <input id="city" class="divUne" type="text" placeholder="Ville..." minlength="2"
                   pattern="[a-z]{2}">
        </div>
    </div>

    <div class="loisirs">
        <fieldset class="flex2">
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
    </div>
    </form>


    <div class="bordureimages center2">
        <img class="image" id="img1" src="./assets/profil.jpg">
        <img class="image" id="img2" src="./assets/profil.jpg">
        <img class="image" id="img3" src="./assets/profil.jpg">
        <img class="image" id="img4" src="./assets/profil.jpg">
        <img class="image" id="img5" src="./assets/profil.jpg">
        <img class="image" id="img6" src="./assets/profil.jpg">
        <div class="arrows"></div>
        <div class="fleche flechedroite" id="fdp">
        </div>
        <div class="fleche flechegauche">
        </div>
    </div>
</div>


<div class="center backWhite ">
    <div class="minibox1">
        <h1 class="tittleboite"> Boîte à idées :</h1>
        <div class="imageleft">
            <img class="imageleft" src="assets/resto.jpg">
            <p><strong>Restaurant :</strong>
                <i> Ce sont sous les lampadaire blanchâtre, que le début d'une nouvelle histoire
                    commença. Accompagné de ces parfums sucrés et gourmand.</i></p>
        </div>
        <div class="imageleft">
            <p><strong>Planétarium :</strong>
                <i> Sous un ciel des plus étoilés, les âmes et les coeurs se lient dans une
                    temporalité infinit, jusqu'à ce que ces dernière rejoignent les étoiles.</i></p>
            <img class="" src="assets/planetarium.jpg">
        </div>

        <div class="imageleft">
            <img class="imageleft" src="assets/patinoire.jpg">
            <p><strong>Patinoire :</strong>
                <i> Aussi froid qu'une cryogenisation, l'activité de la patinoire vas poussez l'autre à faire
                    le premier pas en ce collant à vous. Réchauffant votre coeur, votre âme et vos lèvres.</i></p>
        </div>
    </div>

    <div class="minibox3">
        <div class="minibox2">
            <h1 class="tittleactualite">Actualités :</h1>
            <p class="text">Les actualités sont pour le moment inncassible.. <br> Un peu de patient ^</p>

        </div>

        <div>
            <h1 class="tittlecitation">Citation du mois :</h1>
            <p class="text"><i>"Accompagne moi faire une pause clope, mais sans clope car c’est toi que j’ai envie d’allumer..." <br><strong>Logan</strong></i></p>
        </div>
    </div>
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



<?php

ini_set('display_errors', 'on');
ini_set('log_errors', 'on');
ini_set('display_startup_errors', 'on');
ini_set('error_reporting', E_ALL);

if(isset($_GET['city'])){
    require_once "./connecttoBDD";
    $db = dbconnect();
    $inputcity = '"%' . $_GET['city'] . '%"';
    $query = "SELECT city FROM user WHERE city LIKE $inputcity;";
    $returnobjet = $db->query($query);
    $result = $returnobjet->fetchAll();
}?>

<?php foreach ($result as $value){ ?>
    <div class="result_tab">
        <table class="tableaux">
            <tr>
                <th>Title</th>
                <th>Director</th>
                <th>Distributor</th>
                <th>Date</th>
                <th>Duration</th>
                <th>Rating</th>
            </tr>
    <tr>
        <td><?php echo $values['lastname']; ?></td>
        <td><?php echo $values['firstname'] ?></td>
        <td><?php echo $values['birthdate'] ?></td>
        <td><?php echo $values['genre'] ?></td>
        <td><?php echo $values['city'] ?></td>
</tr>
<?php
var_dump($result);
}?>


</body>
</html>