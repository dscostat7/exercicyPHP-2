<?php

require 'funcoes.php'; // require_once -> será importado apenas se ainda não o tiver;

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

caixaAlta($contas['061.725.329-36']); // chamando a função caixa alta

foreach ($contas as $cpf => $conta) {
    exibeMensagem("$cpf $conta[titular] $$conta[saldo]");
}