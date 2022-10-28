<?php

function divide($a, $b)
{
    try {
        return $a / $b;
    } catch (\Throwable $th) {
        // throw $th;
        // throw new Exception("Une division par zéro ça n'éxiste pas !", 58);
        trigger_error("Une division par zéro ça n'éxiste pas !", E_USER_DEPRECATED);
        return "Une division par zéro ça n'éxiste pas !";
    }
}

// https://www.php.net/manual/en/errorfunc.constants.php

echo divide(10, 0);


// if ($_POST['data'] == '') {
//     throw new Exception("data can't be empty");
// }

?>


<form method="post">
    <input type="text" name="data">
    <input type="submit" value="Send">
</form>