<?php

// Tipos de dados em PHP

// string
echo gettype('Erick Ferreira') . '<br>';

// number - integer, float(double)
echo gettype(2024) . '<br>';
echo gettype(12.34) . '<br>';

// boolean
echo gettype(true) . '<br>';
echo gettype(false) . '<br>';

// array
echo gettype(['a', 'b', 'c, 1, 2, 3']) . '<br>';

// object
class Person {}
echo gettype(new Person) . '<br>';

// null
echo gettype(null). '<br><br>';


/**
 * O PHP é case sensitive;
 * Inicia-se variáveis em PHP com '_' ou com letras;
 * Formas de se escrever variáveis: camelCase ou snake_case;
*/

$fullName = 'Erick Ferreira da Silva';
$ano_nascimento = 1986;

echo $fullName . '<br>';
echo $ano_nascimento . '<br><br>';


$name = 'Erick';
$myName = &$name; // '&' -> Passagem de valor por referência
$name = 'João';

echo $name . '<br>';
echo $myName . '<br>';