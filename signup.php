
<?php
session_start();
include('Db.php');

echo ($message);
if (isset($_SESSION['info'])) {
    header('location:dashboard.php');
}
if (isset($_POST['submitbutton'])) {

    // if (empty($_POST['Firstname']) || empty($_POST["password"]) || empty($_POST['Lastname']) || empty($_POST['username'])) {
    // }
    $checkifalreadyinuse = $dbh->prepare("SELECT * FROM Payup_Users WHERE Username = :username");
    $checkifalreadyinuse->bindParam(':username', $_POST['username']);
    $checkifalreadyinuse->execute();
    $count = $checkifalreadyinuse->rowCount();
    if ($count > 0) {
        $message = 'username is already in use';
        echo ($message);
    } else {
        $stmt = $dbh->prepare("INSERT INTO Payup_Users (ID, First_Name, Last_Name, Password, Net_Worth, Username)
VALUES (null, :firstname, :lastname, :pwd, '1 ',:username)");
        $stmt->bindParam(':firstname', $_POST['Firstname']);
        $stmt->bindParam(':pwd', password_hash($_POST["password"], PASSWORD_DEFAULT));
        $stmt->bindParam(':lastname', $_POST['Lastname']);
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->execute();
        echo ('it is done');
        // $person = $stmt->fetchAll();
        // $_SESSION['user'] = $person;

        echo $message;
    }
}

?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <form action="signup.php" method="post">
        <label for="Firstname">Firstname</label>
        <input type="text" name="Firstname" require id="Firstname-txtfield" placeholder="Firstname">
        <label for="Lastname">Lastname</label>
        <input type="text" name="Lastname" require id="Lastname-txtfield" placeholder="Lastname">
        <label for="username">username</label>
        <input type="text" name="username" require id="username-txtfield" placeholder="USERNAME">
        <label for="password">password</label>
        <input type="text" name="password" require id="password-txtfield" placeholder="password">
        <label for="agreement">I accept the <a href="agreement.html">agreement</a>></label>
        <input type="checkbox" required name="agreement" id="agreement">
        <input type="submit" name="submitbutton" value="I commit to my input">

    </form>
</body>

</html>