<?php 

$num1 = array(10,20,30,40);

$num2 = array(50,60,70,80);




for ($i=0; $i < count($num1) ; $i++) { 
	$resp[$i] = $num1[$i] + $num2[$i]; 
}


echo "----------------- <br>";
for ($i=0; $i < sizeof($num2) ; $i++) { 
	echo $resp[$i] . "<br>";
}






 ?>