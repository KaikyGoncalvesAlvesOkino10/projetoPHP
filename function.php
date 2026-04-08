<?php 

//Criando uma função em php

function somaValor() {
	echo "Somando...";
}


// Função com parâmetro
function imprimirNome ($nome) {
	echo "<br/> Olá mundo $nome";
}

function somar ($num1, $num2) {
	return $num1+$num2;
}

//Executando a função
somaValor();
imprimirNome(Etecia);
echo("<br/>");

$resultado = somar(10.50, 20.0);
echo "O resultado da soma é $resultado";
echo "<br/> O resultado direto chamado função: " .somar(30.50);




 ?>