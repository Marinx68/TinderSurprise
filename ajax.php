<?php
ini_set('display_errors', 'on');
ini_set('log_errors', 'on');
ini_set('display_startup_errors', 'on');
ini_set('error_reporting', E_ALL);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "TinderSurprise";
var_dump($_POST);

$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$birthdate = $_POST["birthdate"];
$genre = $_POST["genre"];
$loisirs = $_POST["loisirs"];
$city = $_POST["city"];
$email = $_POST["email"];
$password = $_POST["password"];


try {
    require_once "./connecttoBDD.php";
    $db = dbconnect();
    $query = "
    INSERT INTO user(lastname, firstname, birthdate, genre, city, email, password) 
    VALUES(:lastname, :firstname, :birthdate, :genre, :city, :email, :password)";
    $sth = $db->prepare($query);
    $param = ['lastname' => $lastname,
        'firstname' => $firstname,
        'birthdate' => $birthdate,
        'genre' => $genre,
        'city' => $city,
        'email' => $email,
        'password' => $password];
    $sth->execute($param);
    echo 'gg';
} catch (PDOException $e) {
    echo 'Bruh' . $e->getMessage();
}
?>