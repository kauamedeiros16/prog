<?php
class Funcionario {
    private $nome;
    private $idade;
    private $salario;

    public function setNome($nome) {
        if (!empty($nome)) {
            $this->nome = $nome;
        }
    }

    public function getNome() {
        return $this->nome;
    }

    public function setIdade($idade) {
        if ($idade >= 0 && $idade <= 120) {
            $this->idade = $idade;
        }
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setSalario($salario) {
        if ($salario > 0) {
            $this->salario = $salario;
        }
    }

    public function getSalario() {
        return $this->salario;
    }

    public function exibirDados() {
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Idade: " . $this->getIdade() . "<br>";
        echo "Salário: R$ " . $this->getSalario() . "<br>";
    }
}


$f = new Funcionario();
$f->setNome("Carlos");
$f->setIdade(40);
$f->setSalario(5000);

$f->exibirDados();
?>