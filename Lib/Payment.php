<?php
class payment
{
    function executepayment($from, $to, $amount, $description, $DBCONNECTION)
    {
        $payment = new payment;
        //gets data from database
        $toperson = $payment->getperson($to, $DBCONNECTION);
        $fromperson = $payment->getperson($from, $DBCONNECTION);
        //does bunch of things
        $payernewsal = $fromperson[0]['Net_Worth'] - $amount;
        $updatepayer = $DBCONNECTION->prepare("UPDATE Payup_Users SET Net_Worth = :newnetpayer WHERE ID = :id");
        $updatepayer->bindParam(':newnetpayer', $payernewsal);
        $updatepayer->bindParam(':id', $fromperson[0]['ID']);
        $updatepayer->execute();

        echo ('quary1');
        $getinforeciver = $DBCONNECTION->prepare("SELECT * FROM Payup_Users WHERE ID = :id");
        $getinforeciver->bindParam(':id', $toperson[0]['ID']);
        $getinforeciver->execute();
        $getinforeciverinfo = $getinforeciver->fetchAll();
        echo ('quary2');

        $newsalreciver = $toperson[0]['Net_Worth'] + $amount;
        $updatereciver = $DBCONNECTION->prepare("UPDATE Payup_Users SET Net_Worth = :newnetreciver WHERE ID = :id");
        $updatereciver->bindParam(':newnetreciver', $newsalreciver);
        $updatereciver->bindParam(':id', $toperson[0]['ID']);
        $updatereciver->execute();

        $history = $DBCONNECTION->prepare("INSERT INTO Payup_Transactionhistory (From_bankaccountID, To_bankaccountID, Value, why)
                                                                             VALUES (:fromperson, :toperson, :value, :description)");

        $history->bindParam(':fromperson', $fromperson[0]['ID']);
        $history->bindParam(':toperson', $toperson[0]['ID']);
        $history->bindParam(':value', $amount);
        $history->bindParam(':description', $description);
        $history->execute();
        echo ('quary3');

        echo ('end');

    }
    function getperson($to, $DBCONNECTION)
    {
        $oldnetworth = $DBCONNECTION->prepare("SELECT * FROM Payup_Users WHERE ID = :id");
        $oldnetworth->bindParam(':id', $to);
        $oldnetworth->execute();
        $oldnetworthresult = $oldnetworth->fetchAll();
        print_r($oldnetworthresult);
        return $oldnetworthresult;
    }



}
