<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$num=rand(-10,40);
echo$num;
echo"<br>";
if($num>=-10 && $num<=0){
echo"frio extremo";
}
if($num>=1 && $num<=10){
echo"frio";
}
if($num>=11 && $num<=20){
echo"templado";
}
if($num>=21 && $num<=30){
echo"calido";
}
if($num>=31 && $num<=40){
echo"calor extremo";
}
 ?>
</body>
</html>