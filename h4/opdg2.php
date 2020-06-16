<!doctype html>
<html lang="en">
<head>
    <title>opdracht 2</title>
</head>
<body>

<?php

for ($i = -10 ; $i <= 30 ; $i++) {
    if (CheckIfDivisibleBy3($i)){
        $wellesnietes = "";
    }   else{
                $wellesnietes = " NIET ";
    }
            echo "{$i} is {$wellesnietes} deelbaar door 3.<br>\n";

}

function CheckIfDivisibleBy3($number){
    return $number % 3 == 0;

}



?>


</body>
</html>