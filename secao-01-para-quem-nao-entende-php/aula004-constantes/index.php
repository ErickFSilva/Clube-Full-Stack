<?php

// Variáveis: podemos alterar o seu valor
$name = 'Alexandre';
$name = 34;
$name = 'João';


// Constantes: não podemos alterar o seu valor
define('NAME', 'Alexandre');
define('NAME2', 'Carlos');

// Funções mágicas do PHP
function teste()
{
    echo __FUNCTION__;
    // echo __METHOD_;
    echo DIRECTORY_SEPARATOR;
}


//
if (defined('NAME')) {
    $definido = 'Nome foi definido';
    echo $definido;
}

// Pegar todas as cosntantes do PHP
$cons = get_defined_constants(true);
var_dump($cons);


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <p><?= $name ?></p>
    <p><?= NAME ?></p>
    <p><?= NAME2 ?></p>
    <p><?= teste() ?></p>

</body>

</html>