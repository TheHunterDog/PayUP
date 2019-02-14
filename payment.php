<?php
include('lib/Db.php');
include('lib/Payment.php');
if (!isset($_SESSION)) {
    session_start();
}
$Db = new Db();
$conn = $Db->getConntectie();
$payment = new payment;

if (!isset($_SESSION['info'])) {
    header('location:index.php');
} 
// else {
//     $stmt = $dbh->prepare("SELECT * FROM Payup_Users WHERE Username = :username");
//     $stmt->bindParam(':username', $_POST['username']);
//     $stmt->execute();

// }


if (isset($_POST['submitbutton'])) {
    $payment->executepayment($_SESSION['info'][0]['ID'], $_POST['to_bankaccountID'], $_POST['howmuch'], $_POST['description'], $conn);
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
        <input type="text" name="to_bankaccountID" id="" required placeholder="5">
        <input type="text" name="howmuch" id="" required placeholder="10000">
        <input type="text" name="description" id="" required placeholder="beer">
        <input type="submit" value="PayUp" name="submitbutton">

    </form>

</body>

</html>