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
        $dataAtual = date("Y");
        $dataAlvo = $_GET['data']??0;
        $nascimento = $_GET['nascimento']??0;
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="nascimento">Em que anos você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" value = "<?=$nascimento?>">
            <label for="data">Quer saber a idade em que ano?(<?php echo $dataAtual?>) </label>
            <input type="number" name="data" id="data" value = "<?=$dataAlvo?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        
        <?php 
            $idade = $dataAlvo - $nascimento;
             echo "<p>Quem nasceu em ".$nascimento." vai ter <strong>".$idade."</ anos em ".$dataAlvo."</p>"
        ?>
    </section>    
</body>
</html>