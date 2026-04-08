<?php 

$num1 = 10;
$num2 = 0;
$op = 4;

function somar ($num1, $num2) {
	return $num1+$num2;
}


function subtrair ($num1, $num2) {
	return $num1-$num2;
}

function multiplicar ($num1, $num2) {
	return $num1*$num2;
}

function dividir ($num1, $num2) {
	if ($num2 == 0) {
		return "Erro: não é possivél dividir por zero";
	}

	return $num1/$num2;

}



switch ($op) {
	case 1: echo somar ($num1, $num2);
		break;
	
	case 2: echo subtrair ($num1, $num2);
		break;
	
	case 3: echo multiplicar ($num1, $num2);
		break;
	
	case 4: echo dividir ($num1, $num2);
		break;

	default:
		echo ("Operação inválida");
		
}






 ?>