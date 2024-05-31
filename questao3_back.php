<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
         <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR --> 

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!--------------------------------------------->
        <meta charset="UTF-8">
        <title></title>
        <style>
            h2{
                color:#c82333;
                font-family: calibri;
                font-size:80px;
            }

            .alerta1
            {
                color:#0069d9;
            }
            .alerta2
            {
                color:#00BB00;
            }
            .alerta3
            {
                color:#ba8b00;
            }

        </style>
    </head>
    <body>
        <?php
        $pecasProduzidas = $_POST["txtTotalProduzido"];
        $pecasDefeituosas = $_POST["txtTotalDefeituoso"];

        $perc_defeitos = (100 * $pecasDefeituosas) / $pecasProduzidas;

        $perc_defeitos = round($perc_defeitos);

        if ($pecasDefeituosas > 0.1 * $pecasProduzidas) {
            
            
            
            echo "<h2 class='alert alert-warning'>A máquina precisa de manutenção URGENTE!</h2>";
            if ($perc_defeitos <= 30) {
                echo "<h2>Nesta produção houve um percentual de <span class='alert alert-success'> " . $perc_defeitos . " % </span> de peças com defeitos</h2>";
            }
            else if ($perc_defeitos <=60)
            {
               echo "<h2>Nesta produção houve um percentual de <span class='alerta2'> " . $perc_defeitos . " % </span> de peças com defeitos</h2>"; 
            }
            else
            {
                echo "<h2>Nesta produção houve um percentual de <span class='alerta3'> " . $perc_defeitos . " % </span> de peças com defeitos</h2>";
            }
        } else {
            echo "<h3>A máquina está produzindo bem!</h3>";
        }
        ?>
        
        <div style="margin-top:50px" class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $perc_defeitos ?>"
  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $perc_defeitos ?>%">
    <?php echo $perc_defeitos ?>% Complete (success)
  </div>
</div>
</div>

    </body>
</html>
