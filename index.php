<?php
if (!isset($_SESSION)) {
    session_start();
}
include('layout/header.php');
include('layout/navigation-top.php')

?>
<div class="hero" id="Hero">
    <div class="text-wrapper">
        <h1>PayUP</h1>
    </div>
</div>
<?php
include('layout/navigation-middle.php');
?>
<div class="sections-index">
<div class="article-sections-index">
    <h3>Why us</h3>
    <p>Why us ?, we arent talented people we arent intressted in money and neither your data we just wanted to make something we and others can use</p>
</div>
<div class="article-sections-index">
    <h3>about us</h3>
    <p>well actually about me, there issn't a team just me</p>
</div>
<div class="article-sections-index">
    <h3>contact</h3>
    <p>well how about a no ?</p>
</div>


</div>
<?php
include('layout/footer.php');
?>