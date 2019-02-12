<?php
include('layout/header.php');
include('Lib/Db.php');
$db = new Db();
$conn = $db->getConntectie();
?>
<h1>hello world</h1>
<?php
include('layout/footer.php');

?>