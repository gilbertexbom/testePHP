<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>


<?php

        $x = 5985;

        var_dump($x);

        class Banana{
            //Atributos
            public $cor;
            public $preco;
    
    
            public function __construct($cor, $preco){
                $this -> cor = $cor;
                $this -> preco = $preco;
            }
    
    
            public function exibirObjeto(){
                return "<br> Minha banana é " . $this -> cor . " e vale R$ " . $this -> preco . "!<br>";
            }
    
        }
    


        echo "<marquee> Texto </marquee>";
        echo "<br> <br>";
        PRINT(" -- Banana 1 -- ");
        $banana = new Banana("Azul", 5.75);
        $banana2 = new Banana("Amarela", 7.87);
        $banana3 = new Banana("Roxa", 7.21);

        echo $banana -> exibirObjeto();
        echo $banana2 -> exibirObjeto();
        echo $banana3 -> exibirObjeto();

        $banana = NULL;

        echo "<br><br>";
        var_dump($banana);


    ?>



</body>
</html>