<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança em php</title>
</head>
<body>
    <h1>Herança em php</h1>
    <?php
    
    class Veiculo{
        public $type;
        public $modelo;
        public $cor;
        public $ano;

    public function andou(){
        echo "Andou<br>";

    }

    public function acelerou(){
        echo "acelerou";
    }
    }

    class Moto extends Veiculo{

    }


    $veiculos= new Veiculo();
    $veiculos->type="Carro";
    $veiculos ->modelo = "yonda";
    $veiculos ->cor= "azul";
    $veiculos ->ano=2000;

    echo "o typo é : " .$veiculos->type. "<br>";
    echo "o modelo é : " .$veiculos->modelo. "<br>";
    echo "A cor é : " .$veiculos->cor."<br>";
    echo "O ano é : " .$veiculos ->ano. "<br><br>";

    $veiculos= new Moto();
    $veiculos->type="moto";
    $veiculos ->modelo = "fiat";
    $veiculos ->cor= "azul";
    $veiculos ->ano=2000;

    echo "o type é : " .$veiculos->type. "<br>";
    echo "o modelo é : " .$veiculos->modelo. "<br>";
    echo "A cor é : " .$veiculos->cor."<br>";
    echo "O ano é : " .$veiculos ->ano;


    ?>
</body>
</html>