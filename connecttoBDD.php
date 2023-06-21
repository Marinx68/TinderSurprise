<?php
function dbconnect()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "TinderSurprise";


    $dsn = "mysql:dbname=" . $dbname;
    ";host=" . $dbhost;

    try {

        //Connection à la BDD par PDO
        $db = new PDO($dsn, $dbuser, $dbpass);


        //Définir la méthode de récupération (fetch) des données
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $db;

    } catch (PDOException $e) {
        //On attrape les erreurs provoqué par le new PDO en cas d'echec
        die($e->getMessage());
        return NULL;
    }
}

?>