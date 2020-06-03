<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>h3 zwem opdracht</title>
<style>
         tr, td {
            border: solid 1px gray;
            border-collapse: collapse;
        }
    td {
        padding: 10px;
    }
    td.borderless{
        border: none;
    }

</style>
</head>

<body>

<?php

$zwemclubs = [
    "De spartelkuikens" => 25,
     "De waterbuffels" => 32,
     "Plonsmderin" => 11,
     "Bommetje" => 23,
];

echo '<table>';

foreach ($zwemclubs as $clubnaam => $ledenaantal) {
        echo '<tr>';
        echo '<td>'   .$clubnaam.  '</td>';
        echo '<td>'   .$ledenaantal.  '</td>';
        $aantal_plaatjes = floor($ledenaantal / 5);
        echo '<td>';
        for ($i = 0 ; $i < $aantal_plaatjes ; $i++)  {
            echo ' <img src="zwem.png">';

        }
        echo '</td>';
        echo '</tr>';
}


echo '</table>';


?>





</body>
</html>
