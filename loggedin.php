<?php
include('DB.php');
$query = "SELECT * FROM Users WHERE Username = :username AND firstname = :firstname";
$statement = $dbh->prepare($query);
$statement->execute(
    array(
        'username' => $_SESSION["username"],
        'firstname' => $_SESSION["firstname"]
    )
);
$run = $dbh->prepare($query);
$result = $run->fetchAll();
$_SESSION['Net_Worth'] = $result['Net_Worth'];



if ($_SESSION['key'] === $key) {
    echo "welcome " + $_SESSION['firstname'];
    echo 'you currently have ' + $_SESSION['Net_Worth'];
}

?>