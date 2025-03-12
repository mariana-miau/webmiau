<html> 
<head> 
  <title>Problema</title> 
</head>  
<body> 
  <?php 
  $num = rand(1,3); 
  if ($num == 1) { 
    echo "$num = Piedra";
} 
  if ($num == 2) { 
      echo "$num = Papel"; 
}
 if ($num == 3) { 
      echo "$num = Tijera"; 
}
  ?> 
</body>
</html>