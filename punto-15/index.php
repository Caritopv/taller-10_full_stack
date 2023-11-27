<?php
include "./operations.php";
//Declaracion de datos de entrada
$n1=0;
$n2=0;
$option = 0;
$result=0;
echo "TALLER 10 Punto-15"

//PROCESO
$n1 = getNumber();
$n2 = getNumber();
$option = showMenu();

$result = opr( $n1, $n2, $option);
echo "El resultado de la operación es : $result"
  ?>