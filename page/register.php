
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
    <link rel="icon" type="image/x-icon" href="beats-icon.ico">
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(90deg, rgba(255, 51, 0, 0.822), #ff6f1cce);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        /* Estilos para o contêiner do formulário de login */
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative; /* Para permitir o posicionamento do logo */
        }
        
        /* Estilos para o cabeçalho "Login" */
        .login-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        
        /* Estilos para os campos de entrada de texto */
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 15px;
            box-sizing: border-box;
        }
        
        /* Estilos para o botão de envio */
        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color:  rgb(255, 51, 0);;
            color: #fff;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        /* Estilos para o botão de envio ao passar o mouse sobre ele */
        .login-container input[type="submit"]:hover {
            background-color: #ff7323;
        }

        /* Estilo para o logo */
        .logo {
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            width: 75px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Logo do Beats -->
        <img class="logo" src="beats-logo.png" alt="Logo do Beats">
        <!-- Título "Login" -->
        <h2>Criar Conta</h2>

        <!-- Formulário de login -->
        <form action="conexao_1.php" method="post">
            <!-- Campo de entrada para nome de usuário -->
            <input type="text" name="email" placeholder="Email" required>
            <!-- Campo de entrada para senha -->
            <input type="password" name="senha" placeholder="Senha" required>
            <!-- Botão de envio do formulário -->
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
