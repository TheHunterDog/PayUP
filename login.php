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
include('layout/header.php');
include('layout/navigation-middle.php'); ?>
    <div class="login-form-wrapper">
    <form action="login.php" method="post">
        <div class="input-item">
        <label for="username" >username</label>
        <input type="text" name="username" class="username-textfield" id="username-txtfield" placeholder="USERNAME">
        </div>
                <div class="input-item">

        <label for="password">password</label>
        <input type="password" name="password" class="password-txtfield" id="password-txtfield" placeholder="password">
                </div>
        <input type="submit" name="submitbutton" value="login">
    </form>
    </div>
<?php
include('layout/footer.php');


?>