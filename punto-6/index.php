<?php
// INPUTS
$name = "";
$age=0;

// PROCESS
echo "Digite su nombre  \n";
$name= readline();
 echo "Digite su edad  \n";
$age= readline();

if ($age >= 18) {
   echo $name." "."Usted es mayor de edad  \n";
} else 
  echo $name." "."Usted es menor de edad  \n";
?>