<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            width: 300px;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid black;
            border-radius: 4px;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }
        button:hover {
            opacity:1;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo ao nosso site!</h1>
    </header>
    <main>
        <section class="container">
            <form action="/login" method="post">
                <div>
                    <label for="uname"><b>Usuário</b></label>
                    <input type="text" placeholder="Insira o Usuário" name="uname" required>
                </div>
                <div>
                    <label for="psw"><b>Senha</b></label>
                    <input type="password" placeholder="Insira a Senha" name="psw" required>
                </div>
                <div>
                    <button type="submit">Login</button>
                </div>
            </form>
        </section>
    </main>
    <footer>
        <p>© 2024 Nossa Empresa</p>
    </footer>
</body>
</html>
