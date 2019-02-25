<?php
class menu
{
    function ShowMenuTop()
    {
        echo ('<div class="nav-top">');
        if (isset($_SESSION['info'])) {
            echo ('<a href="dashboard.php">');
            echo ('<p>Dashboard</p>');
            echo ('</a>');
            echo ('<a href="forum.php">');
            echo ('<p>forum</p>');
            echo ('</a>');
            echo ('<a href="logout.php">');
            echo ('<p>logout</p>');
            echo ('</a>');


        } else {
            echo ('<a class="signup" href="signup.php">');
            echo ('<p>Sign Up</p>');
            echo ('</a>');
            echo ('<a class="login" href="login.php">');
            echo ('<p>Login</p>');
            echo ('</a>');
        }
        echo ('</div>');
    }



    function ShowMenuMiddle()
    {
        if (isset($_SESSION['info'])) {
            echo ('<a href="dashboard.php">');
            echo ('<p>Dashboard</p>');
            echo ('</a>');
            echo ('<a href="forum.php">');
            echo ('<p>forum</p>');
            echo ('</a>');
            echo ('<a href="logout.php">');
            echo ('<p>logout</p>');
            echo ('</a>');


        } else {
            echo ('<a class="signup" href="signup.php">');
            echo ('<p>Sign Up</p>');
            echo ('</a>');
            echo ('<a class="login" href="login.php">');
            echo ('<p>Login</p>');
            echo ('</a>');
        }
    }
    function ShowMenuFooter()
    {
        echo ('<a href="forum.php">');
        echo ('<p>Privacy</p>');
        echo ('</a>');
        echo ('<a href="logout.php">');
        echo ('<p>AVG</p>');
        echo ('</a>');
        echo ('<a href="dashboard.php">');
        echo ('<p>contact</p>');
        echo ('</a>');
        echo ('<a href="forum.php">');
        echo ('<p>about us</p>');
        echo ('</a>');
        if (isset($_SESSION['info'])) {
            echo ('<a href="dashboard.php">');
            echo ('<p>Dashboard</p>');
            echo ('</a>');
            echo ('<a href="forum.php">');
            echo ('<p>forum</p>');
            echo ('</a>');
            echo ('<a href="logout.php">');
            echo ('<p>logout</p>');
            echo ('</a>');


        } else {
            echo ('<a class="signup" href="signup.php">');
            echo ('<p>Sign Up</p>');
            echo ('</a>');
            echo ('<a class="login" href="login.php">');
            echo ('<p>Login</p>');
            echo ('</a>');
        }
    }

}

?>