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
        $numero = $_GET['numero']??0;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for=" numero">Número</label>
            <input type="number" name=" numero" id="numero" step="0.01" value="<?=$numero?>">
            <button type="submit">Calcular Raízes</button>
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        
        <?php 
        $raizQuadrada = sqrt($numero);
        $raisCubica = $numero ** (1/3);

        echo "
            <p> Analizando o <strong> o número ".$numero."</strong>, temos:
            <ul>
                <li>A sua raiz quadrada é <strong>".number_format($raizQuadrada,3,",",".")."</strong></li>
                <li>A sua raiz cúbica é <strong>".number_format($raisCubica,3,",",".")."</strong></li>
            </ul>
        "
        ?>
    </section>    
</body>
</html>