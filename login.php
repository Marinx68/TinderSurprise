<?php
ini_set('display_errors', 'on');
ini_set('log_errors', 'on');
ini_set('display_startup_errors', 'on');
ini_set('error_reporting', E_ALL);
require_once "./connecttoBDD.php";


if (isset($_POST['email'], $_POST['password'])) {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "TinderSurprise";

    $email = $_POST["email"];
    $password = $_POST["password"];
    $db = dbconnect();
    $query = "select * from user where email like :email and password like :password";
    $param = [
        ":email" => $_POST["email"],
        ":password" => $_POST["password"],
    ];
    $sth = $db->prepare($query);
    $sth->execute($param);
    $result = $sth->fetchAll();

    if (!empty($result)) {
        $firstname = $result[0]["firstname"];
        echo "true";
    } else {
        echo "false";
    }
}
