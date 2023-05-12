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

        $h = date("H");

        if($h >= 0){
            echo "<p> Bom dia à todos!</p>";            
        }else if($h >= 12){
            echo "<p> Boa tarde à todos!</p>";
        }else if($h > 18){
            echo "<p> Boa noite à todos!</p>";
        }
    ?>

</body>
</html>