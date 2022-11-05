<?php

// Programação Estruturada;

// Foi escolhido PHP pois é um Linguagem que por padrão foi feita para o Paradigma.

// Elementos básicos da Programação Estruturada (top-down)

// 1-> Sequência: de instruções ou sub-rotinas executadas em sequência

$a = 2;
$b = 1;
$c = $a + $b;
$d = $c + $b;

echo "Valor de d é: ".$d;


// 2-> Seleção/condicional: instruções são executadas ou não conforme o estado do programa

// If
if($d == 4)
	echo "<br> Verdadeiro, o valor de d é 4!";


// If + Else
if($d == 3)
	echo "<br> Verdadeiro, o valor de d é 3!";
else
	echo "<br> O valor de d não é 3...";


// If + Else If + Else

if($d == 3)
	echo "<br> Falso, o valor de d é 4!";
else if($d == 4)
	echo "<br> Verdadeiro, o valor de d é 4!";
else
	echo "<br> O valor de d não é 3 e também não é 4...";

// 3-> Iteração/repetição: instruções são executados até que o programa atinja um determinado estado

$x = 1;

//While
while($x <= 3) {
	echo "<br>O número é: $x";
  $x++;
}


//DoWhile
$x = 1;
do {
  echo "<br>O número é: $x";
  $x++;
} while ($x <= 3);


//For
for ($x = 1; $x <= 3; $x++) {
  echo "<br>O número é: $x";
}

//Foreach
$numeros = array(1, 2, 3);

foreach ($numeros as $x) {
  echo "<br>O número é: $x";
}


// 4-> Recursão: instruções executadas com chamadas auto-referenciadas até que certas condições sejam satisfeitas

function fatorial(x){
	if(x > 1){
		return x*fatorial(x-1);
	}
}

echo fatorial(5);