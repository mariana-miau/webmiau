<html> 
<head> 
  <title>Problema</title> 
</head>  
<body> 
  <?php 
  $num = rand(1,12); 
echo $num;
echo "<br>";
  if ($num == 1 or $num == 2 or $num == 12 ) { 
    echo "Invierno: Diciembre (12), enero(1), febrero(2)"; 
  } else { 
   if ($num == 3 or $num == 4 or $num == 5){
echo "Primavera: Marzo (3), Abril (4), Mayo (5)"; 
    } else {
if ($num == 6 or $num== 7 or $num == 8){
echo "Verano: Junio (6), Julio (7), Agosto (8) ";  
    } else {  
echo "Otoño: Septiembre (9), Octubre (10), Noviembre (11) "; 
    } 
    } 
  } 
 
  ?> 
 
</body> 
 
</html>