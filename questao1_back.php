<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $copias = $_POST["txtTotalCopias"];

    if ($copias <= 100 ) {
        $preco = $copias * 0.25;
    }
    else {
        $preco = $copias * 0.20;
    }
    
    ?>

    <h1>O preço das <?php echo $copias ?> cópias impressas é R$<?php echo $preco ?></h1>
</body>
</html>