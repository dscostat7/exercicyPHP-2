<?php

function exibeMensagem(string $mensagem) 
{   
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valor) : array
{
    if ($valor > $conta['saldo']) {
        exibeMensagem("Você não pode sacar um valor maior que o disponível em sua conta!");
    } else {
        $conta['saldo'] -= $valor;
    }
    return $conta;
}

function deposito(array $conta, float $valor) : array
{
    if ($valor < 0) {
        exibeMensagem("Você não pode depositar um valor negativo!");
    } else {
        $conta['saldo'] += $valor;
        }
    return $conta;
}


$contas = [
    
    "061.725.329-36"=> [      
        'titular' => 'Diego Souza', 
        'saldo' => 2000
    ], 
    "123.456.789-10" => [
        'titular' => 'Sonia Regina', 
        'saldo' => 4000
    ], 
    "711.905.469-49" => [
        'titular' => 'Julio Fernandes', 
        'saldo' => 1500
    ], 
    "987.654.321-10" => [
        'titular' => 'Vitor Souza', 
        'saldo' => 1989
    ]
];

$contas['123.456.789-10'] = sacar($contas['123.456.789-10'], 500);
$contas['061.725.329-36'] = sacar($contas['061.725.329-36'], 2500);

$contas['711.905.469-49'] = deposito($contas['711.905.469-49'], 7000);

foreach ($contas as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " " . "$" . $conta['saldo']);
}