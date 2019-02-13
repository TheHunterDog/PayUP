<?php
class forum
{
    function ShowForum($DATABASECONN, $TableName)
    {
        $stmt = $DATABASECONN->prepare("SELECT * FROM Forum");
        $stmt->execute();
        $forum = $stmt->fetchAll();
        for ($p = count($forum) - 1; $p >= 0; $p--) {
            echo ('<div class="Forum-Article" id=' . $forum[$p]['ID'] . '>');
            echo ('<p>' . htmlspecialchars($forum[$p]['who']) . ' said </br>' . htmlspecialchars($forum[$p]['what']) . '</br>' . 'on the time of ' . htmlspecialchars($forum[$p]['time']) . '</p>');
            echo ('</div>');
        }

    }
    function PostForum($username, $message, $DATABASECONN)
    {
        $stmt = $DATABASECONN->prepare("INSERT INTO `Forum` (`who`, `what`)
    VALUES (:username, :message)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
    }

}


?>