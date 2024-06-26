<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="splash-screen.css" />
    <script defer type="module" src="splash-screen.js"></script>
    <title>Beats</title>
    <link rel="icon" type="image/x-icon" href="beats-icon.ico">
  </head>

  <body>
    <div class="splash-screen">
      <h1 class="logo-header"> <span class="logo">BEATS </span><br /> </h1>
    </div>
    <!-- Script para redirecionamento automático -->
    <script>
      // Função para redirecionar para outra página após um certo tempo
      function redirect() {
        // Altere "outra_pagina.html" para o URL da página que deseja redirecionar
        window.location.replace("lading.php");
      }

      // Defina o tempo em milissegundos antes de redirecionar (por exemplo, 5000 para 5 segundos)
      setTimeout(redirect, 3252); // Redireciona após 3.2 segundos
    </script>
  </body>
</html>
