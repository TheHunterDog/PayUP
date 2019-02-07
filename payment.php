<?php
session_start();
if (isset($_SESSION['info'])) {

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>paying</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="payment.php" method="post">
        <select name="bankaccount-selector" id="bankaccount-selector">

    </select>
    <input type="text" name="to_bankaccount" id="">
    <input type="text" name="howmuch" id="">
    <input type="text" name="description" id="">
    
    </form>
    
</body>
</html>