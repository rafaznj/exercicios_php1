<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EXERCÍCIOS PRÁTICOS SOBRE PHP</title>
    </head>
    <body>
        <?php
        
        $ladoA = $_POST["txtLadoA"];
        $ladoB = $_POST["txtLadoB"];
        $ladoC = $_POST["txtLadoC"];
        
        if (($ladoA == $ladoB) && ($ladoB == $ladoC))
        {
          echo "<h1>O triângulo é Equilátero</h1>";   
        }
        else if (($ladoA != $ladoB) && ($ladoA != $ladoC) && ($ladoB != $ladoC))
        {
            echo "<h1>O triângulo Escaleno</h1>";
        }
        else
        {
            echo "<h1>O triângulo é Isósceles</h1>";
        }
        
        ?>
    </body>
</html>
