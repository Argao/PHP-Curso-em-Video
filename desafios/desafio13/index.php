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
        $valor = $_GET['valor']??0;
    ?>

    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Qual valor você deseja sacar? (R$)*></label>  
            <input type="number" name="valor" id="valor" step="5" value = "<?=$valor?>">
            <small>*Notas disponiveis: R$100,R$50,R$10 e R$5</small>
            <input type="submit" value="sacar">
        </form>
    </main>

 
    <section>

        <?php 
            $resto = $valor;
            $cem = (int) ($valor / 100);
            $resto = $valor % 100;
            $cinquenta = (int) ($resto/50);
            $resto %= 50; 
            $dez = (int) ($resto/10);
            $resto %= 10; 
            $cinco = (int) ($resto/5);

            echo "
                <h2> Saque de R$".number_format($valor,2,",",".")." realizado</h2>
                <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
                <ul>
                    <li>100 conto: ".$cem."</li>
                    <li>50 conto: ".$cinquenta."</li>
                    <li>10 conto: ".$dez."</li>
                    <li>5 conto: ".$cinco."</li>
                </ul>
            "

        ?>

    </section>   

</body>
</html>