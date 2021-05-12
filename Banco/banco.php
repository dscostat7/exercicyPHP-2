<?php

require 'funcoes.php'; // require_once -> será importado apenas se ainda não o tiver;

$contasCorrente = [
    
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

$contasCorrente['123.456.789-10'] = sacar($contasCorrente['123.456.789-10'], 500);
//$contas['061.725.329-36'] = sacar($contas['061.725.329-36'], 2500);

$contasCorrente['711.905.469-49'] = deposito($contasCorrente['711.905.469-49'], 7000);

unset ($contasCorrente['061.725.329-36']); // Excluindo variavel;

caixaAlta($contasCorrente['711.905.469-49']); // chamando a função caixa alta

// echo "<ul>";
// foreach ($contas as $cpf => $conta) {
//     exibeConta($conta);
// }
// echo "</ul>";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <h1 style="text-align:center">Contas Corrente</h1>

    <dl>
        <?php foreach($contasCorrente as $cpf => $conta) { ?>
        <dt><h3>
            <?php echo $conta['titular']; ?> - <?php $cpf; ?>
            </h3></dt>

        <dd><h3>
            Saldo: $<?php echo $conta['saldo']; ?>
            </h3></dd>
        <?php } ?>
    </dl>
</body>
</html>