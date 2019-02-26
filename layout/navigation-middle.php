<nav class='nav-middle'>
    <?php
    if (!isset($Menu)) {
        // include('../Lib/Menu.php');
        include('Lib/Menu.php');
        // include('/Lib/Menu.php');
        $Menu = new menu();
    }
    $Menu->ShowMenuMiddle();
    ?>
</nav> 