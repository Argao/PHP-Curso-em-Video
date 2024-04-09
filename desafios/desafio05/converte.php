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
        
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = (float) str_replace(",",".",$_GET['real'] ?? 0);
            $inter = intval($num);
            $frac = $num - $inter;
            echo"<p> Alanisando o número <strong>".number_format($num,3,",",".")."</strong> informado pelo usuário</p>";
            echo"<ul>
                    <li>A parte inteira do número é  <strong>".number_format($inter,0,",",".")."</strong></li>
                    <li>A parte fracionária do número é  <strong>".number_format($frac,3,",",".")."</strong></li>
                </ul>";    
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </section>
</body>
</html>