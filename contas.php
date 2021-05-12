<?php

$conta1 = ['titular' => 'Diego Souza', 'saldo' => 2000];
$conta2 = ['titular' => 'Sonia Regina', 'saldo' => 4000];
$conta3 = ['titular' => 'Julio Fernandes', 'saldo' => 1500];
$conta4 = ['titular' => 'Vitor Souza', 'saldo' => 1989];

$contas = [$conta1, $conta2, $conta3, $conta4];

for ($i = 0; $i < count($contas); $i++) { 
    echo $contas[$i]['titular'] . PHP_EOL;
}
