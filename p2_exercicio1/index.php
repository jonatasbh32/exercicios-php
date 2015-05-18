<?php


$limite = 100;
$i = 0;
$array = array();
$nunmero = 1;

while($limite > $i){
$array[$i] = $nunmero;
$i++;
$nunmero++;

if($nunmero % 2 == 0){

	echo "<b><font color='#FF0000'>O numero: ".$nunmero. " é par"."</b></font><br/>";

} else {
	echo "<b><font color='#0000FF'>O numero: ".$nunmero. " é impar"."</b></font><br/>";
}

 
}


?>