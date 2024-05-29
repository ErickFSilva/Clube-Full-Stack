<?php

/**
 * - Operadores de incremento e decremento
 * 
 * (++)pré-incremento e pós-incremento(++)
 * (--)pré-decremento e pós-decremento(--)
 * 
*/

$number = 10;

echo $number . ', ';
echo ++$number . ', '; // pré-incremento
echo $number++ . ', '; // pós-incremento

echo ' | ';

echo $number . ', ';
echo --$number . ', ';
echo $number-- . ', ';

echo $number;