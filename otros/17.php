<html>
<head>
    <title>Problema</title>
</head>
<body>
<?php
$num = rand(1, 1000);
echo $num;
echo "<br>";

if ($num % 2 == 0) {
    echo "Par";
}
if ($num % 2 != 0) {
    echo "Impar";
}
if ($num % 5 == 0) {
    echo " - Múltiplo de 5";
}

$es_primo = true;
if ($num < 2) {
    $es_primo = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $es_primo = false;
            break;
        }
    }
}
if ($es_primo) {
    echo " - Primo";
}
?>
</body>
</html>
