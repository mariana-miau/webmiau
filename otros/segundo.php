<html> 
 
<head> 
  <title>Problema</title> 
</head> 
 
<body> 
  <?php 
  $valor = rand(1, 100); 
  echo "El valor sorteado es $valor<br>"; 
  if ($valor <= 12) { 
    echo "Es un niño"; 
  } else { 
    if ($valor < 17) { 
      echo "es un adolescente"; 
    } else { 
 if ($valor < 64) { 
      echo "es un adulto"; 
    } else { 
if ($valor <65) { 
      echo "es un adulto mayor"; 
 }
}
    } 
  } 
  ?> 
</body> 
 
</html>