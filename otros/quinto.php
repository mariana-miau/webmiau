<html>
<head></head>
<body>
<?php
$num1 = rand(1, 10);
$num2 = rand(1, 10);
$num3 = rand(1, 10);

echo  $num1;
echo "<br>";
echo  $num2;
echo "<br>";
echo  $num3;
echo "<br>";

if ($num1 == $num2 && $num2 == $num3) {
echo "<br>";
    echo "Equilátero: Todos sus lados son iguales.";
} elseif ($num1 == $num2 || $num2 == $num3 || $num1 == $num3) {
echo "<br>";
    echo "Isósceles: Dos lados iguales.";
} else {
echo "<br>";
    echo "Escaleno: Todos los lados diferentes.";
}
?>
</body>
</html>
