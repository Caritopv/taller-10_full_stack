<?php
//Declaracion de datos de entrada
$membershipType = " ";
$personNumber = 0;
const TIQUET_PRICE= 25000;

//Si el tipo es ‘A’  el 30% del total 
//Si es tipo es ‘B’ el 25% del total 
//Si es tipo es ‘C’el 10%  del total 
//Si es tipo es ‘D’ el 5% del total 
echo "TALLER 10 Punto 8 \n";

//PROCESO
echo "Digite el numero de personas a entrar a la bolera \n";
$personNumber = readline();

echo "Digite tipo de membresia \n";
$membershipType = readline();
$totalPay= (TIQUET_PRICE * $personNumber);

//SALIDA
switch (strtoupper($membershipType)) {
  case "A":
      $totalPay *= 0.7;
        break;
  case "B":
      $totalPay *= 0.75;
       break;
   case "C":
      $totalPay *= 0.9;
       break;
  case "D":
      $totalPay *= 0.95;
       break;
  default:

  }
echo "Valor a pagar: $".number_format ($totalPay,2,",",".");