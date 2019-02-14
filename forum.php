<?php
if (!isset($_SESSION)) {
    session_start();
}
include('lib/Db.php');
include('lib/Forum.php');
$Db = new Db();
$conn = $Db->getConntectie();
$forum = new forum();

if (isset($_POST['submit'])) {
    $forum->PostForum($_SESSION['info'][0]['Username'], $_POST['message'], $conn);
}
if (isset($_POST['submit_comment'])) {
    echo ($_SESSION['info'][0]['Username']);
    echo ($_POST['comment']);
    echo ($_POST['submit_comment']);
    $forum->PostComment($_SESSION['info'][0]['Username'], $_POST['comment'], $conn, $_POST['submit_comment']);
    print_r($_POST);
}
include('layout/header.php');


include('layout/navigation.php');
?>


            <div>
            <form action="forum.php" method="POST">
                <input type="text" name="message" placeholder="subject">
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