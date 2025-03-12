<html>
<head>
    <title>Problema</title>
</head>
<body>
<?php
$salario = rand(5000, 50000);
echo "Salario: $salario";
echo "<br>";

if ($salario < 10000) {
    echo "Sin impuestos";
}
if ($salario >= 10000 && $salario <= 20000) {
    echo "Impuesto: " . ($salario * 0.1);
}
if ($salario >= 20001 && $salario <= 35000) {
    echo "Impuesto: " . ($salario * 0.2);
}
if ($salario > 35000) {
    echo "Impuesto: " . ($salario * 0.3);
}
?>
</body>
</html>
