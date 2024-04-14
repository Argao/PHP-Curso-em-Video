<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="style.css">
    <style>
        tr{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <button type="submit">Analisar</button>
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        
        <?php 
            $resto = ($dividendo % $divisor) ?? 0;
            $quociente = (int) ($dividendo / $divisor);

            echo "<p>O dividendo é $dividendo</p>";
            echo "<p>O divisor é $divisor</p>";
            echo "<p>O quociente é $quociente</p>"; 
            echo "<p>O resto é $resto</p>";
        ?>

    </section>
</body>
</html>