<?php
//CREAR FUNCION
function getNumber(){
  echo "Ingrese un numero para operar:\n";
  return readline();
}
function showMenu(){
  echo "Digite la operacion a realizar\n", 
      "1 para suma\n",
      "2 para resta\n",
      "3 para multiplicacion\n",
      "4 para division\n",": ";
  return readline();
}

function opr($x ,$y, $option){

  switch($option){

    case 1:
    return add($x, $y);
    case 2:
    return sub($x, $y);
    case 3:
    return dot($x, $y);
    case 4:
    return div($x, $y);
    default:
    echo "Opcion no valida";
    return 0;
  }
}
function add ($x, $y){
  return $x + $y;
}
function sub($x, $y){
  return $x - $y;
}

function dot($x, $y){
  return $x * $y;
}
function div($x, $y){
  return $x / $y;
}
