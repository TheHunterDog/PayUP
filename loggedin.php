<?php
include('DB.php');

print_r($_SESSION['info']);

echo 'welcome ' + ($_SESSION['info'][0][1]); // werkt niet
echo ($_SESSION['info'][0]['First_Name']); // werkt wel
echo '</br>';


echo 'you currently have ';
echo ($_SESSION['info'][0]['Net_Worth']);
echo '</br>';


?>