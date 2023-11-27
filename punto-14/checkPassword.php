<?php
//CREAR FUNCION
function checklen($x){
  $length = strlen($x);//el comando strlen es para para que el programa pueda leer cuantos caracteres digito el usuario en su contraseña.
  return strlen($x) >= 8;
}
function checkUpperLetter ($x){
  $arrayX = str_split($x); //str_split — Convierte un string en un array
   foreach ($arrayX as $letter) {
     if ($letter == strtoupper($letter)) {// valida si la letra es igual a la letra transformada en mayuscula
       return true;
     } 
   }
  return false;
}
function checkLowerLetter($x){
  $arrayX = str_split($x);
  foreach ($arrayX as $letter){
    if ($letter == strtolower($letter)){ //valida si la letra es igual a la letra transformada en minuscula
      return true;
    }
  }
      return false;
}
function checkNumber($x){
$arrayX = str_split($x);
foreach ($arrayX as $letter){
  if (is_numeric($letter)){ //is_numeric — Comprueba si una variable es un número o un string numérico
    return true;
  }
}
    return false;
}
