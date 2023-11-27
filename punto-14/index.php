<?php
include "./checkPassword.php";
echo "Bienvenido al TALLER 10 Punto-14  Validador de contraseña\nInicie sesión ingresando su nombre de usuario y contraseña \n";

$user = readline ("Ingrese nombre del usuario: \n");
$pass = readline ("Ingrese contraseña: \n");

//process
if (checklen($pass)) {
  if(checkUpperLetter($pass)){
    if(checkLowerLetter($pass)){
      if(checkNumber($pass)){
        echo " $user Su contraseña es segura\n"; 
    }
      else{ 
        echo "La contraseña debe tener por lo menos un número \n";}
    } else {
      echo "La contraseña debe tener por lo menos una minúscula \n";}
  } else {
    echo "La contraseña debe tener por lo menos una mayúscula \n";}
} else {
  echo "La contraseña debe tener 8 caracteres o mas \n";}
 ?>