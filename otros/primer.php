<head> 

</head> 
 
<body> 
  <?php 
  $valor = rand(1, 100); 
  echo "El valor sorteado es $valor<br>"; 
  if ($valor %2==0) { 
    echo "Es par"; 
  } else { 
    echo "Es impar"; 
  } 
  ?> 
</body> 
 
</html> 
