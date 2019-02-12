<?php
include('DB.php');
session_start();
//maak verbinding
//laat alle berichten zien


//zorg dat iemand kan posten
if (isset($_POST['submit'])) {
    $stmt = $dbh->prepare("INSERT INTO `Forum` (`ID`, `who`, `what`)
    VALUES (null, :username, :message)");
    $stmt->bindParam(':username', $_SESSION['username']);
    $stmt->bindParam(':message', $_POST['message']);
    $stmt->execute();
    unset($_POST);



}
$stmt = $dbh->prepare("SELECT * FROM Forum");
$stmt->execute();
$forum = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/form.css">
    <script src="main.js"></script>
</head>

<body>
    <nav>
        <?php
        if (isset($_SESSION['info'])) {
            echo ('<a href="dashboard.php">');
            echo ('<p>Dashboard</p>');
            echo ('</a>');
            echo ('<a href="logout.php">');
            echo ('<p>logout</p>');
            echo ('</a>');
            echo ('<a href="forum.php">');
            echo ('<p>forum</p>');
            echo ('</a>');

        } else {
            echo ('<a href="signup.php">');
            echo ('<p>Sign Up</p>');
            echo ('</a>');
            echo ('<a href="login.php">');
            echo ('<p>Login</p>');
            echo ('</a>');
        }
        ?>
    </nav>
            <div>
            <form action="forum.php" method="POST">
                <input type="text" name="message">
                <input type="submit" value="SUBMIT" name="submit">
            </form>
        </div>
    <div class="main" id="main">
        <?php
        for ($p = count($forum) - 1; $p >= 0; $p--) {
            echo ('<div class="article" id=' . $forum[$p]['ID'] . '>');
            echo ('<p>' . htmlspecialchars($forum[$p]['who']) . ' said </br>' . htmlspecialchars($forum[$p]['what']) . '</br>' . 'on the time of ' . htmlspecialchars($forum[$p]['time']) . '</p>');
            echo ('</div>');
        }
        ?>
    </div>
</body>

</html>