<?php
session_start();
include('lib/Db.php');
include('lib/Forum.php');
$Db = new Db();
$conn = $Db->getConntectie();
$forum = new forum();

if (isset($_POST['submit'])) {
    $forum->PostForum($_SESSION['username'], $_POST['message'], $conn, 'Forum');
}

include('layout/header.php');


include('layout/navigation.php');
?>


            <div>
            <form action="forum.php" method="POST">
                <input type="text" name="message">
                <input type="submit" value="SUBMIT" name="submit">
            </form>
        </div>
    <div class="Forum-Whole-Wrapper" id="main">
        <?php
        $forum->ShowForum($conn, 'Forum');
        ?>
    </div>
<?php
include('layout/footer.php')
?>