<?php
//Declaracion de datos de entrada
$n1=0;
$n2=0;
$operation = 0;
$result=0;

//PROCESO
echo "Digite el primer numero \n";
$n1 = readline();

echo "Digite el segundo numero\n";
$n2 = readline();
echo "Digite la operacion a realizar\n", "1 para suma\n", "2 para resta\n", "3 para multiplicacion\n", "4 para division\n",": ";
$operation = readline();
//SALIDA
switch ($operation) {
  case 1:
      $result = $n1+$n2;
        break;
  case 2:
      $result = $n1-$n2;
       break;
   case 3:
      $result= $n1*$n2;
       break;
  case 4:
      $result = $n1/$n2;
       break;
  
  default:

  }
echo "El resultado de la operacion es:\n".($result);