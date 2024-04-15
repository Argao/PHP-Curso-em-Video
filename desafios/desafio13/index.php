<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Salario</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>

    <?php 
        $valor = $_GET['valor']??0;
    ?>

    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Qual valor você deseja sacar? (R$)*></label>  
            <input type="number" name="valor" id="valor"  value = "<?=$valor?>">
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
            $vinte = (int) ($resto/20);
            $resto %= 20;
            $dez = (int) ($resto/10);
            $resto %= 10;
            $cinco = (int) ($resto/5);
            $resto %= 5;
            $dois = (int) ($resto/2);
            

            // echo "
            //     <h2> Saque de R$".number_format($valor,2,",",".")." realizado</h2>
            //     <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            //     <ul>
            //         <li>100 conto: ".$cem."</li>
            //         <li>50 conto: ".$cinquenta."</li>
            //         <li>10 conto: ".$dez."</li>
            //         <li>5 conto: ".$cinco."</li>
            //     </ul>
            // "

        ?>

        <h2> Saque de R$<?=number_format($valor,2,",",".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt=""><?=$cem?>x</li>
            <li><img src="imagens/50-reais.jpg" alt=""><?=$cinquenta?>x</li>
            <li><img src="imagens/20-reais.jpg" alt=""><?=$vinte?>x</li>
            <li><img src="imagens/10-reais.jpg" alt=""><?=$dez?>x</li>
            <li><img src="imagens/5-reais.jpg" alt=""><?=$cinco?>x</li>
            <li><img src="imagens/2-reais.jpg" alt=""><?=$dois?>x</li>
            <li><img src="imagens/1-real.jpg" alt=""><?=$resto?>x</li>
        </ul>    

    </section>   

</body>
</html>