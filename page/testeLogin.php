<?php

    session_start();

   if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
   {
    
    include_once('conexao_2.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //print_r('email:'. $email);
    //print_r('senha:'. $senha);

    $sql = "SELECT * FROM registrados WHERE email = '$email' and senha = '$senha'"; 
    //Esse comando Acima^ verifica se o email e senha são igauis a da tela de login 

    $result = $conn->query($sql); // Esse comando vai ao banco e executa query da variavel $sql 

    //print_r($result);

    if(mysqli_num_rows($result) < 1) //caso o login exista ele segue, caso não volta pro mesmo login
    {
        unset($_SESSION['email']); // Caso não exista destroi session que possui email e senha
        unset($_SESSION['senha']);
        header('Location: login-figma-style.php');
    }
    else
    {
        $_SESSION['email'] = $email; //Session acessa por meio da variavel email e senha
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php'); // COLOCAR O PERFIL AQUI DEPOIS DAS SESSIONS
    }
   }
   else
   {
        header('Location: login-figma-style.php');
   }
?>
