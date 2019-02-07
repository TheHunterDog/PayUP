<?php
include('DB.php');
if (headers_sent()) {
    echo ($message);
    echo ('wrong credentials');
}
if (isset($_POST['submitbutton'])) {
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
    <form action="login.php" method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="username-txtfield" placeholder="USERNAME">
        <label for="password">password</label>
        <input type="text" name="password" id="password-txtfield" placeholder="password">
        <input type="submit" name="submitbutton" value="login">
    </form>
</body>

</html>