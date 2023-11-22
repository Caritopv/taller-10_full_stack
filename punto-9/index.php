<?php
//Declaracion de variables
$number = 0;
$i= 0;

echo "TALLER 10 Punto-9 \n";
//proceso
echo "Digite el numero a multiplicar \n";
 $number = readline();
while ($i<=30){
 $result = $number * $i;
  echo $number." x ". $i . " = " .$result."\n";
  $i++;
  }
?>