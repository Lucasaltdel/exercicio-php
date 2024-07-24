<?php
$altura=1.72;
$peso=49;
$calc1= $altura**2;
$calc2= $peso/$calc1;
if ($calc2 < 18.5){
	echo " você está abaixo do peso";
}
if ($calc2 > 18.5 && $calc2 < 24.9 ){
	echo " você está com peso normal";
}
if ($calc2 > 24.9 && $calc2 < 30 ){
	echo " você está acima do peso";
}
  if ($calc2 > 30 ){
	echo " você está obeso";
}
echo " o seu imc é ".number_format($calc2, 2, '.', '')
?>