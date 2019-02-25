<?php
session_start();
include('layout/header.php');

include('lib/Db.php');
include('lib/Payment.php');
include('layout/navigation-middle.php');

if (isset($_POST['submit'])) {
    // print_r($_POST);
    echo 'something went wrong with value->' . $_POST['value'] . '<-value or key ->'
        // . $_POST['key'] .
        . '<- key or description ->' . $_POST['description'] . '<-description destination->' . $_POST['destination'];

    $Db = new Db();
    $conn = $Db->getConntectie();
    $payment = new payment;
    $payment->executepayment($_SESSION['info'][0]['ID'], $_POST['destination'], $_POST['value'], $_POST['description'], $conn);
    header('location:' . $_POST['return']);
}
if (isset($_SESSION['info'])) {
    // print_r($_SESSION);
    // $auth = $_SESSION['info'][0]['ID'] + time() * 10 / 15;
    if (isset($_POST['value']) && isset($_POST['return']) && isset($_POST['destination']) && isset($_POST['description'])) {

        // if (isset($_POST['key'])
        // && $_POST['key'] == $auth
        // ) {
        echo 'you are paying ' . $_POST['value'] . ' Reichsmark to ' . $_POST['destination'] . ' beacouse of ' . $_POST['description'];
        echo '<h1>are you sure about that</h1>
                <form action="Middleman.php" method="post">
                    <input hidden type="text" name="value" value="' . $_POST['value'] . '">
    <input hidden type="text" name="destination" value="' . $_POST['destination'] . '" id="">
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
