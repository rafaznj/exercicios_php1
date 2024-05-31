<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = $_POST["txtNumero"];
    $cont = 0;

    if ($num > 1) {
        for ($i = 2; $i <= $num; $i++) {
            if ($num % $i == 0){
                $cont += 1; 
            }
        }
        if ($cont == 1) {
            echo "<h1>É primo.</h1>";
        }
        else{
            echo "<h1>Não é primo.</h1>";
        }
    }
    else {
        echo "<h1>Não é primo.</h1>";
    }
    ?>
</body>
</html>