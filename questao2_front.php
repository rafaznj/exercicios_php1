<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EXERCÍCIOS PRÁTICOS SOBRE PHP</title>

        <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR --> 

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!--------------------------------------------->
    </head>
    <body>
        <form name="formQ2" action="questao2_back.php" method="post" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Exercícios PHP - Questão 02</h2>

                        <div class="form-group">
                            <label>Lado A</label>
                            <input type="text" class="form-control" required="" placeholder="Digite um valor" name="txtLadoA">
                        </div>

                     <div class="form-group">
                            <label>Lado B</label>
                            <input type="text" class="form-control" required="" placeholder="Digite um valor" name="txtLadoB">
                        </div>
                        
                        <div class="form-group">
                            <label>Lado C</label>
                            <input type="text" class="form-control" required="" placeholder="Digite um valor" name="txtLadoC">
                        </div>

                        <div class="form-group">

                            <input type="submit" value="Classificar" class="btn btn-info" name="btClassificar"  >
                        </div>

                     

                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
