<?php

// Obter dados do formulário
$massa = $_POST['massa'];
$recheio = $_POST['recheio'];
$peso = $_POST['peso'];
$observacoes = $_POST['observacoes'];

// Definir preços por massa e recheio
$precosMassa = [
    'paodelo' => 20.00,
    'chocolate' => 20.00,
    'redvelvet' => 40.00,
    'cenoura' => 20.00,
];

$precosRecheio = [
    'brigadeiro' => 30.00,
    'ganache' => 45.00,
    'moussedechocolate' => 50.00,
    'leiteninho' => 40.00,
    'leiteninhocommorango' => 40.00,
    'leiteninhocomabacaxi' => 40.00,
];

// Calcular preço total
$precoMassa = $precosMassa[$massa];
$precoRecheio = $precosRecheio[$recheio];
$precoTotal = $precoMassa + ($precoRecheio * $peso);

// Formatar valores para reais
$precoMassaFormatado = number_format($precoMassa, 2, ',', '.');
$precoRecheioFormatado = number_format($precoRecheio, 2, ',', '.');
$precoTotalFormatado = number_format($precoTotal, 2, ',', '.');

// Gerar texto de resposta
$textoResposta = <<<HTML
$peso KG

Massa: <span class="math-inline">massa \= R</span>$precoMassaFormatado
Recheio: <span class="math-inline">recheio \= R</span>$precoRecheioFormatado
Observações
