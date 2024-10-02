<?php
    echo "<h1>Operadores Relacionais</h1>";
    $valorA = 10;
    $valorB = 5;
    $valorC = 10;
    echo "Valores de referência: A={$valorA} B={$valorB} C={$valorC}";
    echo "<br><hr><br>";
    //Operador de Igualdade (==)
    echo "<h3>Igualdade: == </h3>";
    if($valorA == $valorC){
        $igual = 'verdadeiro';
    }else{
        $igual = 'falso';
    }
    echo "Na comparação se {$valorA} == {$valorC} o resultado é: {$igual}";
    echo "<br><hr><br>";
    //Operador Diferente de (!=)
    echo "<h3>Diferente de: !=</h3>";
    if($valorA != $valorC){
        $igual = 'verdadeiro';
    } else {
        $igual = 'falso';
    }
    echo "Na comparação se {$valorA} != {$valorC} o resultado é: {$igual}";
    echo "<br><hr><br>";
    //Operador de Idêntico (===)
    echo "<h3>Idêntico a: ===</h3>";
    if($valorA === $valorB){
        $igual = 'verdadeiro';
    }else{
        $igual = 'falso';
    }
    echo "Na comparação {$valorA} === {$valorB} vemos que o resultado é: {$igual}";
    echo "<br><hr><br>";
    //Operador de Não idêntico (!==)
    echo "<h3>Não idêntico a: !==</h3>";
    if($valorA !== $valorC){
        $igual = 'verdadeiro';
    }else{
        $igual = 'falso';
    }
    echo "Na comparação {$valorA} !== {$valorB} vemos que o resultado é: {$igual}";
    echo "<br><hr><br>";
    //Operador Maior que (>)
    echo "<h3>Maior que: ></h3>";
    if($valorA > $valorB){
        $igual = 'verdadeiro';
    }else{
        $igual = 'falso';
    }
    echo "Na comparação {$valorA} > {$valorB} vemos que o resultado é: {$igual}";
    echo "<br><hr><br>";
    //Operador Maior ou igual a (>=)
    echo "<h3>Maior ou igual a: >=</h3>";
    if($valorA >= $valorC){
        $igual = 'maior ou igual';
    }else{
        $igual = 'menor';
    }
    echo "Ao ver se {$valorA} >= {$valorC} vemos que é: {$igual}";


