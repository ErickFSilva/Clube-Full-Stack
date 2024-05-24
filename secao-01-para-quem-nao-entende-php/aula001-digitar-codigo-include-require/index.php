<?php

// include: Exibe o conteúdo do arquivo solicitado e em caso de erro na chamada, continua exibindo o restante da página;

// include_once: inclue o resultado do arquivo chamado apenas uma vez;

// required: Exibe o conteúdo do arquivo solicitado e em caso de erro na chamada, interrompe o restante da página;

// require_once: inclue o resultado do arquivo chamado apenas uma vez e também apenas retorna o erro uma vez;


require_once './person.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - PHP</title>
</head>
<body>

<h1>Olá, <?php echo $name ?></h1>
    
</body>
</html>