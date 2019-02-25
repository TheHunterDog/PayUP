<?php
class Login
{
    function checkiflogin($DBCONNECTION, $username, $password)
    {
        $stmt = $DBCONNECTION->prepare("SELECT * FROM Payup_Users WHERE Username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $person = $stmt->fetchAll();

        $count = $stmt->rowCount();
        if ($count > 0) {
            if (password_verify($_POST['password'], $person[0]['Password'])) {
                $_SESSION['info'] = $person;
                // $_SESSION["username"] = $_POST["username"];
                // $_SESSION['firstname'] = $userfirstname;

                header('location:dashboard.php');
            }
        } else {
            $message = "<label> WRONG</label>";
            echo $message;
        }

    }
    function logout()
    {
        session_destroy();
    }

}