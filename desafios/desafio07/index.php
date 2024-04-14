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
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $salario = $_GET['salario'] ?? 0;
        $salarioMinimo = 1380;
    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?=$salario?>">
            <p>Considerando um salário mínimo de <strong><?php echo numfmt_format_currency($padrao,$salarioMinimo,"BRL")?></strong></p>
            <button type="submit">Calcular</button>
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        
        <?php 
            $num_de_salario_minimo = (int) ($salario/$salarioMinimo);
            $resto = $salario - $salarioMinimo * $num_de_salario_minimo;

            echo "<p>Quem recebe um salário de ".numfmt_format_currency($padrao,$salario,"BRL")." ganha <strong>".$num_de_salario_minimo." salários mínimos</strong> + ".numfmt_format_currency($padrao,$resto,"BRL")." </p>"
        ?>
    </section>    
</body>
</html>