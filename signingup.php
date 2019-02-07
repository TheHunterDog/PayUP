<?php

include('DB.php');
if (empty($_POST['Firstname']) || empty($_POST["password"]) || empty($_POST['Lastname']) || empty($_POST['username'])) {
    header('location:signup.html');
}


$stmt = $dbh->prepare("INSERT INTO Payup_Users (ID, First_Name, Last_Name, Password, Net_Worth, Username)
VALUES (null, :firstname, :lastname, :pwd, '0 ',:username)");
$stmt->bindParam(':firstname', $_POST['Firstname']);
$stmt->bindParam(':pwd', password_hash($_POST["password"], PASSWORD_DEFAULT));
$stmt->bindParam(':lastname', $_POST['Lastname']);
$stmt->bindParam(':username', $_POST['username']);
$stmt->execute();
echo ('it is done');

?>