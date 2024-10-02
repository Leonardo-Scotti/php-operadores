<?php
// echo "<h1>Operadores PHP</h1><hr>";
echo "<h1>Operadores Aritiméticos</h1>";
$numeroA = 10;
$numeroB = 5;
//Operador Soma
echo "<h3>Operador <strong>SOMA</strong></h3>";
$soma = $numeroA + $numeroB;
echo " A soma de ".$numeroA." e ".$numeroB." é igual a ".$soma;
echo "<br><hr><br>";
//Operador Subtração
echo "<h3>Operador de <strong>SUBTRAÇÃO</strong></h3>";
$subtrai = $numeroA - $numeroB;
echo "Ao subtrair {$numeroA} de número {$numeroB} o resultado é: {$subtrai}";
echo "<br><hr><br>";
//Operador de Multiplicação
echo "<h3>Operador de <strong>MULTIPLICAÇÃO</strong></h3>";
$multiplica = $numeroA * $numeroB;
echo "Ao multiplicar {$numeroA} e {$numeroB} o resultado é: {$multiplica}";
echo "<br><hr><br>";
//Operador de Divisão
echo "<h3>Operador de DIVISÃO</h3>";
$divide = $numeroA / $numeroB;
echo "Ao dividir {$numeroA} por {$numeroB} o resultado é: {$divide}";
echo "<br><hr><br>";
//Operador de Módulo %
echo "<h3>Operador Módulo %</h3>";
$modulo = $numeroA % $numeroB;
echo "O módulo de porcentagem de {$numeroA} por {$numeroB} é: {$modulo}";
echo "<br><hr><br>";
//Operador de Exponenciação
echo "<h3>Operador de Exponenciação</h3>";
$expo = $numeroA ** $numeroB;
echo "A exponenciação de {$numeroA} por {$numeroB} é: {$expo}";