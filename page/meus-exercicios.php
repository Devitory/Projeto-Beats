<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com Select e Checkboxes</title>
    <style>
        body {
            background-color: orangered;
            font-family: Arial, sans-serif;
        }
        form {
            width: 25%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        label {
            display: inline-block;
            width: 100px;
            margin-right: 90px;
        }

        input[type="number"] {
            width: 25px;
            margin-right: 15px;
            
        }
        .form-row {
            text-align: center;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .home-btn{
    background-color: #ed830b;
    color: white;        
    left: 30%;
    position: relative;
    padding: 15px 45px;
    border-radius: 10px;
    font-weight: 700;
    transition: all 0.5s;
}
        .home-btn:hover{
    background: #fc4c35;
}

@media only screen and (max-width: 768px) {
  form {
    width: 270px;
  }
  label {
    width: 100px;
  }
}
    </style>
</head>
<body>

<form action="conexao_3.php" method="post">

    <section class="home">
        <div class="home-text">
        <a href="sistema.php" class="home-btn">Beats</a>
    </div>
    </section>


    <h2>Exercícios físicos para a lazer:</h2>


    
    <div class="form-row">
    <input type="text" name="corrida" id="corrida" placeholder="Nome de usuário" required>
        <input type="checkbox" id="corrida" name="exercicio_checkbox[]" value="corrida">
        <label for="corrida">Corrida</label>
        <br>
        <br>
        <input type="number" id="crossfit_duracao_horas" name="corrida_vez" min="0" max="10" value="0"> vezes
        <input type="number" id="crossfit_duracao_minutos" name="corrida_min" min="0" max="59" value="0"> minutos
    </div>

<br>

    <div class="form-row">
        <input type="checkbox" id="ciclismo" name="exercicio_checkbox[]" value="ciclismo">
        <label for="ciclismo">Ciclismo</label>
        <br>
        <br>
        <input type="number" id="crossfit_duracao_horas" name="exercicio_duracao_horas[]" min="0" max="10" value="0"> vezes
        <input type="number" id="crossfit_duracao_minutos" name="exercicio_duracao_minutos[]" min="0" max="59" value="0"> minutos
    </div>
  
<br>

<div class="form-row">
    <input type="checkbox" id="natacao" name="exercicio_checkbox[]" value="natacao">
    <label for="natacao">Natação</label>
    <br>
    <br>
    <input type="number" id="crossfit_duracao_horas" name="natacao_vez" min="0" max="10" value="0"> vezes
    <input type="number" id="crossfit_duracao_minutos" name="natacao_min min="0" max="59" value="0"> minutos
</div>

<br>

<div class="form-row">
    <input type="checkbox" id="caminhada" name="exercicio_checkbox[]" value="caminhada">
    <label for="caminhada">Caminhada</label>
    <br>
    <br>
    <input type="number" id="crossfit_duracao_horas" name="caminhada_vez" min="0" max="10" value="0"> vezes
    <input type="number" id="crossfit_duracao_minutos" name="caminhada_min" min="0" max="59" value="0"> minutos
</div>

<br>

    <div class="form-row">
        <input type="checkbox" id="flexoes" name="exercicio_checkbox[]" value="flexoes">
        <label for="flexoes">Flexões</label>
        <br>
        <br>
        <input type="number" id="crossfit_duracao_horas" name="flexoes_vez" min="0" max="10" value="0"> vezes
        <input type="number" id="crossfit_duracao_minutos" name="flexoes_min min="0" max="59" value="0"> minutos
    </div>
  
<br>

    
    <div class="form-row">
        <input type="checkbox" id="abdominais" name="exercicio_checkbox[]" value="abdominais">
        <label for="abdominais">Abdominais</label>
        <br>
        <br>
        <input type="number" id="abdominais_duracao_horas" name="abdominais_vez" min="0" max="10" value="0"> vezes
        <input type="number" id="abdominais_duracao_minutos" name="abdominais_min" min="0" max="59" value="0"> minutos
    </div>

<br>

    <div class="form-row">
        <input type="checkbox" id="agachamentos" name="exercicio_checkbox[]" value="agachamentos">
        <label for="agachamentos">Agachamentos</label>
        <br>
        <br>
        <input type="number" id="agachamentos_duracao_horas" name="agachamentos_vez" min="0" max="10" value="0"> vezes
        <input type="number" id="agachamentos_duracao_minutos" name="agachamentos_min" min="0" max="59" value="0"> minutos
    </div>

<br>

    <div class="form-row">
        <input type="checkbox" id="polichinelos" name="exercicio_checkbox[]" value="polichinelos">
        <label for="polichinelos">Polichinelos</label>
        <br>
        <br>
        <input type="number" id="remada_duracao_horas" name="polichinelos_vez" min="0" max="10" value="0"> vezes
        <input type="number" id="remada_duracao_minutos" name="polichinelos_min" min="0" max="59" value="0"> minutos
    </div>

<br>

    <div class="form-row">
        <input type="checkbox" id="pular_corda" name="exercicio_checkbox[]" value="pular_corda">
        <label for="pular_corda">Corda</label>
        <br>
        <br>
        <input type="number" id="pular_corda_duracao_horas" name="pular_corda_vez min="0" max="10" value="0"> vezes
        <input type="number" id="pular_corda_duracao_minutos" name="pular_corda_min" min="0" max="59" value="0"> minutos
    </div>

<br>

    <div class="form-row">
        <input type="checkbox" id="yoga" name="exercicio_checkbox[]" value="yoga">
        <label for="yoga">Yoga</label>
        <br>
        <br>
        <input type="number" id="voador_duracao_horas" name="yoga_vez" min="0" max="10" value="0"> vezes
        <input type="number" id="voador_duracao_minutos" name="Yoga_min" min="0" max="59" value="0"> minutos
    </div>

    <br><br>
    <a href="registro_exercicio.php "></button>Salvar</button></a>
</form>
</body>
</html>
