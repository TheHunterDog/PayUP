<?php
include('DB.php');
if (empty($_POST["username"]) || empty($_POST["password"])) {
    $message = '<label> all fields are requirded</label>';
    echo $message;

} else {
    $query = "SELECT * FROM Users WHERE Username = :username AND Password = :password";
    $statement = $dbh->prepare($query);
    $statement->execute(
        array(
            'username' => $_POST["username"],
            'password' => password_hash($_POST["password"])
        )
    );

    $result = $run->fetchAll();
    $userfirstname = $result['firstname'];
    $count = $statement->rowCount();
    if ($count > 0) {
        $_SESSION['key'] = rand(0, 9999999999999999999999999999999999999);
        echo 'good';
        $_SESSION["username"] = $_POST["username"];
        $_SESSION['firstname'] = $userfirstname;
        header('location:succes.php');
    } else {
        $message = "<label> WRONG</label>";
        echo $message;
    }
    echo $message;
}
?>