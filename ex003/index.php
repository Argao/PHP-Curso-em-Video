<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>testes de tipos primitivos</h1>
    <?php 
        //0x = hexadecimal
        //0b = binario
        //0 = Octal

        //$v = 300;
        //var_dump($v);

        // $num = (int)3e2; // 3 x 10(2)
        // var_dump($num);

        //bollean retorna vazio se false e 1 se true

        // $vet = [6,2.5,"Maria",3,false];
        // var_dump($vet);

        class Pessoa{
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
        
    ?>
</body>
</html>