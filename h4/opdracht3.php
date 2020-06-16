<!doctype html>
<html lang="en">

<title>opdracht 3</title>
<head>

</head>
<body>

<?php

echo reverseString("siert");

function reverseString($orginalString) {
    $stringLenght = strlen($orginalString);
    $reversedString = "";
    for ($i = $stringLenght - 1 ; $i >= 0 ; $i--) {
        $reversedString .= substr($orginalString, $i, 1);

    }


    return $reversedString;
}

?>

</body>

</html>