<?php
//Declaracion de datos de entrada
$membershipType = "";
$personNumber = 0;
const TIQUET_PRICE= 25000;

//PROCESO
echo "Digite el numero de personas a entrar a la bolera \n";
$personNumber = readline();

echo "Digite tipo de membresia \n";
$membershipType = readline();

$totalPrice = $personNumber * TIQUET_PRICE;
if ((strtoupper($membershipType) == "A" ||strtoupper($membershipType) == "B")) {
   $totalPay= (TIQUET_PRICE * $personNumber) * 0.7;
     echo "Total a cancelar es $totalPay \n";
}
else {
     $totalPay= (TIQUET_PRICE * $personNumber) ;
      echo "Total a cancelar es $totalPay \n";
}
?>