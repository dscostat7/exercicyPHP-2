<?php


$contas = [
    
    "061.725.329-36"=> [                       // Corrigindo erro aparentemente falso positivo, transformando numero em caractere
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

foreach ($contas as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}