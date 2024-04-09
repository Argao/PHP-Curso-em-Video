<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <h1>Trabalhando com números aleatórios</h1>

        <p>Gerando números aleatórios entre 0 e 100..</p>
        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);
            //rand() 1951 - Linear Congruential Generator
            //mt_rand() 1996 - Mersenne Twister
            // A partir do php 7.1, rand() é um alias para mt_rand()
            //randon_int() gera números aleatórios de forma criptograficamente segura
            echo "<p>O valor gerado foi <strong>$num</strong></p>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>