<?php
error_reporting(E_ALL);
session_start();
$host = 'localhost';
$port = 3306;
$user = 'deb7255_mark';
$pass = 'heineken';
$db = 'deb7255_mark';
$message = "";
$query = "";
$statement = "";
try {
    $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';port=' . $port, $user, $pass) or die("SQL VERBINDING MISLUKT!!");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // if (isset($_POST["login"])) {

} catch (PDOException $error) {
    $message = $error->getMessage();
}

?>