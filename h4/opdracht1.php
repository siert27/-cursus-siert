<!doctype html>
<html lang="en">
<head>


<title>opdracht 1 h4 php</title>
</head>
<body>

<?php


for ($i = -10 ; $i < 40 ; $i++) {
    calculateFahrenheitToCelsius($i);


}
function calculateFahrenheitToCelsius($celsius){
        $farenheit = $celsius * 1.8 + 32;
        echo "{$celsius} degrees celsius amounts to {$farenheit} degrees fahrenheit.<br>\n";

}



?>



</body>
</html>
