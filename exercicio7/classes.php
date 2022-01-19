<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classes</title>
</head>
<body>
    <h1>Bem vindo a etapa de classes</h1>
    <?php
    
    class Cliente{
       public $nome="Carlos";
       public $saldo = 50;

       public function confirmarrecebimento(){
        echo  "<br/>Confirmado o recebimento";
      }
      public function pagarconta($valor){
        echo "<br/>Foi pago o valor de R$ ".$valor;
      }


    }
    $tempCliente = new Cliente();
    $tempCliente->nome ="WESLEY";
    $tempCliente->saldo = 100;
    $tempCliente->confirmarrecebimento();
    $tempCliente->pagarconta(300);

    echo "<br/>Nome do Cliente : ".$tempCliente->nome;
    echo "<br/>o Saldo : ".$tempCliente->saldo;



    ?>
</body>
</html>