<?php

class Db
{
    private $dbh;

    function getConntectie()
    {
        $host = 'localhost';
        $port = 3306;
        $user = 'deb120613_main';
        $pass = '4kM8e54vz';
        $db = 'deb120613_main';
        try {
            // echo ('Db connecting');
            $this->dbh = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';port=' . $port, $user, $pass) or die("SQL VERBINDING MISLUKT!!");
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo ('Db-conn succes');
        } catch (PDOException $error) {
            $message = $error->getMessage();
            echo ($message);
        }
        return $this->dbh;
    }
}
