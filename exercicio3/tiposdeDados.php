<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos De Dados</title>
</head>
<body>
    <?php

    $nome = "Luciano da costa macedo";
    var_dump($nome);
    if(is_string($nome)):
        echo "é uma string";
    else:
        echo "não é uma string";
    
    endif


    ?>
</body>
</html>