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
print_r($_POST);
echo '</br>';
echo '</br>';
echo '</br>';
print_r($_SESSION);
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';

// if (isset($_POST['return'])) {
//     // unset($_SESSION['destination'], $_POST['destination'], $_SESSION['value'], $_POST['value'], $_SESSION['description'], $_POST['description']);
//     header('location:' . $_SESSION['return']);
// }
if (isset($_POST['send'])) {
    // print_r($_POST);
    $message;
    $success;
    echo '</br>';
    echo '</br>';
    echo '</br>';
    print_r($_SESSION);
    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo '</br>';

    echo 'something went wrong with value->' . $_POST['value'] . '<-value or key ->'
        // . $_POST['key'] .
        . '<- key or description ->' . $_POST['description'] . '<-description destination->' . $_POST['destination'];

    $Db = new Db();
    $conn = $Db->getConntectie();
    $payment = new payment;
    if ($_POST['submit'] && $_SESSION['destination'] == $_POST['destination'] && $_SESSION['value'] == $_POST['value'] && $_SESSION['description'] == $_POST['description']) {
        $payment->executepayment($_SESSION['info'][0]['ID'], $_SESSION['destination'], $_SESSION['value'], $_SESSION['description'], $conn);
        $message = 'payment has been made';
        $success = true;
    } else {
        $message = 'payment has failed';
        $success = false;
    }
    echo '<h1>' . $message . '</h1>
                <form action="Middleman.php" method="post">
                    <input hidden type="text" name="succession" value="' . $success . '">
        <input type="submit" value="return" name="return">
    </form>';

    // header('location:' . $_POST['return']);
}
if (isset($_SESSION['info'])) {
    // print_r($_SESSION);
    // $auth = $_SESSION['info'][0]['ID'] + time() * 10 / 15;
    if (isset($_POST['value']) && isset($_POST['return']) && isset($_POST['destination']) && isset($_POST['description'])) {
        $Db = new Db();
        $Db->getConntectie();
        $_SESSION['destination'] = $_POST['destination'];
        $_SESSION['return']       = $_POST['return'];
        $_SESSION['value'] = $_POST['value'];
        $_SESSION['description'] = $_POST['description'];    // if (isset($_POST['key'])
        $person = new Person;
        // $namefromdestination = $person->getdataname($Db, $_SESSION['destination']);
        // && $_POST['key'] == $auth
        // ) {

        echo 'you are paying ' . $_POST['value'] . ' Reichsmark to ' . $to . ' beacouse of ' . $_POST['description'];
        echo '<h1>are you sure about that</h1>
                <form action="Middleman.php" method="post">
                    <input hidden type="text" name="value" value="' . $_POST['value'] . '">
    <input hidden type="text" name="destination" value="' . $namefromdestination . '" id="">
    <input hidden type="text" name="description" value="' . $_POST['description'] . '" id="">
    <input hidden type="text" name="return" value="' . $_POST['return'] . '" id="">

        <input type="submit" value="submit" name="submit">
    </form>';
    } else {
        echo 'something went wrong with value->' . $_POST['value'] . '<-value or key ->'
            // . $_POST['key'] .
            . '<- key or description ->' . $_POST['description'] . '<-description destination->' . $_POST['destination'];
    }
}
//  else {
//     echo 'the webshop owner didnt intergrate me the right way';
// }
else {
    echo 'login first';
}
include('layout/footer.php');
