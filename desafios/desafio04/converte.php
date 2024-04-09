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
        
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            $inicio = date("m-d-Y",strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            // $dados = json_decode(file_get_contents($url));
            // $cotacao = $dados->value[0]->cotacaoCompra;

            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados['value'][0]['cotacaoCompra'];
            // $cotacao = (float) str_replace(",",".",$cotacao);

            $real = $_GET ['din'] ?? 0; 
            
            $dolar = $real / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ".numfmt_format_currency($padrao,$real,"BRL")." equivalem a <strong> ".numfmt_format_currency($padrao,$dolar,"USD")."</strong></p>";
            echo"<p><strong>Cotação atual de ".numfmt_format_currency($padrao,$cotacao,"BRL")."</strong> informada diretamente pela api do banco central</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </section>
</body> 
</html>