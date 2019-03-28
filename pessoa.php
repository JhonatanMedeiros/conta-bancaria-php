<?php

abstract class Pessoa {
    
    private $titular;
    private $cpf;
    private $endereco;

    public function __construct($titular, $cpf) {
        $this -> titular =  $titular;
        $this -> cpf = $cpf;
    }

    public function setTitular($titular) {
        $this -> titular = $titular;
    }

    public function getTitular() {
        return $this -> titular;
    }

    public function setCpf($cpf) {
        $this -> cpf = $cpf;
    }

    public function getCpf() {
        return $this -> cpf;
    }

    public function adicionarEndereco($endereco) {
        $this->endereco = $endereco;
        echo "Endereço cadastrado com sucesso.";
        echo "\n";
    }

    public function verEndereco() {
        if (!$this->endereco) {
            echo "Nenhum endereço cadastrado.";
            echo "\n";
            return;
        }
        echo "Endereço: " . $this->endereco;
        echo "\n";
    }

}

class PessoaJuridica extends Pessoa {
    private $razao_social;
    private $nome_fantasia;
    private $cnpj;

    public function __construct($titular, $cpf, $razao_social, $nome_fantasia, $cnpj) {
        parent::__construct($titular, $cpf);
        $this -> razao_social = $razao_social;
        $this -> nome_fantasia = $nome_fantasia;
        $this -> cnpj = $cnpj;
    }

    public function verDadosEmpresa() {
        echo "\n";
        echo "INFORMAÇÕES DA EMPRESA  -----------------------------------\n";
        echo "Responsável: "        . $this -> getTitular()   . "\n";
        echo "CPF: "                . $this -> getCpf()  . "\n";
        echo "Razão social: "       . $this -> razao_social    . "\n";
        echo "Nome fantasia: "      . $this -> nome_fantasia     . "\n";
        echo "CNPJ: "               . $this -> cnpj    . "\n";
        echo "-----------------------------------------------------------\n";
    }
    
}

class PessoaFisica extends Pessoa {
    private $rg;

    public function __construct($titular, $cpf) {
        parent::__construct($titular, $cpf);
    }

    public function setRg($rg) {
        $this -> rg = $rg;
    }

    public function getRg() {
        return $this -> rg;
    }
    
}

?>