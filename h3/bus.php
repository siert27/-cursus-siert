<?php



?>
<!DOCTYPE html>
<html>
<head>
    <title>  PHP opdracht</title>
</head>
<body>
<?php
$leeftijd = 2;
$bedrag =10;
if($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}
else{
    if ($leeftijd < 13) {
        $bedrag = $bedrag * 0.5;
    }
else{
    if ($leeftijd < 4) {
        $bedrag = $bedrag * 0.0;
    }
}
}



 echo $bedrag;
?>
</body>
</html>


