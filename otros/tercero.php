<html> 
<head> 
  <title>Problema</title> 
</head>  
<body> 
  <?php 
  $num = rand(1,5); 
  if ($num == 1) { 
echo $num;
echo "<br>";
    echo "Muy deficiente"; 
  } else { 
    if ($num == 2) { 
echo $num;
echo "<br>";
      echo "Insufuciente"; 
    } else {
 if ($num == 3) { 
echo $num;
echo "<br>";
      echo "Suficiente"; 
    } else {
 if ($num == 4) { 
echo $num;
echo "<br>";
      echo "Notable"; 
   } else {
echo $num;
echo "<br>"; 
      echo "Sobresaliente"; 
    } 
    } 
}
  } 
 
  ?> 
 
</body> 
 
</html>