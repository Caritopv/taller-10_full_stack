<?php
//Datos de entrada
$arrayNum =array();
$countNum=0;
echo "TALLER 10 Punto-13\n";
//proceso

for($i=1;$i<6;$i++){
    echo "Escriba el  numero $i del arreglo para sumar\n:";
    $arrayNum[]=readline();
 }
foreach($arrayNum as $num) {
   $countNum += $num; 
 }
echo "La suma de los numeros del arreglo es: ".$countNum;
?>