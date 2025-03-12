<html>
<head>
    <title>Problema</title>
</head>
<body>
<?php
$peso = rand(40, 120);
$altura = rand(140, 200) / 100;
$imc = $peso / ($altura * $altura);

echo "Peso: $peso kg, Altura: $altura m";
echo "<br>";

if ($imc < 18.5) {
    echo "Bajo peso";
}
if ($imc >= 18.5 && $imc <= 24.9) {
    echo "Peso normal";
}
if ($imc >= 25 && $imc <= 29.9) {
    echo "Sobrepeso";
}
if ($imc >= 30) {
    echo "Obesidad";
}
?>
</body>
</html>
