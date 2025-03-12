<html>
<head>
    <title>Problema</title>
</head>
<body>
<?php
$mes = rand(1, 12);
echo $mes;
echo "<br>";
$meses_31 = [1, 3, 5, 7, 8, 10, 12];
$meses_30 = [4, 6, 9, 11];
if (in_array($mes, $meses_31)) {
echo "Enero, Marzo, Mayo, Julio, Agosto, Octubre, Diciembre";
echo "<br>";
echo "31 días";
}
if (in_array($mes, $meses_30)) {
echo "Abril, Junio, Septiembre, Noviembre";
echo "<br>";
echo "30 días";
}
if ($mes == 2) {
echo "Febrero";
echo "<br>";
echo "28 días (o 29 si el año es bisiesto)";
}
?>
</body>
</html>
