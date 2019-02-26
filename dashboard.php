<?php
if (!isset($_SESSION)) {
    session_start();
}
include('layout/header.php');
include('layout/navigation-middle.php');
echo ('your bankaccount number = ' . $_SESSION['info'][0]['ID']);
echo ('you have = ' . $_SESSION['info'][0]['Net_Worth']);
?>



<?php
include('layout/footer.php')
?> 