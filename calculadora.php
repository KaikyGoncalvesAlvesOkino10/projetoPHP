<?php 

$num1=10;
$num2=20;
$op=3;

switch ($op) {
	case 1: $resp = $num1 + $num2;
		$nomeOP = "Soma";
		break;
	
	case 2: $resp = $num1 - $num2;
		$nomeOP = "Subtração";
		break;
	
	case 3: $resp = $num1 / $num2;
		$nomeOP = "Divisão";
		break;
	
	case 4: $resp = $num1 * $num2;
		$nomeOP = "Multipliação";
		break;

	default:
		echo ("Sair");
		break;
}

echo "A $nomeOP de $num1 e $num2 = $resp";



 ?>