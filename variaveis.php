<?php 

/*
print("Usando print para exibir na tela <br/>");

$data = "10 de março de 2026";
$salario = 850.00;
$cargo = "Estagiário";
$idade = 18;
$resultado = true;

echo "Arquivo criado em $data <br/>";

printf("Salário mínimo: R$ %.2f <br/>", $salario);

$texto = sprintf("%s recebe R$ %.2f por mês", $cargo, $salario*2);
 echo $texto;

if ($resultado) {
	echo "Verdadeiro <br/>"; 

	print("Data: $data <br/>
	Salario: $salario <br/>
	Cargo: $cargo <br/>
	Idade: $idade <br/>");

*/


/* 

	$nome = "Kaiky"; //variavel local no script

	//implementação de uma função

	function exibir() {
		$nome = "Okino";  //variavel local na função

		echo "Valor da variável dentro da função: ". $nome;

	}


exibir(); //chamada da função

echo "<br/> Valor da variável fora da função: ".$nome;

*/




$ano = 2026;

//implementação de uma função

function exibir() {
STATIC $ano;  //Definição da variável global
$ano++;
return $ano;
}


echo "<br/> Ano: " .$ano;
echo "<br/> Ano: " .exibir();
echo "<br/> Ano: " .exibir();
echo "<br/> Ano: ".$ano;

 ?>