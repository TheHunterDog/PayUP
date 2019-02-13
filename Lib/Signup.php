<?php
class signup
{
    function SignUPprocess($DBCONNECTION, $Firstname, $Lastname, $Password, $Username)
    {
        if ($this->checkifexistsinDB($DBCONNECTION)) {
            $this->addinDB($DBCONNECTION, $Firstname, $Lastname, $Password, $Username);
            return true;
        } else {
            return false;
        }

    }
    function checkifexistsinDB($DBCONNECTION)
    {
        $checkifalreadyinuse = $DBCONNECTION->prepare("SELECT * FROM Payup_Users WHERE Username = :username");
        $checkifalreadyinuse->bindParam(':username', $_POST['username']);
        $checkifalreadyinuse->execute();
        $count = $checkifalreadyinuse->rowCount();
        if ($count > 0) {
            return false;
        }
        return true;
    }
    function addinDB($DBCONNECTION, $Firstname, $Lastname, $Password, $Username)
    {
        $stmt = $DBCONNECTION->prepare("INSERT INTO Payup_Users (ID, First_Name, Last_Name, Password, Net_Worth, Username)
VALUES (null, :firstname, :lastname, :pwd, '1 ',:username)");
        $stmt->bindParam(':firstname', $Firstname);
        $stmt->bindParam(':pwd', password_hash($Password, PASSWORD_DEFAULT));
        $stmt->bindParam(':lastname', $Lastname);
        $stmt->bindParam(':username', $Username);
        $stmt->execute();
        echo ('it is done');
        // $person = $stmt->fetchAll();
        // $_SESSION['user'] = $person;

    }
}

?>