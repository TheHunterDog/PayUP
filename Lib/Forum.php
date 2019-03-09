<?php
class forum
{
    function ShowForum($DATABASECONN, $TableName)
    {
        $stmt = $DATABASECONN->prepare("SELECT * FROM Forum");
        $stmt->execute();
        $forum = $stmt->fetchAll();
        $p = 0;
        for ($p = 0; $p < count($forum); $p++) {
            if ($forum[$p]['BindToPostID'] == null) {


                // if ($forum[$p]['BindToPostID'] == null) {
                echo ('<div class="Forum-Article" id=' . $forum[$p]['ID'] . '>');
                echo ('<p>' . htmlspecialchars($forum[$p]['who']) . ' said </br>' . htmlspecialchars($forum[$p]['what']) . '</br>' . 'on the time of ' . htmlspecialchars($forum[$p]['time']) . '</p>');
                echo ('<div class="comments" id=' . 'Forum-Article_' . $forum[$p]['ID'] . '>');
                echo ('<p> comments</p>');
                echo ('            <form action="forum.php" method="POST">
                <input type="text" name="comment" placeholder="Comment">
                <input type="submit" value="' . $forum[$p]['ID'] . '" name="submit_comment">
            </form>
');
            }
            for ($f = 0; $f < count($forum); $f++) {
                // for ($q = 0; $q < count($forum); $q++) {
                if ($forum[$p]['BindToPostID'] == $forum[$f]['ID']) {
                    // if (!is_null($forum[$q]['BindToPostID'])) {
                    // echo ('<script>document.getElementById(" Forum - Article_ "' . $forum[$p]['BindToPostID'] . ').innerHTML =' . htmlspecialchars($forum[$p][' who ']) . ' said </br> ' . htmlspecialchars($forum[$p][' what ']) . ' </br> ' . ' on the time of ' . htmlspecialchars($forum[$p][' time ']) . ' </p>  </script> ');
                    echo ('<p>' . htmlspecialchars($forum[$f]['who']) . ' said </br>' . htmlspecialchars($forum[$f]['what']) . '</br>' . 'on the time of ' . htmlspecialchars($forum[$f]['time']) . '</p>');
                    echo ('            <form action="forum.php" method="POST">
                <input type="text" name="comment" placeholder="Comment">
                <input type="submit" value="' . $forum[$f]['ID'] . '" name="submit_comment">
            </form>

');
                    // }
                }

                // }
            }
            // }
            echo ('</div>');
            echo ('</div>');
        }
    }


    // }

    function PostForum($username, $message, $DATABASECONN)
    {
        $stmt = $DATABASECONN->prepare("INSERT INTO `Forum` (`who`, `what`)
    VALUES (:username, :message)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
    }
    function PostComment($username, $message, $DATABASECONN, $bindtoID)
    {
        $stmt = $DATABASECONN->prepare("INSERT INTO `Forum` (`who`, `what` ,`BindToPostID`)
    VALUES (:username, :message ,:bindToPOST)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':bindToPOST', $bindtoID);

        $stmt->execute();
    }
}
