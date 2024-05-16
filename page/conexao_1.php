<?php
$host = "localhost"; // Endereço do servidor MySQL
$username = "root"; // Nome de usuário do MySQL
$password = ""; // Senha do MySQL
$database = "registro"; // Nome do banco de dados
$conn = new mysqli($host, $username, $password, $database);

$email = $_POST["email"]; // Obtém o valor do campo 'nome' enviado via POST
$senha = $_POST["senha"]; // Obtém o valor do campo 'email' enviado via POST

// Monta a query SQL para inserir os dados na tabela INSERE NOS CAMPOS DA TABELA
$query = "INSERT INTO registrados (email, senha) VALUES ('$email' , '$senha' )";

// Executa a query no banco de dados
$result = mysqli_query($conn, $query);

// Verifica se a query foi executada com sucesso
if($result) {
    // Redireciona para a página "home.php"
    header("Location: login-figma-style.php");
    exit(); // Finaliza o script para garantir que o redirecionamento funcione corretamente
} else {
    // Em caso de falha na execução da query, exibe uma mensagem de erro e encerra o script
    echo "Erro ao cadastrar os dados.";
    exit();
}
?>
