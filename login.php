<?php
if (!isset($_SESSION)) {
    session_start();
}
include('lib/Db.php');
include('lib/Login.php');
$Db = new Db();
$conn = $Db->getConntectie();
$Login = new Login;

if (isset($_SESSION['info'])) {
    header('location:dashboard.php');
}
if (isset($_POST['submitbutton'])) {
    error_reporting(-1);
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $message = '<label> all fields are requirded</label>';
        echo $message;
    } else {
        $Login->checkiflogin($conn, $_POST['username'], $_POST['password']);
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