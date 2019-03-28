<?php

require_once 'pessoa.php';
require_once 'conta.php';

// $pessoaF = new PessoaFisica("Jhonatan", "123.000.999-00");
// $pessoaF -> adicionarEndereco('Avenida Brasil - São Paulo');
// $pessoaF -> verEndereco();

$pessoaJ = new PessoaJuridica(
    "João da Silva",
    "123.000.999-00",
    "Panificadora Sul Brasil Ltda. EPP",
    "Padaria Pão Quentinho",
    "99.123.000/0001-00"
);
$pessoaJ -> adicionarEndereco("Avenida Brasil - São Paulo");
$pessoaJ -> verDadosEmpresa();

$conta = new ContaCorrente(
    $pessoaJ -> getTitular(),
    $pessoaJ -> getCpf(),
    "1223434-6",
    "7050"
);
 
$conta -> saque(3);
$conta -> depositar(10);
$conta -> extrato();

?>