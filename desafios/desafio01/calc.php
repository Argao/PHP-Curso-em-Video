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
        <h1>Resultado Final</h1>
        <?php 
            $num = $_GET['numero'] ?? 0;
            $antecessor = $num - 1;
            $sucessor = $num + 1;

            echo "<p>O número escolhido foi <strong>$num</strong><br>
            O seu antecessor é $antecessor<br> O seu sucessor é $sucessor</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>