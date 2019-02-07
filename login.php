<?php
include('DB.php');
if (headers_sent()) {
    echo ($message);
    echo ('wrong credentials');
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
    <form action="loggingin.php" method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="username-txtfield" placeholder="USERNAME">
        <label for="password">password</label>
        <input type="text" name="password" id="password-txtfield" placeholder="password">
        <input type="submit" value="login">
    </form>
</body>

</html>