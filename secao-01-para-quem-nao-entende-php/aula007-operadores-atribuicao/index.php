<?php

// Operador de atribuição (=)
// Operador de concatenação no PHP (.)
$name = 'Alexandre';
$name = $name . ' Cardoso '; // Concatenando
$name .= 'Fulano'; // Concatenando

echo $name;
echo ' | ';


// Concatenação com operadores aritméticos
$number = 10;

$number += 10;
echo $number;

$number -= 10;
echo ', ' . $number;

$number *= 10;
echo ', ' . $number;

$number /= 10;
echo ', ' . $number;

$number %= 10;
echo ', ' . $number;
