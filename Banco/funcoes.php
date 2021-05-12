<?php

function exibeMensagem(string $mensagem) 
{   
    echo $mensagem . '<br>';
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

function caixaAlta(array &$conta) 
{
    $conta['titular'] = mb_strtoupper($conta['titular']);  // transformando todos os caracteres da string titular em caixa alta
}

function exibeConta(array $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $$saldo.</li>";
}