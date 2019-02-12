<?php
class payment
{
    function executepayment($from, $to, $amount, $description)
    {
        $payernewsal = $from - $amount;
        $updatepayer = $dbh->prepare("UPDATE Payup_Users SET Net_Worth = :newnetpayer WHERE ID = :id");
        $updatepayer->bindParam(':newnetpayer', $payernewsal);
        $updatepayer->bindParam(':id', $from);
        $updatepayer->execute();

        echo ('quary1');
        $getinforeciver = $dbh->prepare("SELECT * FROM Payup_Users WHERE ID = :id");
        $getinforeciver->bindParam(':id', $to);
        $getinforeciver->execute();
        $getinforeciverinfo = $getinforeciver->fetchAll();
        echo ('quary2');

        $newsalreciver = $to + $amount;
        $updatereciver = $dbh->prepare("UPDATE Payup_Users SET Net_Worth = :newnetreciver WHERE ID = :id");
        $updatereciver->bindParam(':newnetreciver', $newsalreciver);
        $updatereciver->bindParam(':id', $to);
        $updatereciver->execute();

        $history = $dbh->prepare("INSERT INTO `Payup_Transactionhistory` (`From_bankaccountID`, `To_bankaccountID`, `Value`, `why`) 
                                                            VALUES (':from', ':to', ':value',':description');");
        $history->bindParam(':to', $_POST['tobankaccount']);
        $history->bindParam(':from', $_SESSION['info']['ID']);
        $history->bindParam(':value', $_POST['howmuch']);
        $history->bindParam(':description', $_POST['description']);
        echo ('quary3');

        echo ('end');
    }
}
