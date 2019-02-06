<?php

include('DB.php');
$query = "INSERT INTO `deb7255_mark`.`Payup_Users` 
(`ID`, `First_Name`, `Last_Name`, `Password`, `Net_Worth`, `Username`) 
VALUES (NULL, ':firstname', ':lastname', ':password', NULL, ':username');";
$statement = $dbh->prepare($query);
$statement->execute(
    array(
        'username' => $_POST["username"],
        'firstname' => $_POST["firstname"],
        'lastname' => $_POST["lastname"],
        'firstname' => $_POST["firstname"],
        'password' => password_hash($_POST["password"])
    )
);
header('index.html');
