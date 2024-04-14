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
        $val1 = $_GET['1val']??0;
        $peso1 = $_GET['1peso']??1;
        $val2 = $_GET['2val']??0;
        $peso2 = $_GET['2peso']??1;
    ?>

    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="1val">1º Valor</label>
            <input type="number" name="1val" id="1val" value="<?=$val1?>">
            <label for="1peso">1º Peso</label>
            <input type="number" name="1peso" id="1peso"value="<?=$peso1?>">
            <label for="2val">2º Valor</label>
            <input type="number" name="2val" id="2val" value="<?=$val2?>">
            <label for="2peso">2º Peso</label>
            <input type="number" name="2peso" id="2peso" value="<?=$peso2?>">
            <button type="submit">Calcular Médias</button>
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        
        <?php 
            $mediaAritmetica = ($val1 + $val2)/2;
            $mediaPonderada = ($val1*$peso1 + $val2*$peso2) / ($peso1+$peso2);
            echo "
                <p> Analizando os valores ".$val1." e ".$val2.":
                <ul>
                    <li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a ".number_format($mediaAritmetica,"2",",",".")."</li>
                    <li>A <strong>Média Aritimética Ponderada</strong> com os pesos ".$peso1." e ".$peso2." é igual a ".number_format($mediaPonderada,"2",",",".")."</li>
                </ul>
            "
        ?>
    </section>    
</body>
</html>