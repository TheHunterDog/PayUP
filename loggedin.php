<?php
include('lib/Db.php');
session_start();
// print_r($_SESSION);
// print_r($_SESSION['info']);
// echo $_SESSION['info'][0]['ID'];
echo ($_SESSION['info'][0]['First_Name']); // werkt wel
echo '</br>';

echo 'you currently have ';
echo ($_SESSION['info'][0]['Net_Worth'] . " euro");
echo '</br>';

echo 'your bank number is ';
echo ($_SESSION['info'][0]['ID']);
echo '</br>';



?>