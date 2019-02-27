<?php
if (!isset($Menu)) {
    include('Lib/Menu.php');
    $Menu = new menu();
}
$Menu->ShowMenuTop();
