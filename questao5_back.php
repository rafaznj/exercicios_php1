<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $num1 = $_POST["txtNumero1"];
    $num2 = $_POST["txtNumero2"];

    if ($num1 > $num2){
        for ($i = $num1; $i <= $num2; $i++){
            if ($i % 2 == 0){
                echo $i;
            }
        }
    }

    else if ($num2 > $num1){
        for ($i = $num2; $i <= $num1; $i++){
            if ($i % 2 == 0){
                echo $i;
            }
        }
    }

    else{
        echo "<h1>Não há números pares entre eles.</h1>"
    }
    
    
    
    
    
    
    
    
    ?>
</body>
</html>