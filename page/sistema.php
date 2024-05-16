<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login-figma-style.php');
    }
    $logado = $_SESSION['email']

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="perfil.css">
    <link rel="stylesheet" href="Ncard.css">
    <title>Beats</title>
    <link rel="icon" type="image/x-icon" href="beats-icon.ico">
</head>
<body>
    <header>

    </header>
    <main>
        <section class="home">
            <div class="home-text">
                <h4 class="text-h4">Bem Vindo ao BEATS</h4>
                <h1 class="text-h1">Entre no Ritmo saudavel!</h1>
                <br>
                <br>
                <a href="biblioteca.php" class="home-btn">Biblioteca de exercicios</a>
                <br>
                <br>
                <br>
                <a href="meus-exercicios.php" class="home-btn">Meus exercicios</a>
            </div>
            <div></div>
            <div class="container1">
                <div class="wrapper">
                   <a href="#">
                   <img src="academia.jpg" alt="">
                   </a>
                   <div class="title">
                    <?php
                     echo "$logado";
                     ?>
                   </div>
                   <div class="place">
                      Natal, Brasil
                   </div>
                </div>
                <div class="content">
                   <p>
                        Sedentario <br>
                   </p>
                   <div class="buttons">
                      <div class="btn">
                        <br>
                       
                         <a href="sair.php"><button>Desconectar</button></a>
                      </div>
                      
                   </div>
             <script>
                const img = document.querySelector("img");
                img.onclick = function(){
                  this.classList.toggle("active");
                  icons.classList.toggle("active");
                }
             </script>
           <br>
        </section>
    <script src="landing.js"></script>
</body>
</html>