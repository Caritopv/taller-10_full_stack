<?php
//Declaracion de variables
//mostrar numeros impares del 1 al 100
$sum =0;
echo "TALLER 10 Punto-11 \nNúmeros impares del 1 al 100 \n" ;

//process
for($i=1;$i<=100;$i+=2){
   echo $i . " ";
  $sum += $i;
}
echo "\n\nLa sumatoria de numeros impares hasta el 100 es : ".$sum;
?>