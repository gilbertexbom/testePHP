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

        $x = 5;
        $y = 10;

        function teste(){
            # global $x, $y;

            # $y = $x + $y;

            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];

        }

        function teste2(){

            static $g = 0;

             echo "<br> " . $g . "<br>";

             $g++;

        }

        function teste3(){
            static $h = 1;

            echo "<br> <br> <h" . $h . "> Título " . $h . "</h" . $h . "><br>";

            $h++;
        }

        teste();

        echo $y;

        teste2();
        teste2();
        teste2();

        $i = 1;

        while($i < 7){
            teste3();
            $i++;
        }

    ?>


</body>
</html>