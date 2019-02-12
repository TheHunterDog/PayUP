<?php
include('DB.php');
session_start();

if (!isset($_SESSION['info'])) {
    header('location:index.php');
} 
// else {
//     $stmt = $dbh->prepare("SELECT * FROM Payup_Users WHERE Username = :username");
//     $stmt->bindParam(':username', $_POST['username']);
//     $stmt->execute();

// }


if (isset($_POST['submitbutton'])) {
    $payernewsal = $_SESSION['info'][0]['Net_Worth'] - $_POST['howmuch'];
    $updatepayer = $dbh->prepare("UPDATE Payup_Users SET Net_Worth = :newnetpayer WHERE ID = :id AND Username = :Username");
    $updatepayer->bindParam(':newnetpayer', $payernewsal);
    $updatepayer->bindParam(':Username', $_SESSION['info'][0]['Username']);
    $updatepayer->bindParam(':id', $_SESSION['info'][0]['ID']);
    $updatepayer->execute();

    echo ('quary1');
    $getinforeciver = $dbh->prepare("SELECT * FROM Payup_Users WHERE ID = :id");
    $getinforeciver->bindParam(':id', $_POST['to_bankaccount']);
    $getinforeciver->execute();
    $getinforeciverinfo = $getinforeciver->fetchAll();
    echo ('quary2');

    $newsalreciver = $getinforeciverinfo[0]['Net_Worth'] + $_POST['howmuch'];
    $updatereciver = $dbh->prepare("UPDATE Payup_Users SET Net_Worth = :newnetreciver WHERE ID = :id");
    $updatereciver->bindParam(':newnetreciver', $newsalreciver);
    $updatereciver->bindParam(':id', $getinforeciverinfo[0]['ID']);
    $updatereciver->execute();

    $history = $dbh->prepare("INSERT INTO `Payup_Transactionhistory` (`From_bankaccountID`, `To_bankaccountID`, `Value`, `why`) 
                                                            VALUES (':from', ':to', ':value',':description');");
    $history->bindParam(':to', $_POST['tobankaccount']);
    $history->bindParam(':from', $_SESSION['info']['ID']);
    $history->bindParam(':value', $_POST['howmuch']);
    $history->bindParam(':description', $_POST['description']);
    echo ('quary3');

    echo ('end');
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
        <input type="text" name="to_bankaccount" id="" required placeholder="5">
        <input type="text" name="howmuch" id="" required placeholder="10000">
        <input type="text" name="description" id="" required placeholder="beer">
        <input type="submit" value="PayUp" name="submitbutton">

    </form>

</body>

</html>