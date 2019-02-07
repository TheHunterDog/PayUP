
<?php
if (headers_sent()) {
    echo 'fill all fields dumbass';
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
    <form action="signingup.php" method="post">
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
        <input type="submit" value="I commit to my input">

    </form>
</body>

</html>