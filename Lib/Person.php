<?php
class Person
{

    function getdataname($DBCONNECTION ,$ID)
    {
        $stmt = $DBCONNECTION->prepare("SELECT * FROM Payup_Users WHERE ID = :id");
        $stmt->bindParam(':id', $ID);
        $stmt->execute();
        return $stmt-> fetchColumn(1);
    }
}
 