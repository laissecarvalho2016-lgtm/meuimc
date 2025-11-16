<?php

// -------------------------------------------------------------
// Função para classificar IMC usando array
// -------------------------------------------------------------
function classificarIMC($imc)
{
    $faixas = [
        ["min" => 0,     "max" => 18.5, "classificacao" => "Magreza"],
        ["min" => 18.51, "max" => 24.9, "classificacao" => "Saudável"],
        ["min" => 25.0,  "max" => 29.9, "classificacao" => "Sobrepeso"],
        ["min" => 30.0,  "max" => 34.9, "classificacao" => "Obesidade Grau I"],
        ["min" => 35.0,  "max" => 39.9, "classificacao" => "Obesidade Grau II"],
        ["min" => 40.0,  "max" => 999,  "classificacao" => "Obesidade Grau III"]
    ];

    foreach ($faixas as $faixa) {
        if ($imc >= $faixa["min"] && $imc <= $faixa["max"]) {
            return $faixa["classificacao"];
        }
    }
}

// -------------------------------------------------------------
// Recebendo dados do formulário
// -------------------------------------------------------------
$peso = $_POST["peso"];
$altura = $_POST["altura"];

$imc = $peso / ($altura * $altura);
$imc = number_format($imc, 2, ".", "");

$classificacao = classificarIMC($imc);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Resultado do IMC</h2>

    <p><strong>Seu IMC:</strong> <?= $imc ?></p>
    <p><strong>Classificação:</strong> <?= $classificacao ?></p>

    <a href="index.html">
        <button>Calcular novamente</button>
    </a>
</div>

</body>
</html>
