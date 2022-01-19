<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funçõens em php</title>
</head>
<body>
    <h1>Bem vindo as Funções</h1>
    <?php
    /*
    ///declarando uma função em php
    function function_name()
    {
    //code
     }
     */
/*
    function diga_ola()
    {
      ////imprimir algo da função
      echo "ola";
    }
    
    //chamar a função
    diga_ola();
*/


// login function with two parameters
/*
function login($usuario, $senha)
{
  // this fuction is printing username and password
  echo "Ola, o nome do usuario é $usuario e a senha és  $senha </br>";
}

login('luciano',"12345")
*/


// creating anonymous function
$anonima = create_function('$a,$b', "return \$a + \$b;");
echo $anonima(2,3);
 


?>
</body>
</html>