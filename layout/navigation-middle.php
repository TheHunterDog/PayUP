<nav class='nav-middle'>
    <?php
    if (!isset($Menu)) {
        include('lib/Menu.php');
        $Menu = new menu();
    }
    $Menu->ShowMenuMiddle();
    ?>
</nav>