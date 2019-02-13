<?php
class menu
{
    function ShowMenu()
    {
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
    }
}



?>