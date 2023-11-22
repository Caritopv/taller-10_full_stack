<?php
//declaración de variables
$number = 0;
echo "TALLER 10 Punto-12\n";

//proceso
echo "Digite el numero a multiplicar \n".":";
 $number = readline();
echo "Tabla multiplicar de 0 a 30 del número"." ".$number."\n";
for($i=0;$i<=30;$i+=1){
 $result = $number * $i;
  echo $number." x ". $i . " = " .$result."\n";
    }
?>