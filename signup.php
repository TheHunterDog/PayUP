<?php
if (!isset($_SESSION)) {
    session_start();
}
include('Lib/Db.php');
include('Lib/Signup.php');
$Db = new Db();
$conn = $Db->getConntectie();


if (isset($_SESSION['info'])) {
    header('location:dashboard.php');
}
if (isset($_POST['submitbutton'])) {

    if (empty($_POST['Firstname']) || empty($_POST["password"]) || empty($_POST['Lastname']) || empty($_POST['username'])) {
        $message = 'Fill everything';
    } else {
        $signupRequest = new signup();
        if ($signupRequest->SignUPprocess($conn, $_POST['Firstname'], $_POST['Lastname'], $_POST['password'], $_POST['username'])) {
            $message = $_POST['Firstname'] . 'you have signed up';
        } else {
            $message = 'Username is already in use';
        }
    }
}
if (isset($message)) {
    echo ($message);
    unset($message);
}

include('layout/header.php');
include('layout/navigation-middle.php');

?>

<form action="signup.php" method="post">
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
    <input type="submit" name="submitbutton" value="I commit to my input">

</form>
<?php
include('layout/footer.php');

?> 