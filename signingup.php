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
    echo ('db connecting');
    $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';port=' . $port, $user, $pass) or die("SQL VERBINDING MISLUKT!!");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // if (isset($_POST["login"])) {



// $query = "INSERT INTO Payup_Users (ID, First_Name, Last_Name, Password, Net_Worth, Username) VALUES (NULL, :firstname, :lastname, :password, NULL, :username)";
// $statement = $dbh->prepare($query);
// $statement->execute(
//     array(
//         'username' => $_POST["username"],
//         'firstname' => $_POST["firstname"],
//         'lastname' => $_POST["lastname"],
//         'firstname' => $_POST["firstname"],
//         'password' => password_hash($_POST["password"])
//     )
// );
// header('index.html');


// $stmt = $conn->prepare("INSERT INTO Payup_Users (firstname, lastname, email) 
//     VALUES (:firstname, :lastname, :email)");
// $stmt->bindParam(':firstname', $firstname);
// $stmt->bindParam(':lastname', $lastname);
// $stmt->bindParam(':email', $email);

    $stmt = $dbh->prepare("INSERT INTO Payup_Users (ID, First_Name, Last_Name, Password, Net_Worth, Username)
VALUES (null, :firstname, :lastname, :pwd, '0 ',:username)");
    $stmt->bindParam(':firstname', $_POST['Firstname']);
    $stmt->bindParam(':pwd', password_hash($_POST["password"], PASSWORD_DEFAULT));
    $stmt->bindParam(':lastname', $_POST['Lastname']);
    $stmt->bindParam(':username', $_POST['username']);
// // null, : firstname, : lastname, : password, NULL, : username "

    echo ('hi from line 49');
    // // insert a row
    // $firstname = "John";
    // $lastname = "Doe";
    // $email = " john@example.com ";
    // $pwd = 'yes';
    $stmt->execute();
    echo ('it is done');

} catch (PDOException $error) {
    $message = $error->getMessage();
    echo ($message);
}
?>