<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Salario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $total = $_GET['segundos']??0;
    ?>

    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Qual o total de segundos?></label>  
            <input type="number" name="segundos" id="segundos" value = "<?=$total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

 
    <section>
        <h2>Totalizando tudo</h2>

        <?php 
            // $semana = (int) ($total/60/60/24/7);
            // $resto = $total - $semana*60*60*24*7;
            // $dias = (int) ($resto/60/60/24);
            // $resto = $resto - ($dias*60*60*24);
            // $horas = (int) ($resto/60/60);
            // $resto = $resto - ($horas*60*60);
            // $minutos = (int) ($resto/60);
            // $segundos = $resto - $minutos*60;

            $resto = $total;
            //Total de semanas
            $semana = (int)( $resto / 604800);
            $resto = $resto % 604800;
            //Total de dias
            $dias = (int) ($resto / 86400);
            $resto = $resto % 86400;
            //Total de horas
            $horas = (int) ($resto / 3600);
            $resto = $resto % 3600;
            //Total de minutos
            $minutos = (int) ($resto / 60);
            //Total de segundos
            $segundos = $resto % 60;




            
            echo "
                <p> Analisando o valor que voê digitou, <strong>".number_format($total,0,",",".")." segundos</strong> equivalem a um total de:</p>
                <ul>
                    <li>".$semana." semanas</li>
                    <li>".$dias." dias</li>
                    <li>".$horas." horas</li>
                    <li>".$minutos." minutos</li>
                    <li>".$segundos." segundos</li>  
                </ul>
            "

        ?>

    </section>   

</body>
</html>