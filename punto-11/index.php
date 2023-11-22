<?php
//Declaracion de variables
//mostrar numeros pares del 1 al 100
$sum =0;
echo "TALLER 10 Punto-11 \nNúmeros pares del 1 al 100 \n" ;

//process
for($i=0;$i<=100;$i+=2){
   echo $i . "-";
  $sum += $i;
}
echo "\nLa sumatoria de numeros pares hasta el 100 es : ".$sum;
?>