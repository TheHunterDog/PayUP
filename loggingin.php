<?php
error_reporting(-1);
include('DB.php');
if (empty($_POST["username"]) || empty($_POST["password"])) {
    $message = '<label> all fields are requirded</label>';
    echo $message;
} else {

    $stmt = $dbh->prepare("SELECT * FROM Payup_Users WHERE Username = :username");
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->execute();
    $person = $stmt->fetchAll();
    $_SESSION['info'] = $person;

    $count = $stmt->rowCount();
    if ($count > 0) {
        if (password_verify($_POST['password'], $person[0]['Password'])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION['firstname'] = $userfirstname;
            header('location:loggedin.php');
        }
    } else {
        $message = "<label> WRONG</label>";
        echo $message;
        header('location:login.php');

    }
    echo $message;
}
?>