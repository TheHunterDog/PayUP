<?php

class form
{
    function display_forum($value, $youraccount, $description)
    {
        echo '<form action="../Middleman.php" method="post">
    <input hidden type="text" name="value" value="' . $value . '">
    <input hidden type="text" name="destination" value="' . $youraccount . '" id="">
    <input hidden type="text" name="description" value="' . $description . '" id="">
    <input hidden type="text" name="return" value="' . $_SERVER['REQUEST_URI'] . '" id="">
    
    <input type="submit" value="send" name="send">
</form> ';
    }
}
