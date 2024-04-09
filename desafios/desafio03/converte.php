<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
        
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            const COTACAO = 5.03;
            $real = $_GET ['din'] ?? 0;
            $dolar = $real / COTACAO;

            // echo "<p>Seus R$ ".number_format($real, 2, ",", ".")." equivalem a <strong> US$ ".number_format($dolar,2,",",".")."</strong></p>";
            // echo"<p><strong>Cotação fixa de R$".number_format(COTACAO,2,",",".")."</strong> informada diretamente no código</p>";

            //Formatação de moedas com internacionalização
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ".numfmt_format_currency($padrao,$real,"BRL")." equivalem a <strong> ".numfmt_format_currency($padrao,$dolar,"USD")."</strong></p>";
            echo"<p><strong>Cotação fixa de ".numfmt_format_currency($padrao,COTACAO,"BRL")."</strong> informada diretamente no código</p>";

        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </section>
</body>
</html>