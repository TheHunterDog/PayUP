<?php

ini_set('display_errors', 1);
ini_set('display_startp_errors', 1);
error_reporting(-1);

session_start();
include('layout/header.php');
include('Lib/Db.php');
include('Lib/Person.php');
include('Lib/Payment.php');
include('layout/navigation-middle.php');
$return = 0;
$Db = new Db();
$conn = $Db->getConntectie();
$payment = new payment;
if (isset($_POST['returnye'])) {
    unset($_POST);
    header('location:' . $_SESSION['return']);
}
if (isset($_POST['submit'])) {
    $payment->executepayment($_SESSION['info'][0]['ID'], $_SESSION['destination'], $_SESSION['value'], $_SESSION['description'], $conn);
    $message = 'payment has been made';
    $success = true;
    echo '<h1>' . $message . '</h1>
                <form action="Middleman.php" method="post">
                    <input hidden type="text" name="succes" value="' . $success . '">
                        <input hidden type="text" name="return" value="' . $_POST['return'] . '" id=""> 

        <input type="submit" value="return" name="return">
    </form>';
}
if (isset($_SESSION['info']) && !isset($_POST['submit'])) {
    if (isset($_POST['value']) && isset($_POST['return']) && isset($_POST['destination']) && isset($_POST['description'])) {
        $Db = new Db();
        $Db->getConntectie();
        $payment = new payment;

        $_SESSION['destination'] = $_POST['destination'];
        $_SESSION['return']       = $_POST['return'];
        $_SESSION['value'] = $_POST['value'];
        $_SESSION['description'] = $_POST['description'];
        echo 'you are paying ' . $_POST['value'] . ' Reichsmark to ' . $_SESSION['destination'] . ' beacouse of ' . $_POST['description'];
        echo '<h1>are you sure about that</h1>
                <form action="Middleman.php" method="post">
                    <input hidden type="text" name="value" value="' . $_POST['value'] . '">
    <input hidden type="text" name="destination" value="' . $_POST['destination'] . '" id="">
    <input hidden type="text" name="description" value="' . $_POST['description'] . '" id="">
    <input hidden type="text" name="return" value="' . $_POST['return'] . '" id=""> 
            <input type="submit" value="submit" name="submit">';
    }
}
