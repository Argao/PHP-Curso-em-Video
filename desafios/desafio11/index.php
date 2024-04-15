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
        $preco = $_GET['preco']??0;
        $reajuste = $_GET['porcentagem']??0;
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" value = "<?=$preco?>" step="0.01"  value="<?=$preco?>">
            <label for="porcentagem">Qual será o percentual de reajuste? <strong id="reajusteLabel">(<?=$reajuste?>%)</strong> </label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1"  oninput="mudaValor()" value="<?=$reajuste?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>

 
    <section>
        <h2>Resultado do reajuste</h2>
        <?php 
           $precoAtualizado = $preco  * ($reajuste/100 + 1);

            echo "<p> O produto que custava ".numfmt_format_currency($padrao,$preco,"BRL").", com <strong>".$reajuste."% de aumento</strong> vai passar a custar <strong>".numfmt_format_currency($padrao,$precoAtualizado,"BRL")."</strong> a partir de agora.</p>"
        ?>
    </section>   

    <script>
        function mudaValor() {
            var reajuste = document.getElementById('porcentagem').value;
            document.getElementById('reajusteLabel').textContent = '(' +reajuste + '%)';
        }
    </script>

</body>
</html>