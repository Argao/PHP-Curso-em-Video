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
            function convertBRLtoUSD() {
                $top = 100;
                $format = 'json';
                $date = date('m-d-Y');
                $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='{$date}'&$top=100&$format=json";
                $json = file_get_contents($url);
                $data = json_decode($json, true);
                if (isset($data['value'][0]['cotacaoCompra'])) {
                    return $data['value'][0]['cotacaoCompra'];
                } else {
                    return null;
                }
            }
            $real = $_GET ['din'] ?? 0;
            $real = (float) str_replace(",",".",$real);

            $rate = convertBRLtoUSD();
            if ($rate) {
                $dolar = $real / $rate;
                echo "<p>Seus R$ ".number_format($real, 2, ",", ".")." equivalem a <strong> US$ ".number_format($dolar,2,",",".")."</strong></p>";
                echo"<p><strong>Cotação fixa de R$".number_format($rate,2,",",".")."</strong> informada diretamente no código</p>";
            } else {
                echo "<p>Unable to fetch exchange rate.</p>";
            }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </section>
</body> 
</html>