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
        <form name="formQ1" action="questao1_back.php" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Exercícios PHP - Questão 01</h2>
                        <div class="form-group">
                            <label>Total de cópias</label>
                            <input type="text" class="form-control" required="" placeholder="Digite o total de cópias" name="txtTotalCopias">
                        </div>

                        <div class="form-group">

                            <input type="submit" value="Calcular" class="btn btn-info" name="btCalcular"  >
                        </div>

                       

                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
