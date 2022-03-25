<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>"Atividade 7 - Gerencia de configuração"</title> 
    </head>
    <body>
        <?php
         $peso = $_GET['peso'];
         $altura = $_GET['altura'];
         
         $imc = $peso/($altura*$altura);
         
         $resultado = number_format($imc);
        ?>
    </body>
</html>
