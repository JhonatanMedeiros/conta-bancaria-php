<?php

abstract class Conta {
    private $titular;
    private $cpf;
    private $agencia;
    private $conta;
    private $tipo;
    private $saldo = 0;

    public function __construct($titular, $cpf, $agencia, $conta, $tipo) {
        $this->titular = $titular;
        $this->cpf = $cpf;
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->tipo = $tipo;
    }

    public function setCpf($cpf) {
        $this -> cpf = $cpf;
    }

    public function getCpf() {
        return $this -> cpf;
    }
    
    public function saque($valor) {
        if ($this->saldo <= 0 || $valor > $this->saldo) {
            echo "\n";
            echo "EXTRATO DO SAQUE BANCÁRIO  -------------------------------- \n";
            echo "Mensagem: Saldo insuficiente. \n";
            echo "----------------------------------------------------------- \n";
            return;
        }
        
        $this->saldo -= $valor;

        echo "\n";
        echo "EXTRATO DO SAQUE BANCÁRIO  -------------------------------- \n";
        echo "Você realizou um saque no valor de: " . $valor . "\n";
        echo "Seu novo saldo é: "                      . $this->saldo . "\n";
        echo "----------------------------------------------------------- \n";
        
    }
    
    public function depositar($valor) {
        $this->saldo += $valor;
        echo "\n";
        echo "EXTRATO DO DEPÓSITO BANCÁRIO  ----------------------------- \n";
        echo "Você realizou um deposito no valor de: " . $valor . "\n";
        echo "Seu novo saldo é: "                      . $this->saldo . " \n";
        echo "----------------------------------------------------------- \n";
    }

    public function extrato() {
        echo "\n";
        echo "EXTRATO DA CONTA BANCÁRIA  --------------------------------\n";
        echo "Titular: "        . $this -> titular   . "\n";
        echo "CPF: "            . $this -> cpf   . "\n";
        echo "Agência: "        . $this -> agencia  . "\n";
        echo "Conta: "          . $this -> conta    . "\n";
        echo "Tipo de Conta: "  . $this -> tipo     . "\n";
        echo "Saldo: "          . $this -> saldo    . "\n";
        echo "-----------------------------------------------------------\n";
    }
    
}

class ContaCorrente extends Conta {

    public function __construct($titular, $cpf, $agencia, $conta)  {
        parent::__construct($titular, $cpf, $agencia, $conta, 'Conta corrente');
    }
    
}

class ContaPoupanca extends Conta {

    public function __construct($titular, $cpf, $agencia, $conta)  {
        parent::__construct($titular, $cpf, $agencia, $conta, 'Conta Poupança');
    }
}

?>